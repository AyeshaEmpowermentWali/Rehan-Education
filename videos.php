<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos - Rehan School</title>
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

        .video-categories {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .category-btn {
            background: white;
            color: #333;
            padding: 0.8rem 1.5rem;
            border: 2px solid #e9ecef;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .category-btn:hover, .category-btn.active {
            background: linear-gradient(45deg, #00bcd4, #2196f3);
            color: white;
            border-color: transparent;
            transform: translateY(-2px);
        }

        .videos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .video-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .video-thumbnail {
            width: 100%;
            height: 200px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .video-thumbnail.has-video {
            background: #000;
        }

        .video-thumbnail video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-thumbnail.placeholder {
            background: linear-gradient(45deg, #667eea, #764ba2);
        }

        .play-button {
            position: absolute;
            width: 60px;
            height: 60px;
            background: rgba(255,255,255,0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333;
            font-size: 1.5rem;
            transition: all 0.3s ease;
            z-index: 2;
        }

        .play-button:hover {
            background: white;
            transform: scale(1.1);
        }

        .video-content {
            padding: 1.5rem;
        }

        .video-title {
            font-size: 1.3rem;
            color: #333;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .video-description {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .video-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.8rem;
            color: #999;
        }

        .video-category {
            background: #f0f8ff;
            color: #00bcd4;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-weight: 500;
        }

        .coming-soon {
            background: #fff3cd;
            color: #856404;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-weight: 500;
            font-size: 0.7rem;
        }

        /* Featured Video Section */
        .featured-video {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 3rem;
            text-align: center;
        }

        .featured-video h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .featured-thumbnail {
            width: 100%;
            max-width: 600px;
            height: 300px;
            background: #000;
            border-radius: 10px;
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .featured-thumbnail video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Video Modal */
        .video-modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.9);
        }

        .modal-content {
            position: relative;
            margin: 5% auto;
            width: 90%;
            max-width: 800px;
        }

        .modal-video {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .close-modal {
            position: absolute;
            top: -40px;
            right: 0;
            color: white;
            font-size: 2rem;
            cursor: pointer;
            background: none;
            border: none;
        }

        .close-modal:hover {
            color: #00bcd4;
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

            .videos-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .video-categories {
                flex-direction: column;
                align-items: center;
            }

            .featured-thumbnail {
                height: 200px;
                font-size: 3rem;
            }

            .modal-content {
                width: 95%;
                margin: 10% auto;
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
                <li><a href="videos.php" class="active">Videos</a></li>
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
                <h1>Educational Videos</h1>
                <p>Explore our collection of educational content and school highlights</p>
            </div>

            <div class="featured-video">
                <h2>Featured: Rehan School Promotional Video</h2>
                <div class="featured-thumbnail" onclick="openVideoModal('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/AQNIz0NnMBr_HEDfiE-9TOAHW6WMB6qFsIzkG4MAWqZDEaVeqRg4w0XqWsqfoAXxu2UuLE9ZE5_4kCQZ83jahCec-6iR15U7EIFlMrhiWnRSAqG4dYxr7eC.mp4')">
                    <video muted preload="metadata">
                        <source src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/AQNIz0NnMBr_HEDfiE-9TOAHW6WMB6qFsIzkG4MAWqZDEaVeqRg4w0XqWsqfoAXxu2UuLE9ZE5_4kCQZ83jahCec-6iR15U7EIFlMrhiWnRSAqG4dYxr7eC.mp4" type="video/mp4">
                        🎬
                    </video>
                    <div class="play-button">▶</div>
                </div>
                <p>Discover what makes Rehan School unique in this comprehensive overview of our facilities, curriculum, and community.</p>
            </div>

            <div class="video-categories">
                <button class="category-btn active" onclick="filterVideos('all')">All Videos</button>
                <button class="category-btn" onclick="filterVideos('tours')">School Tours</button>
                <button class="category-btn" onclick="filterVideos('curriculum')">Curriculum</button>
                <button class="category-btn" onclick="filterVideos('events')">Events</button>
                <button class="category-btn" onclick="filterVideos('testimonials')">Testimonials</button>
            </div>

            <div class="videos-grid" id="videosGrid">
                <!-- Real Video with actual file -->
                <div class="video-card" data-category="general">
                    <div class="video-thumbnail has-video" onclick="openVideoModal('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/AQNIz0NnMBr_HEDfiE-9TOAHW6WMB6qFsIzkG4MAWqZDEaVeqRg4w0XqWsqfoAXxu2UuLE9ZE5_4kCQZ83jahCec-6iR15U7EIFlMrhiWnRSAqG4dYxr7eC.mp4')">
                        <video muted preload="metadata">
                            <source src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/AQNIz0NnMBr_HEDfiE-9TOAHW6WMB6qFsIzkG4MAWqZDEaVeqRg4w0XqWsqfoAXxu2UuLE9ZE5_4kCQZ83jahCec-6iR15U7EIFlMrhiWnRSAqG4dYxr7eC.mp4" type="video/mp4">
                        </video>
                        <div class="play-button">▶</div>
                    </div>
                    <div class="video-content">
                        <h3 class="video-title">Rehan School Promotional Video</h3>
                        <p class="video-description">Official promotional video showcasing our school facilities, teaching methods, and student achievements in a comprehensive overview.</p>
                        <div class="video-meta">
                            <span class="video-category">Promotional</span>
                            <span>3:45 min</span>
                        </div>
                    </div>
                </div>

                <!-- Placeholder Videos - Coming Soon -->
                <div class="video-card" data-category="tours">
                    <div class="video-thumbnail placeholder">
                        🏫
                        <div class="play-button">▶</div>
                    </div>
                    <div class="video-content">
                        <h3 class="video-title">Campus Tour 2024</h3>
                        <p class="video-description">Take a virtual tour of our state-of-the-art facilities including classrooms, labs, library, and sports complex.</p>
                        <div class="video-meta">
                            <span class="coming-soon">Coming Soon</span>
                            <span>5:30 min</span>
                        </div>
                    </div>
                </div>

                <div class="video-card" data-category="curriculum">
                    <div class="video-thumbnail placeholder">
                        🤖
                        <div class="play-button">▶</div>
                    </div>
                    <div class="video-content">
                        <h3 class="video-title">AI in Education</h3>
                        <p class="video-description">Learn how we integrate artificial intelligence and machine learning into our curriculum to prepare students for the future.</p>
                        <div class="video-meta">
                            <span class="coming-soon">Coming Soon</span>
                            <span>8:15 min</span>
                        </div>
                    </div>
                </div>

                <div class="video-card" data-category="events">
                    <div class="video-thumbnail placeholder">
                        🎉
                        <div class="play-button">▶</div>
                    </div>
                    <div class="video-content">
                        <h3 class="video-title">Annual Science Fair</h3>
                        <p class="video-description">Highlights from our annual science fair showcasing innovative projects by our talented students.</p>
                        <div class="video-meta">
                            <span class="coming-soon">Coming Soon</span>
                            <span>12:45 min</span>
                        </div>
                    </div>
                </div>

                <div class="video-card" data-category="testimonials">
                    <div class="video-thumbnail placeholder">
                        👥
                        <div class="play-button">▶</div>
                    </div>
                    <div class="video-content">
                        <h3 class="video-title">Parent Testimonials</h3>
                        <p class="video-description">Hear from parents about their experience with Rehan School and how it has impacted their children's education.</p>
                        <div class="video-meta">
                            <span class="coming-soon">Coming Soon</span>
                            <span>6:20 min</span>
                        </div>
                    </div>
                </div>

                <div class="video-card" data-category="curriculum">
                    <div class="video-thumbnail placeholder">
                        🔬
                        <div class="play-button">▶</div>
                    </div>
                    <div class="video-content">
                        <h3 class="video-title">STEM Laboratory</h3>
                        <p class="video-description">Explore our advanced STEM laboratories where students conduct experiments and develop critical thinking skills.</p>
                        <div class="video-meta">
                            <span class="coming-soon">Coming Soon</span>
                            <span>7:30 min</span>
                        </div>
                    </div>
                </div>

                <div class="video-card" data-category="events">
                    <div class="video-thumbnail placeholder">
                        🏆
                        <div class="play-button">▶</div>
                    </div>
                    <div class="video-content">
                        <h3 class="video-title">Sports Day 2024</h3>
                        <p class="video-description">Exciting moments from our annual sports day featuring various competitions and team spirit.</p>
                        <div class="video-meta">
                            <span class="coming-soon">Coming Soon</span>
                            <span>15:20 min</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Video Modal -->
    <div id="videoModal" class="video-modal">
        <div class="modal-content">
            <button class="close-modal" onclick="closeVideoModal()">&times;</button>
            <video id="modalVideo" class="modal-video" controls>
                <source src="" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <script>
        function toggleMobileMenu() {
            const navMenu = document.getElementById('navMenu');
            navMenu.classList.toggle('active');
        }

        function filterVideos(category) {
            const videoCards = document.querySelectorAll('.video-card');
            const categoryBtns = document.querySelectorAll('.category-btn');
            
            // Update active button
            categoryBtns.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            
            // Filter videos
            videoCards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function openVideoModal(videoUrl) {
            const modal = document.getElementById('videoModal');
            const modalVideo = document.getElementById('modalVideo');
            
            modalVideo.src = videoUrl;
            modal.style.display = 'block';
            
            // Pause any other videos
            document.querySelectorAll('video').forEach(video => {
                if (video !== modalVideo) {
                    video.pause();
                }
            });
        }

        function closeVideoModal() {
            const modal = document.getElementById('videoModal');
            const modalVideo = document.getElementById('modalVideo');
            
            modal.style.display = 'none';
            modalVideo.pause();
            modalVideo.src = '';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('videoModal');
            if (event.target === modal) {
                closeVideoModal();
            }
        }

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeVideoModal();
            }
        });

        // Handle video thumbnail clicks
        document.addEventListener('DOMContentLoaded', function() {
            // Add click handlers for placeholder videos
            document.querySelectorAll('.video-thumbnail.placeholder').forEach(thumbnail => {
                thumbnail.addEventListener('click', function() {
                    const card = this.closest('.video-card');
                    const title = card.querySelector('.video-title').textContent;
                    
                    // Show a nice notification instead of alert
                    showNotification(`"${title}" video will be available soon! Stay tuned for updates.`);
                });
            });

            // Auto-play preview on hover for real videos only
            document.querySelectorAll('.video-thumbnail.has-video video').forEach(video => {
                const container = video.closest('.video-thumbnail');
                
                container.addEventListener('mouseenter', () => {
                    video.play().catch(e => {
                        // Handle autoplay restrictions
                        console.log('Autoplay prevented:', e);
                    });
                });
                
                container.addEventListener('mouseleave', () => {
                    video.pause();
                    video.currentTime = 0;
                });
            });
        });

        // Custom notification function
        function showNotification(message) {
            // Create notification element
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                top: 100px;
                right: 20px;
                background: linear-gradient(45deg, #00bcd4, #2196f3);
                color: white;
                padding: 1rem 1.5rem;
                border-radius: 10px;
                box-shadow: 0 4px 20px rgba(0,0,0,0.3);
                z-index: 3000;
                max-width: 300px;
                font-size: 0.9rem;
                line-height: 1.4;
                animation: slideIn 0.3s ease;
            `;
            
            notification.textContent = message;
            document.body.appendChild(notification);
            
            // Add slide-in animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes slideIn {
                    from { transform: translateX(100%); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }
            `;
            document.head.appendChild(style);
            
            // Remove notification after 4 seconds
            setTimeout(() => {
                notification.style.animation = 'slideIn 0.3s ease reverse';
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.parentNode.removeChild(notification);
                    }
                }, 300);
            }, 4000);
        }
    </script>
</body>
</html>
