<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Where Leaders Are Made, Not Born</title>
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
            overflow-x: hidden;
        }

        /* Header Styles */
        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
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
            color: #333;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #FFD700, #FFA500);
            border-radius: 8px;
            margin-right: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #333;
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
        }

        .nav-menu {
            display: flex;
            list-style: none;
            align-items: center;
            gap: 2rem;
        }

        .nav-menu a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            position: relative;
        }

        .nav-menu a:hover {
            color: #007bff;
            background: rgba(0, 123, 255, 0.1);
        }

        .nav-menu a.active {
            color: #007bff;
            font-weight: 600;
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: #333;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://sjc.microlink.io/CV1zUtWBxJlhyqIwp8mcL1oqvA7gNyETIx7ZMpgyBMfgOZsRPOpDaTsqJ4WPjy8dSlSSgxXa4YmHLo4pqQFsFw.jpeg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }

        .hero-content {
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero-content h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            line-height: 1.2;
        }

        .hero-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            line-height: 1.3;
        }

        .hero-content p {
            font-size: 1.4rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
            font-weight: 400;
        }

        /* Features Section */
        .features {
            padding: 6rem 0;
            background: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-subtitle {
            color: #007bff;
            font-size: 1.1rem;
            margin-bottom: 1rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section-title h2 {
            font-size: 2.8rem;
            color: #333;
            font-weight: 700;
            line-height: 1.3;
        }

        .section-title h2 .highlight {
            color: #007bff;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .feature-card {
            background: white;
            padding: 3rem 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 2rem;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: white;
            position: relative;
        }

        .feature-card:nth-child(1) .feature-icon {
            background: linear-gradient(135deg, #2c3e50, #34495e);
        }

        .feature-card:nth-child(2) .feature-icon {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
        }

        .feature-card:nth-child(3) .feature-icon {
            background: linear-gradient(135deg, #f39c12, #e67e22);
        }

        .feature-card h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: #333;
            font-weight: 600;
        }

        .feature-card p {
            color: #666;
            line-height: 1.8;
            font-size: 1rem;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: white;
            padding: 3rem 0 1rem;
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: 500;
        }

        .footer-links a:hover {
            color: #007bff;
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 1rem;
            color: #bdc3c7;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: rgba(255, 255, 255, 0.98);
                backdrop-filter: blur(10px);
                flex-direction: column;
                padding: 1rem 0;
                gap: 0;
                box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            }

            .nav-menu.active {
                display: flex;
            }

            .nav-menu a {
                padding: 1rem;
                width: 100%;
                text-align: center;
                border-bottom: 1px solid rgba(0,0,0,0.1);
            }

            .mobile-menu-btn {
                display: block;
            }

            .hero-content h1 {
                font-size: 2.8rem;
            }

            .hero-content h2 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 1.2rem;
            }

            .features-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .feature-card {
                padding: 2.5rem 1.5rem;
            }

            .footer-links {
                flex-direction: column;
                gap: 1rem;
            }

            .section-title h2 {
                font-size: 2.2rem;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .feature-card {
            animation: fadeInUp 0.6s ease forwards;
        }

        .feature-card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .feature-card:nth-child(3) {
            animation-delay: 0.4s;
        }

        /* Scroll Effects */
        .hero {
            background-attachment: fixed;
        }

        @media (max-width: 768px) {
            .hero {
                background-attachment: scroll;
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
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="how-to-copy.php">How To Copy Rehan School</a></li>
                <li><a href="video-tours.php">Video Tours</a></li>
                <li><a href="facilitators.php">Facilitators</a></li>
                <li><a href="curriculum.php">Curriculum</a></li>
                <li><a href="videos.php">Videos</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="faqs.php">FAQs</a></li>
            </ul>
            <button class="mobile-menu-btn" onclick="toggleMobileMenu()">☰</button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Rehan School</h1>
            <h2>Where Leaders Are Made, Not Born</h2>
            <p>Creating Leaders and Problem-Solver of Tomorrow</p>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <div class="section-subtitle">Reasons to choose Rehan School</div>
                <h2>What Makes <span class="highlight">Rehan School</span> Unique?</h2>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">💻</div>
                    <h3>Innovative Curriculum</h3>
                    <p>Rehan School integrates cutting-edge technology and soft skills training, preparing students for future challenges.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🤖</div>
                    <h3>AI-Enabled Education</h3>
                    <p>As the first AI-enabled school in Pakistan, Rehan School offers advanced learning tools that keep pace with global trends.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🌳</div>
                    <h3>Holistic Development</h3>
                    <p>Our comprehensive approach includes modern classrooms, well-equipped labs, and sports facilities to foster overall development.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-links">
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="curriculum.php">Curriculum</a>
                <a href="contact.php">Contact</a>
                <a href="faqs.php">FAQs</a>
                <a href="videos.php">Videos</a>
            </div>
            <div class="copyright">
                <p>&copy; 2024 Rehan School. All rights reserved. | Empowering Future Leaders</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            const navMenu = document.getElementById('navMenu');
            navMenu.classList.toggle('active');
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add scroll effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.98)';
                header.style.backdropFilter = 'blur(15px)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            }
        });

        // Parallax effect for hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero');
            if (hero) {
                hero.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });
    </script>
</body>
</html>
