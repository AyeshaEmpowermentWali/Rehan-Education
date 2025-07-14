<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Tours - Rehan School</title>
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

        .tours-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .tour-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .tour-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .tour-thumbnail {
            width: 100%;
            height: 250px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
            cursor: pointer;
            position: relative;
        }

        .tour-thumbnail.classroom {
            background: linear-gradient(45deg, #2ecc71, #27ae60);
        }

        .tour-thumbnail.lab {
            background: linear-gradient(45deg, #e74c3c, #c0392b);
        }

        .tour-thumbnail.library {
            background: linear-gradient(45deg, #f39c12, #e67e22);
        }

        .tour-thumbnail.sports {
            background: linear-gradient(45deg, #9b59b6, #8e44ad);
        }

        .tour-thumbnail.cafeteria {
            background: linear-gradient(45deg, #1abc9c, #16a085);
        }

        .play-button {
            position: absolute;
            width: 80px;
            height: 80px;
            background: rgba(255,255,255,0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333;
            font-size: 2rem;
            transition: all 0.3s ease;
        }

        .play-button:hover {
            background: white;
            transform: scale(1.1);
        }

        .tour-content {
            padding: 2rem;
        }

        .tour-title {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .tour-description {
            color: #666;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .tour-features {
            list-style: none;
            margin-bottom: 1.5rem;
        }

        .tour-features li {
            padding: 0.3rem 0;
            color: #555;
            display: flex;
            align-items: center;
        }

        .tour-features li:before {
            content: '✓';
            color: #00bcd4;
            font-weight: bold;
            margin-right: 0.5rem;
        }

        .tour-duration {
            background: #f0f8ff;
            color: #00bcd4;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            display: inline-block;
        }

        .virtual-tour-section {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 3rem;
            text-align: center;
        }

        .virtual-tour-section h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .virtual-tour-section p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 2rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .virtual-tour-btn {
            background: linear-gradient(45deg, #00bcd4, #2196f3);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .virtual-tour-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,188,212,0.4);
        }

        /* Virtual Tour Modal */
        .virtual-tour-modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.95);
        }

        .virtual-tour-content {
            position: relative;
            margin: 2% auto;
            width: 95%;
            height: 90%;
            background: white;
            border-radius: 15px;
            overflow: hidden;
        }

        .virtual-tour-header {
            background: linear-gradient(45deg, #00bcd4, #2196f3);
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .virtual-tour-header h3 {
            font-size: 1.5rem;
            margin: 0;
        }

        .close-virtual-tour {
            background: none;
            border: none;
            color: white;
            font-size: 2rem;
            cursor: pointer;
            padding: 0;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .close-virtual-tour:hover {
            background: rgba(255,255,255,0.2);
        }

        .virtual-tour-body {
            height: calc(100% - 80px);
            display: flex;
        }

        .tour-navigation {
            width: 250px;
            background: #f8f9fa;
            padding: 1rem;
            overflow-y: auto;
        }

        .tour-nav-item {
            display: block;
            padding: 1rem;
            margin-bottom: 0.5rem;
            background: white;
            border: none;
            border-radius: 10px;
            text-align: left;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 0.9rem;
        }

        .tour-nav-item:hover, .tour-nav-item.active {
            background: linear-gradient(45deg, #00bcd4, #2196f3);
            color: white;
            transform: translateX(5px);
        }

        .tour-display {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f0f0f0;
            position: relative;
        }

        .tour-scene {
            display: none;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .tour-scene.active {
            display: block;
        }

        .scene-info {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: rgba(0,0,0,0.8);
            color: white;
            padding: 1rem;
            border-radius: 10px;
            max-width: 300px;
        }

        .scene-info h4 {
            margin-bottom: 0.5rem;
        }

        .hotspot {
            position: absolute;
            width: 30px;
            height: 30px;
            background: #00bcd4;
            border-radius: 50%;
            cursor: pointer;
            animation: pulse 2s infinite;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(0, 188, 212, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(0, 188, 212, 0); }
            100% { box-shadow: 0 0 0 0 rgba(0, 188, 212, 0); }
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

            .tours-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .tour-thumbnail {
                height: 200px;
                font-size: 3rem;
            }

            .play-button {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }

            .virtual-tour-content {
                width: 98%;
                height: 95%;
                margin: 1% auto;
            }

            .virtual-tour-body {
                flex-direction: column;
            }

            .tour-navigation {
                width: 100%;
                height: 150px;
                display: flex;
                overflow-x: auto;
                padding: 0.5rem;
            }

            .tour-nav-item {
                min-width: 120px;
                margin-right: 0.5rem;
                margin-bottom: 0;
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
                <li><a href="video-tours.php" class="active">Video Tours</a></li>
                <li><a href="facilitators.php">Facilitators</a></li>
                <li><a href="curriculum.php">Curriculum</a></li>
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
                <h1>Virtual School Tours</h1>
                <p>Explore our campus from the comfort of your home with our interactive video tours</p>
            </div>

            <div class="virtual-tour-section">
                <h2>360° Virtual Campus Tour</h2>
                <p>Experience our complete campus with our immersive 360-degree virtual tour. Navigate through different areas, interact with hotspots, and get a real feel of our learning environment.</p>
                <button class="virtual-tour-btn" onclick="startVirtualTour()">🎯 Start Virtual Tour</button>
            </div>

            <div class="tours-grid">
                <div class="tour-card">
                    <div class="tour-thumbnail classroom" onclick="openTourScene('classroom')">
                        🏫
                        <div class="play-button">▶</div>
                    </div>
                    <div class="tour-content">
                        <h3 class="tour-title">Smart Classrooms</h3>
                        <p class="tour-description">Discover our state-of-the-art smart classrooms equipped with interactive whiteboards, AI-powered learning tools, and modern furniture designed for collaborative learning.</p>
                        <ul class="tour-features">
                            <li>Interactive Smart Boards</li>
                            <li>AI Learning Assistants</li>
                            <li>Flexible Seating Arrangements</li>
                            <li>High-Speed Internet</li>
                        </ul>
                        <span class="tour-duration">Duration: 4:30 min</span>
                    </div>
                </div>

                <div class="tour-card">
                    <div class="tour-thumbnail lab" onclick="openTourScene('lab')">
                        🔬
                        <div class="play-button">▶</div>
                    </div>
                    <div class="tour-content">
                        <h3 class="tour-title">Science Laboratories</h3>
                        <p class="tour-description">Explore our advanced science laboratories including physics, chemistry, biology, and computer labs equipped with the latest equipment and safety features.</p>
                        <ul class="tour-features">
                            <li>Modern Lab Equipment</li>
                            <li>Safety Systems</li>
                            <li>Research Facilities</li>
                            <li>Digital Microscopes</li>
                        </ul>
                        <span class="tour-duration">Duration: 6:15 min</span>
                    </div>
                </div>

                <div class="tour-card">
                    <div class="tour-thumbnail library" onclick="openTourScene('library')">
                        📚
                        <div class="play-button">▶</div>
                    </div>
                    <div class="tour-content">
                        <h3 class="tour-title">Digital Library</h3>
                        <p class="tour-description">Visit our comprehensive digital library featuring thousands of books, e-resources, quiet study areas, and collaborative spaces for group projects.</p>
                        <ul class="tour-features">
                            <li>Digital Book Collection</li>
                            <li>Study Pods</li>
                            <li>Research Databases</li>
                            <li>Quiet Zones</li>
                        </ul>
                        <span class="tour-duration">Duration: 3:45 min</span>
                    </div>
                </div>

                <div class="tour-card">
                    <div class="tour-thumbnail sports" onclick="openTourScene('sports')">
                        🏃
                        <div class="play-button">▶</div>
                    </div>
                    <div class="tour-content">
                        <h3 class="tour-title">Sports Complex</h3>
                        <p class="tour-description">Tour our comprehensive sports facilities including indoor gymnasium, outdoor courts, swimming pool, and fitness center promoting physical wellness.</p>
                        <ul class="tour-features">
                            <li>Indoor Gymnasium</li>
                            <li>Swimming Pool</li>
                            <li>Outdoor Courts</li>
                            <li>Fitness Center</li>
                        </ul>
                        <span class="tour-duration">Duration: 5:20 min</span>
                    </div>
                </div>

                <div class="tour-card">
                    <div class="tour-thumbnail cafeteria" onclick="openTourScene('cafeteria')">
                        🍽️
                        <div class="play-button">▶</div>
                    </div>
                    <div class="tour-content">
                        <h3 class="tour-title">Cafeteria & Common Areas</h3>
                        <p class="tour-description">See our spacious cafeteria serving healthy meals, common areas for socializing, and recreational spaces where students can relax and interact.</p>
                        <ul class="tour-features">
                            <li>Healthy Meal Options</li>
                            <li>Social Spaces</li>
                            <li>Recreation Areas</li>
                            <li>Outdoor Seating</li>
                        </ul>
                        <span class="tour-duration">Duration: 3:10 min</span>
                    </div>
                </div>

                <div class="tour-card">
                    <div class="tour-thumbnail" onclick="openTourScene('arts')">
                        🎨
                        <div class="play-button">▶</div>
                    </div>
                    <div class="tour-content">
                        <h3 class="tour-title">Arts & Creative Studios</h3>
                        <p class="tour-description">Explore our creative spaces including art studios, music rooms, drama theater, and maker spaces where students express their creativity and innovation.</p>
                        <ul class="tour-features">
                            <li>Art Studios</li>
                            <li>Music Rooms</li>
                            <li>Drama Theater</li>
                            <li>Maker Spaces</li>
                        </ul>
                        <span class="tour-duration">Duration: 4:50 min</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Virtual Tour Modal -->
    <div id="virtualTourModal" class="virtual-tour-modal">
        <div class="virtual-tour-content">
            <div class="virtual-tour-header">
                <h3>🎯 Rehan School Virtual Tour</h3>
                <button class="close-virtual-tour" onclick="closeVirtualTour()">&times;</button>
            </div>
            <div class="virtual-tour-body">
                <div class="tour-navigation">
                    <button class="tour-nav-item active" onclick="switchScene('entrance')">🏛️ Main Entrance</button>
                    <button class="tour-nav-item" onclick="switchScene('classroom')">🏫 Smart Classrooms</button>
                    <button class="tour-nav-item" onclick="switchScene('lab')">🔬 Science Labs</button>
                    <button class="tour-nav-item" onclick="switchScene('library')">📚 Digital Library</button>
                    <button class="tour-nav-item" onclick="switchScene('sports')">🏃 Sports Complex</button>
                    <button class="tour-nav-item" onclick="switchScene('cafeteria')">🍽️ Cafeteria</button>
                    <button class="tour-nav-item" onclick="switchScene('arts')">🎨 Arts Studio</button>
                </div>
                <div class="tour-display">
                    <!-- Entrance Scene -->
                    <div id="entrance-scene" class="tour-scene active" style="background: linear-gradient(45deg, #667eea, #764ba2);">
                        <div style="display: flex; align-items: center; justify-content: center; height: 100%; color: white; text-align: center;">
                            <div>
                                <h2 style="font-size: 3rem; margin-bottom: 1rem;">🏛️</h2>
                                <h3>Welcome to Rehan School</h3>
                                <p>Main Entrance & Reception Area</p>
                            </div>
                        </div>
                        <div class="hotspot" style="top: 60%; left: 70%;" onclick="switchScene('classroom')">1</div>
                        <div class="hotspot" style="top: 40%; left: 30%;" onclick="switchScene('library')">2</div>
                        <div class="scene-info">
                            <h4>Main Entrance</h4>
                            <p>Welcome to our modern campus. Click the hotspots to explore different areas.</p>
                        </div>
                    </div>

                    <!-- Classroom Scene -->
                    <div id="classroom-scene" class="tour-scene" style="background: linear-gradient(45deg, #2ecc71, #27ae60);">
                        <div style="display: flex; align-items: center; justify-content: center; height: 100%; color: white; text-align: center;">
                            <div>
                                <h2 style="font-size: 3rem; margin-bottom: 1rem;">🏫</h2>
                                <h3>Smart Classrooms</h3>
                                <p>AI-Powered Learning Environment</p>
                            </div>
                        </div>
                        <div class="hotspot" style="top: 30%; left: 20%;" onclick="switchScene('lab')">🔬</div>
                        <div class="hotspot" style="top: 70%; left: 80%;" onclick="switchScene('entrance')">🏛️</div>
                        <div class="scene-info">
                            <h4>Smart Classrooms</h4>
                            <p>Interactive whiteboards, AI assistants, and flexible seating for collaborative learning.</p>
                        </div>
                    </div>

                    <!-- Lab Scene -->
                    <div id="lab-scene" class="tour-scene" style="background: linear-gradient(45deg, #e74c3c, #c0392b);">
                        <div style="display: flex; align-items: center; justify-content: center; height: 100%; color: white; text-align: center;">
                            <div>
                                <h2 style="font-size: 3rem; margin-bottom: 1rem;">🔬</h2>
                                <h3>Science Laboratories</h3>
                                <p>Advanced Research Facilities</p>
                            </div>
                        </div>
                        <div class="hotspot" style="top: 50%; left: 60%;" onclick="switchScene('library')">📚</div>
                        <div class="hotspot" style="top: 20%; left: 30%;" onclick="switchScene('classroom')">🏫</div>
                        <div class="scene-info">
                            <h4>Science Labs</h4>
                            <p>State-of-the-art equipment for physics, chemistry, and biology experiments.</p>
                        </div>
                    </div>

                    <!-- Library Scene -->
                    <div id="library-scene" class="tour-scene" style="background: linear-gradient(45deg, #f39c12, #e67e22);">
                        <div style="display: flex; align-items: center; justify-content: center; height: 100%; color: white; text-align: center;">
                            <div>
                                <h2 style="font-size: 3rem; margin-bottom: 1rem;">📚</h2>
                                <h3>Digital Library</h3>
                                <p>Knowledge Hub & Study Center</p>
                            </div>
                        </div>
                        <div class="hotspot" style="top: 40%; left: 70%;" onclick="switchScene('sports')">🏃</div>
                        <div class="hotspot" style="top: 60%; left: 20%;" onclick="switchScene('entrance')">🏛️</div>
                        <div class="scene-info">
                            <h4>Digital Library</h4>
                            <p>Thousands of digital books, research databases, and quiet study areas.</p>
                        </div>
                    </div>

                    <!-- Sports Scene -->
                    <div id="sports-scene" class="tour-scene" style="background: linear-gradient(45deg, #9b59b6, #8e44ad);">
                        <div style="display: flex; align-items: center; justify-content: center; height: 100%; color: white; text-align: center;">
                            <div>
                                <h2 style="font-size: 3rem; margin-bottom: 1rem;">🏃</h2>
                                <h3>Sports Complex</h3>
                                <p>Fitness & Recreation Center</p>
                            </div>
                        </div>
                        <div class="hotspot" style="top: 30%; left: 50%;" onclick="switchScene('cafeteria')">🍽️</div>
                        <div class="hotspot" style="top: 70%; left: 30%;" onclick="switchScene('library')">📚</div>
                        <div class="scene-info">
                            <h4>Sports Complex</h4>
                            <p>Indoor gym, swimming pool, outdoor courts, and fitness center.</p>
                        </div>
                    </div>

                    <!-- Cafeteria Scene -->
                    <div id="cafeteria-scene" class="tour-scene" style="background: linear-gradient(45deg, #1abc9c, #16a085);">
                        <div style="display: flex; align-items: center; justify-content: center; height: 100%; color: white; text-align: center;">
                            <div>
                                <h2 style="font-size: 3rem; margin-bottom: 1rem;">🍽️</h2>
                                <h3>Cafeteria</h3>
                                <p>Dining & Social Hub</p>
                            </div>
                        </div>
                        <div class="hotspot" style="top: 50%; left: 40%;" onclick="switchScene('arts')">🎨</div>
                        <div class="hotspot" style="top: 30%; left: 70%;" onclick="switchScene('sports')">🏃</div>
                        <div class="scene-info">
                            <h4>Cafeteria</h4>
                            <p>Healthy meals, social spaces, and recreational areas for students.</p>
                        </div>
                    </div>

                    <!-- Arts Scene -->
                    <div id="arts-scene" class="tour-scene" style="background: linear-gradient(45deg, #667eea, #764ba2);">
                        <div style="display: flex; align-items: center; justify-content: center; height: 100%; color: white; text-align: center;">
                            <div>
                                <h2 style="font-size: 3rem; margin-bottom: 1rem;">🎨</h2>
                                <h3>Arts & Creative Studios</h3>
                                <p>Creativity & Innovation Center</p>
                            </div>
                        </div>
                        <div class="hotspot" style="top: 40%; left: 60%;" onclick="switchScene('entrance')">🏛️</div>
                        <div class="hotspot" style="top: 60%; left: 30%;" onclick="switchScene('cafeteria')">🍽️</div>
                        <div class="scene-info">
                            <h4>Arts Studios</h4>
                            <p>Art studios, music rooms, drama theater, and maker spaces.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleMobileMenu() {
            const navMenu = document.getElementById('navMenu');
            navMenu.classList.toggle('active');
        }

        function startVirtualTour() {
            const modal = document.getElementById('virtualTourModal');
            modal.style.display = 'block';
            // Reset to entrance scene
            switchScene('entrance');
        }

        function closeVirtualTour() {
            const modal = document.getElementById('virtualTourModal');
            modal.style.display = 'none';
        }

        function openTourScene(sceneId) {
            startVirtualTour();
            setTimeout(() => switchScene(sceneId), 500);
        }

        function switchScene(sceneId) {
            // Hide all scenes
            const scenes = document.querySelectorAll('.tour-scene');
            scenes.forEach(scene => scene.classList.remove('active'));
            
            // Show selected scene
            const targetScene = document.getElementById(sceneId + '-scene');
            if (targetScene) {
                targetScene.classList.add('active');
            }
            
            // Update navigation
            const navItems = document.querySelectorAll('.tour-nav-item');
            navItems.forEach(item => item.classList.remove('active'));
            
            const activeNavItem = Array.from(navItems).find(item => 
                item.textContent.toLowerCase().includes(sceneId) || 
                item.onclick.toString().includes(sceneId)
            );
            if (activeNavItem) {
                activeNavItem.classList.add('active');
            }
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('virtualTourModal');
            if (event.target === modal) {
                closeVirtualTour();
            }
        }

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeVirtualTour();
            }
        });

        // Add click handlers for video thumbnails
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Virtual Tour System Loaded Successfully! 🎯');
        });
    </script>
</body>
</html>
