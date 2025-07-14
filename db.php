<?php
/**
 * Database Connection File for Rehan School
 * Professional database connection with error handling and security features
 */

// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'dbf3hinmbgdvvi');
define('DB_USER', 'ugrj543f7lree');
define('DB_PASS', 'cgmq43woifko');
define('DB_CHARSET', 'utf8mb4');

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection class
class Database {
    private static $instance = null;
    private $connection;
    private $host = DB_HOST;
    private $db_name = DB_NAME;
    private $username = DB_USER;
    private $password = DB_PASS;
    private $charset = DB_CHARSET;

    // Private constructor to prevent direct instantiation
    private function __construct() {
        $this->connect();
    }

    // Get database instance (Singleton pattern)
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Establish database connection
    private function connect() {
        try {
            // Create connection with error handling
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->db_name);
            
            // Check connection
            if ($this->connection->connect_error) {
                throw new Exception("Connection failed: " . $this->connection->connect_error);
            }
            
            // Set charset
            if (!$this->connection->set_charset($this->charset)) {
                throw new Exception("Error setting charset: " . $this->connection->error);
            }
            
            // Set timezone
            $this->connection->query("SET time_zone = '+05:00'"); // Pakistan timezone
            
        } catch (Exception $e) {
            $this->logError("Database Connection Error: " . $e->getMessage());
            die("Database connection failed. Please try again later.");
        }
    }

    // Get connection object
    public function getConnection() {
        return $this->connection;
    }

    // Execute prepared statement
    public function executeQuery($sql, $params = [], $types = '') {
        try {
            $stmt = $this->connection->prepare($sql);
            
            if (!$stmt) {
                throw new Exception("Prepare failed: " . $this->connection->error);
            }
            
            if (!empty($params)) {
                if (empty($types)) {
                    // Auto-detect parameter types
                    $types = str_repeat('s', count($params));
                }
                $stmt->bind_param($types, ...$params);
            }
            
            $stmt->execute();
            
            if ($stmt->error) {
                throw new Exception("Execute failed: " . $stmt->error);
            }
            
            return $stmt;
            
        } catch (Exception $e) {
            $this->logError("Query Execution Error: " . $e->getMessage() . " | SQL: " . $sql);
            return false;
        }
    }

    // Get single record
    public function getRow($sql, $params = [], $types = '') {
        $stmt = $this->executeQuery($sql, $params, $types);
        if ($stmt) {
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        }
        return false;
    }

    // Get multiple records
    public function getRows($sql, $params = [], $types = '') {
        $stmt = $this->executeQuery($sql, $params, $types);
        if ($stmt) {
            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return false;
    }

    // Insert record and return ID
    public function insert($sql, $params = [], $types = '') {
        $stmt = $this->executeQuery($sql, $params, $types);
        if ($stmt) {
            return $this->connection->insert_id;
        }
        return false;
    }

    // Update/Delete records and return affected rows
    public function execute($sql, $params = [], $types = '') {
        $stmt = $this->executeQuery($sql, $params, $types);
        if ($stmt) {
            return $stmt->affected_rows;
        }
        return false;
    }

    // Escape string for security
    public function escape($string) {
        return $this->connection->real_escape_string($string);
    }

    // Begin transaction
    public function beginTransaction() {
        return $this->connection->autocommit(false);
    }

    // Commit transaction
    public function commit() {
        $result = $this->connection->commit();
        $this->connection->autocommit(true);
        return $result;
    }

    // Rollback transaction
    public function rollback() {
        $result = $this->connection->rollback();
        $this->connection->autocommit(true);
        return $result;
    }

    // Get last error
    public function getError() {
        return $this->connection->error;
    }

    // Log errors to file
    private function logError($message) {
        $log_file = 'error_log.txt';
        $timestamp = date('Y-m-d H:i:s');
        $log_message = "[$timestamp] $message" . PHP_EOL;
        file_put_contents($log_file, $log_message, FILE_APPEND | LOCK_EX);
    }

    // Prevent cloning
    private function __clone() {}

    // Prevent unserialization
    private function __wakeup() {}

    // Close connection on destruction
    public function __destruct() {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}

// Create global database instance
try {
    $db = Database::getInstance();
    $conn = $db->getConnection();
    
    // Test connection
    if ($conn->ping()) {
        // Connection successful - you can remove this in production
        // echo "Database connected successfully!";
    }
    
} catch (Exception $e) {
    die("Database initialization failed: " . $e->getMessage());
}

// Helper functions for common database operations
function sanitizeInput($data) {
    global $conn;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return mysqli_real_escape_string($conn, $data);
}

function executeQuery($sql, $params = []) {
    global $db;
    return $db->executeQuery($sql, $params);
}

function getRow($sql, $params = []) {
    global $db;
    return $db->getRow($sql, $params);
}

function getRows($sql, $params = []) {
    global $db;
    return $db->getRows($sql, $params);
}

function insertRecord($sql, $params = []) {
    global $db;
    return $db->insert($sql, $params);
}

function updateRecord($sql, $params = []) {
    global $db;
    return $db->execute($sql, $params);
}

// Security functions
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validatePhone($phone) {
    return preg_match('/^[\+]?[0-9\s\-$$$$]{10,}$/', $phone);
}

function generateToken($length = 32) {
    return bin2hex(random_bytes($length));
}

function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

function verifyPassword($password, $hash) {
    return password_verify($password, $hash);
}

// Session management
function startSecureSession() {
    if (session_status() == PHP_SESSION_NONE) {
        ini_set('session.cookie_httponly', 1);
        ini_set('session.cookie_secure', 1);
        ini_set('session.use_strict_mode', 1);
        session_start();
    }
}

// CSRF protection
function generateCSRFToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = generateToken();
    }
    return $_SESSION['csrf_token'];
}

function validateCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Rate limiting (simple implementation)
function checkRateLimit($identifier, $max_attempts = 5, $time_window = 300) {
    $cache_file = "rate_limit_" . md5($identifier) . ".txt";
    $current_time = time();
    
    if (file_exists($cache_file)) {
        $data = json_decode(file_get_contents($cache_file), true);
        if ($current_time - $data['first_attempt'] < $time_window) {
            if ($data['attempts'] >= $max_attempts) {
                return false; // Rate limit exceeded
            }
            $data['attempts']++;
        } else {
            $data = ['first_attempt' => $current_time, 'attempts' => 1];
        }
    } else {
        $data = ['first_attempt' => $current_time, 'attempts' => 1];
    }
    
    file_put_contents($cache_file, json_encode($data));
    return true;
}

// Configuration constants
define('SITE_NAME', 'Rehan School');
define('SITE_EMAIL', 'info@rehanschool.edu.pk');
define('SITE_PHONE', '+92 21 1234 5678');
define('SITE_ADDRESS', '123 Education Street, Karachi, Pakistan');

// Email configuration (for future use)
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'your-email@gmail.com');
define('SMTP_PASSWORD', 'your-app-password');

// File upload configuration
define('MAX_FILE_SIZE', 5 * 1024 * 1024); // 5MB
define('ALLOWED_FILE_TYPES', ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx']);
define('UPLOAD_PATH', 'uploads/');

// Create upload directory if it doesn't exist
if (!file_exists(UPLOAD_PATH)) {
    mkdir(UPLOAD_PATH, 0755, true);
}

// Timezone setting
date_default_timezone_set('Asia/Karachi');

// Error logging function
function logActivity($action, $details = '', $user_id = null) {
    global $db;
    $sql = "INSERT INTO audit_log (table_name, operation, record_id, new_values, created_at) VALUES (?, ?, ?, ?, NOW())";
    $params = ['activity_log', $action, $user_id ?: 0, json_encode(['details' => $details])];
    $db->executeQuery($sql, $params, 'ssss');
}

// Success response
if (defined('DB_CONNECTION_TEST') && DB_CONNECTION_TEST) {
    echo json_encode([
        'status' => 'success',
        'message' => 'Database connection established successfully',
        'timestamp' => date('Y-m-d H:i:s')
    ]);
}
?>
