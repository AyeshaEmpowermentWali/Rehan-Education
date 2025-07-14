<?php
require_once 'db.php';

$message = '';
if ($_POST) {
    $student_name = mysqli_real_escape_string($conn, $_POST['student_name']);
    $parent_name = mysqli_real_escape_string($conn, $_POST['parent_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $grade = mysqli_real_escape_string($conn, $_POST['grade']);
    $previous_school = mysqli_real_escape_string($conn, $_POST['previous_school']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $additional_info = mysqli_real_escape_string($conn, $_POST['additional_info']);
    
    $sql = "INSERT INTO applications (student_name, parent_name, email, phone, grade, previous_school, address, additional_info) 
            VALUES ('$student_name', '$parent_name', '$email', '$phone', '$grade', '$previous_school', '$address', '$additional_info')";
    
    if (mysqli_query($conn, $sql)) {
        $message = '<div class="success-message">Application submitted successfully! We will contact you soon.</div>';
    } else {
        $message = '<div class="error-message">Sorry, there was an error submitting your application. Please try again.</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Now - Rehan School</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        /* Header Styles */
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            display: flex;
            align-items: center;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: #ffd700;
            border-radius: 8px;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: #333;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            align-items: center;
            gap: 2rem;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        .nav-menu a:hover, .nav-menu a.active {
            background: rgba(255,255,255,0.1);
            transform: translateY(-2px);
        }

        .apply-btn {
            background: linear-gradient(45deg, #00bcd4, #2196f3);
            color: white !important;
            padding: 0.8rem 1.5rem !important;
            border-radius: 25px;
            font-weight: bold;
            box-shadow: 0 4px 15px rgba(0,188,212,0.3);
        }

        /* Main Content */
        .main-content {
            margin-top: 80px;
            padding: 4rem 0;
            min-height: calc(100vh - 80px);
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .page-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .page-header h1 {
            font-size: 3rem;
            color: #333;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .page-header p {
            font-size: 1.2rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        .application-form {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .form-section {
            margin-bottom: 2rem;
        }

        .form-section h3 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1rem;
            font-weight: 600;
            border-bottom: 2px solid #00bcd4;
            padding-bottom: 0.5rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: 500;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #00bcd4;
            box-shadow: 0 0 0 3px rgba(0,188,212,0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .required {
            color: #e74c3c;
        }

        .submit-btn {
            background: linear-gradient(45deg, #00bcd4, #2196f3);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 1rem;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,188,212,0.4);
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            border: 1px solid #c3e6cb;
        }

        .error-message {
            background: #f8d7da;
            color: #721c24;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            border: 1px solid #f5c6cb;
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                flex-direction: column;
                padding: 1rem 0;
                gap: 0;
            }

            .nav-menu.active {
                display: flex;
            }

            .nav-menu a {
                padding: 1rem;
                width: 100%;
                text-align: center;
                border-bottom: 1px solid rgba(255,255,255,0.1);
            }

            .mobile-menu-btn {
                display: block;
            }

            .page-header h1 {
                font-size: 2.5rem;
            }

            .application-form {
                padding: 2rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav-container">
            <div class="logo">
                <div class="logo-icon">🎓</div>
                Rehan School
            </div>
            <ul class="nav-menu" id="navMenu">
                <li><a href="index.php">Home</a></li>
                <li><a href="video-tours.php">Video Tours</a></li>
                <li><a href="facilitators.php">Facilitators</a></li>
                <li><a href="curriculum.php">Curriculum</a></li>
                <li><a href="videos.php">Videos</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="faqs.php">FAQs</a></li>
                <li><a href="payment.php">Payment</a></li>
                <li><a href="apply.php" class="apply-btn active">Apply Now</a></li>
            </ul>
            <button class="mobile-menu-btn" onclick="toggleMobileMenu()">☰</button>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="page-header">
                <h1>Apply Now</h1>
                <p>Join Rehan School and become a leader of tomorrow</p>
            </div>

            <div class="application-form">
                <?php echo $message; ?>
                <form method="POST" action="">
                    <div class="form-section">
                        <h3>Student Information</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="student_name">Student Full Name <span class="required">*</span></label>
                                <input type="text" id="student_name" name="student_name" required>
                            </div>
                            <div class="form-group">
                                <label for="grade">Grade/Class <span class="required">*</span></label>
                                <select id="grade" name="grade" required>
                                    <option value="">Select Grade</option>
                                    <option value="Pre-K">Pre-K</option>
                                    <option value="Kindergarten">Kindergarten</option>
                                    <option value="Grade 1">Grade 1</option>
                                    <option value="Grade 2">Grade 2</option>
                                    <option value="Grade 3">Grade 3</option>
                                    <option value="Grade 4">Grade 4</option>
                                    <option value="Grade 5">Grade 5</option>
                                    <option value="Grade 6">Grade 6</option>
                                    <option value="Grade 7">Grade 7</option>
                                    <option value="Grade 8">Grade 8</option>
                                    <option value="Grade 9">Grade 9</option>
                                    <option value="Grade 10">Grade 10</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="previous_school">Previous School (if any)</label>
                            <input type="text" id="previous_school" name="previous_school">
                        </div>
                    </div>

                    <div class="form-section">
                        <h3>Parent/Guardian Information</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="parent_name">Parent/Guardian Name <span class="required">*</span></label>
                                <input type="text" id="parent_name" name="parent_name" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number <span class="required">*</span></label>
                                <input type="tel" id="phone" name="phone" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address <span class="required">*</span></label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Home Address <span class="required">*</span></label>
                            <textarea id="address" name="address" required></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h3>Additional Information</h3>
                        <div class="form-group">
                            <label for="additional_info">Any additional information or special requirements</label>
                            <textarea id="additional_info" name="additional_info" placeholder="Please share any additional information about your child, special needs, interests, or questions you may have..."></textarea>
                        </div>
                    </div>

                    <button type="submit" class="submit-btn">Submit Application</button>
                </form>
            </div>
        </div>
    </main>

    <script>
        function toggleMobileMenu() {
            const navMenu = document.getElementById('navMenu');
            navMenu.classList.toggle('active');
        }

        // Form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const studentName = document.getElementById('student_name').value.trim();
            const parentName = document.getElementById('parent_name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const grade = document.getElementById('grade').value;
            const address = document.getElementById('address').value.trim();

            if (!studentName || !parentName || !email || !phone || !grade || !address) {
                e.preventDefault();
                alert('Please fill in all required fields.');
                return false;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                e.preventDefault();
                alert('Please enter a valid email address.');
                return false;
            }

            // Phone validation
            const phoneRegex = /^[\+]?[0-9\s\-$$$$]{10,}$/;
            if (!phoneRegex.test(phone)) {
                e.preventDefault();
                alert('Please enter a valid phone number.');
                return false;
            }
        });
    </script>
</body>
</html>
