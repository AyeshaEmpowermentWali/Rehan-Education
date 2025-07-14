<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum - Rehan School</title>
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
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: calc(100vh - 80px);
        }

        .container {
            max-width: 1200px;
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

        .curriculum-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .curriculum-card {
            background: white;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .curriculum-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(45deg, #667eea, #764ba2);
        }

        .curriculum-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .curriculum-card h3 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .curriculum-card .grade-level {
            background: linear-gradient(45deg, #00bcd4, #2196f3);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .subjects-list {
            list-style: none;
            margin-bottom: 1.5rem;
        }

        .subjects-list li {
            padding: 0.5rem 0;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
        }

        .subjects-list li:before {
            content: '✓';
            color: #00bcd4;
            font-weight: bold;
            margin-right: 0.5rem;
        }

        .curriculum-features {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 3rem;
        }

        .curriculum-features h2 {
            text-align: center;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature-item {
            text-align: center;
            padding: 1.5rem;
            background: #f8f9fa;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            background: #e9ecef;
            transform: translateY(-3px);
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .feature-item h4 {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .feature-item p {
            color: #666;
            font-size: 0.9rem;
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

            .curriculum-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .features-grid {
                grid-template-columns: repeat(2, 1fr);
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
                <li><a href="curriculum.php" class="active">Curriculum</a></li>
                <li><a href="videos.php">Videos</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="faqs.php">FAQs</a></li>
                <li><a href="payment.php">Payment</a></li>
                <li><a href="apply.php" class="apply-btn">Apply Now</a></li>
            </ul>
            <button class="mobile-menu-btn" onclick="toggleMobileMenu()">☰</button>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="page-header">
                <h1>Our Curriculum</h1>
                <p>Comprehensive education designed to develop future leaders</p>
            </div>

            <div class="curriculum-grid">
                <div class="curriculum-card">
                    <div class="grade-level">Primary Level (K-5)</div>
                    <h3>Foundation Years</h3>
                    <ul class="subjects-list">
                        <li>English Language & Literature</li>
                        <li>Mathematics</li>
                        <li>Science</li>
                        <li>Social Studies</li>
                        <li>Islamic Studies</li>
                        <li>Computer Science</li>
                        <li>Art & Craft</li>
                        <li>Physical Education</li>
                    </ul>
                </div>

                <div class="curriculum-card">
                    <div class="grade-level">Middle Level (6-8)</div>
                    <h3>Development Years</h3>
                    <ul class="subjects-list">
                        <li>Advanced English</li>
                        <li>Mathematics & Algebra</li>
                        <li>Physics & Chemistry</li>
                        <li>Biology</li>
                        <li>Pakistan Studies</li>
                        <li>Programming & Robotics</li>
                        <li>Creative Arts</li>
                        <li>Sports & Fitness</li>
                    </ul>
                </div>

                <div class="curriculum-card">
                    <div class="grade-level">Secondary Level (9-10)</div>
                    <h3>Specialization Years</h3>
                    <ul class="subjects-list">
                        <li>Advanced Sciences</li>
                        <li>Higher Mathematics</li>
                        <li>Computer Programming</li>
                        <li>Business Studies</li>
                        <li>Research Methods</li>
                        <li>AI & Machine Learning</li>
                        <li>Leadership Skills</li>
                        <li>Project Management</li>
                    </ul>
                </div>
            </div>

            <div class="curriculum-features">
                <h2>Curriculum Features</h2>
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="feature-icon">🤖</div>
                        <h4>AI Integration</h4>
                        <p>Cutting-edge AI tools and machine learning concepts</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">🌐</div>
                        <h4>Global Standards</h4>
                        <p>International curriculum aligned with global benchmarks</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">🔬</div>
                        <h4>STEM Focus</h4>
                        <p>Strong emphasis on Science, Technology, Engineering & Math</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">💡</div>
                        <h4>Critical Thinking</h4>
                        <p>Problem-solving and analytical skills development</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">🎨</div>
                        <h4>Creative Arts</h4>
                        <p>Balanced approach including arts and creativity</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">🏆</div>
                        <h4>Leadership</h4>
                        <p>Leadership skills and character development</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function toggleMobileMenu() {
            const navMenu = document.getElementById('navMenu');
            navMenu.classList.toggle('active');
        }
    </script>
</body>
</html>
