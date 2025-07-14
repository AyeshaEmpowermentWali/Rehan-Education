<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Rehan School</title>
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

        .about-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-bottom: 4rem;
        }

        .about-card {
            background: white;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .about-card:hover {
            transform: translateY(-5px);
        }

        .about-card h3 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .about-card p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        .stats-section {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 3rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .stat-item h4 {
            font-size: 2.5rem;
            color: #00bcd4;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .stat-item p {
            color: #666;
            font-weight: 500;
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

            .about-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .stats-grid {
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
                <li><a href="curriculum.php">Curriculum</a></li>
                <li><a href="videos.php">Videos</a></li>
                <li><a href="about.php" class="active">About Us</a></li>
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
                <h1>About Rehan School</h1>
                <p>Discover our mission, vision, and commitment to excellence in education</p>
            </div>

            <div class="about-content">
                <div class="about-card">
                    <h3>Our Mission</h3>
                    <p>To create leaders and problem-solvers of tomorrow by providing innovative, AI-enabled education that prepares students for the challenges of the 21st century.</p>
                    <p>We believe in nurturing not just academic excellence, but also character, creativity, and critical thinking skills that will serve our students throughout their lives.</p>
                </div>

                <div class="about-card">
                    <h3>Our Vision</h3>
                    <p>To be Pakistan's leading educational institution, recognized globally for our innovative approach to learning and our commitment to developing future leaders.</p>
                    <p>We envision a world where every student has access to quality education that empowers them to make a positive impact on society.</p>
                </div>

                <div class="about-card">
                    <h3>Our Values</h3>
                    <p><strong>Excellence:</strong> We strive for the highest standards in everything we do.</p>
                    <p><strong>Innovation:</strong> We embrace new technologies and teaching methods.</p>
                    <p><strong>Integrity:</strong> We maintain honesty and transparency in all our interactions.</p>
                    <p><strong>Inclusivity:</strong> We welcome students from all backgrounds and abilities.</p>
                </div>
            </div>

            <div class="stats-section">
                <div class="stats-grid">
                    <div class="stat-item">
                        <h4>500+</h4>
                        <p>Students Enrolled</p>
                    </div>
                    <div class="stat-item">
                        <h4>50+</h4>
                        <p>Expert Faculty</p>
                    </div>
                    <div class="stat-item">
                        <h4>15+</h4>
                        <p>Years of Excellence</p>
                    </div>
                    <div class="stat-item">
                        <h4>95%</h4>
                        <p>Success Rate</p>
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

        // Navigation function
        function navigateTo(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
