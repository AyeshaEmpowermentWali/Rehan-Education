<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How To Copy Rehan School - Rehan School</title>
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
        }

        .nav-menu a:hover, .nav-menu a.active {
            color: #007bff;
            background: rgba(0, 123, 255, 0.1);
        }

        /* Main Content */
        .main-content {
            margin-top: 80px;
            padding: 4rem 0;
            background: #f8f9fa;
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

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .step-card {
            background: white;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .step-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(45deg, #007bff, #0056b3);
        }

        .step-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .step-number {
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        .step-card h3 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .step-card p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        .step-list {
            list-style: none;
            margin-top: 1rem;
        }

        .step-list li {
            padding: 0.5rem 0;
            color: #555;
            display: flex;
            align-items: flex-start;
        }

        .step-list li:before {
            content: '✓';
            color: #007bff;
            font-weight: bold;
            margin-right: 0.5rem;
            margin-top: 0.1rem;
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

            .page-header h1 {
                font-size: 2.5rem;
            }

            .steps-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .step-card {
                padding: 2rem;
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
                <li><a href="how-to-copy.php" class="active">How To Copy Rehan School</a></li>
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

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="page-header">
                <h1>How To Copy Rehan School</h1>
                <p>Step-by-step guide to implementing our educational model</p>
            </div>

            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h3>Vision & Mission Development</h3>
                    <p>Start by establishing a clear vision and mission that focuses on leadership development and problem-solving skills.</p>
                    <ul class="step-list">
                        <li>Define your educational philosophy</li>
                        <li>Set clear learning objectives</li>
                        <li>Establish core values</li>
                        <li>Create a mission statement</li>
                    </ul>
                </div>

                <div class="step-card">
                    <div class="step-number">2</div>
                    <h3>AI Integration Planning</h3>
                    <p>Develop a comprehensive plan for integrating artificial intelligence into your curriculum and teaching methods.</p>
                    <ul class="step-list">
                        <li>Research AI educational tools</li>
                        <li>Train faculty on AI technologies</li>
                        <li>Implement AI-powered learning platforms</li>
                        <li>Create AI ethics guidelines</li>
                    </ul>
                </div>

                <div class="step-card">
                    <div class="step-number">3</div>
                    <h3>Curriculum Design</h3>
                    <p>Design an innovative curriculum that balances traditional subjects with modern skills and technologies.</p>
                    <ul class="step-list">
                        <li>Integrate STEM subjects</li>
                        <li>Include soft skills training</li>
                        <li>Add leadership development programs</li>
                        <li>Incorporate project-based learning</li>
                    </ul>
                </div>

                <div class="step-card">
                    <div class="step-number">4</div>
                    <h3>Faculty Development</h3>
                    <p>Recruit and train qualified educators who can deliver innovative teaching methods and embrace technology.</p>
                    <ul class="step-list">
                        <li>Hire experienced educators</li>
                        <li>Provide continuous training</li>
                        <li>Encourage innovation in teaching</li>
                        <li>Foster collaborative environment</li>
                    </ul>
                </div>

                <div class="step-card">
                    <div class="step-number">5</div>
                    <h3>Infrastructure Setup</h3>
                    <p>Create modern learning environments with state-of-the-art facilities and technology infrastructure.</p>
                    <ul class="step-list">
                        <li>Smart classrooms with interactive boards</li>
                        <li>Advanced science laboratories</li>
                        <li>Computer labs with latest technology</li>
                        <li>Sports and recreational facilities</li>
                    </ul>
                </div>

                <div class="step-card">
                    <div class="step-number">6</div>
                    <h3>Community Engagement</h3>
                    <p>Build strong relationships with parents, local community, and industry partners to support student development.</p>
                    <ul class="step-list">
                        <li>Regular parent-teacher meetings</li>
                        <li>Community service programs</li>
                        <li>Industry partnerships</li>
                        <li>Alumni network development</li>
                    </ul>
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
