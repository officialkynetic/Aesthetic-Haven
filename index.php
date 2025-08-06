<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home - Aesthetic Haven</title>

    <!-- Icon -->
    <link rel="icon" type="image/png" href="ig-removebg-preview.png">


    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="fontawesome/css/all.css">


    <style>
        body {
            background-image: url('bg.jpeg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Raleway', sans-serif;
            color: #333;
            background-color: #fff;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.4);
            z-index: -1;
        }

        #logo- {
            border-radius: 100px;
        }

        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }

        .brand-name {
            font-family: 'Pacifico', cursive;
            font-size: 1.5rem;
            color: #ff7e94;
            display: inline-block;
            margin-left: 8px;
        }

        .hero {
            background: linear-gradient(to right, #705656ff, #8a5e51ff);
            color: white;
            padding: 120px 20px;
            text-align: center;
        }

        .hero-brand {
            font-family: 'Pacifico', cursive;
            font-size: 3rem;
            background: linear-gradient(to right, #ff7e94, #ffb7c5, #ffd6e0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: float 4s ease-in-out infinite;
            letter-spacing: 1.2px;
            text-transform: capitalize;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @media (max-width: 576px) {
            .hero-brand {
                font-size: 2.2rem;
            }
        }

        .btn-custom {
            background-color: #4e232bff;
            border: none;
            border-radius: 30px;
            padding: 10px 30px;
            color: white;
            font-weight: bold;
        }

        .section {
            padding: 60px 20px;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .shop-item {
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            background-color: #fff;
            transition: transform 0.3s ease;
        }

        .shop-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        /* DARK MODE */
        body.dark-mode {
            background-color: #2c2c2c;
            color: #f0f0f0;
        }

        body.dark-mode::before {
            background: rgba(0, 0, 0, 0.5);
        }

        body.dark-mode .navbar {
            background-color: #444 !important;
        }

        body.dark-mode .hero {
            background: linear-gradient(to right, #555, #777);
            color: #f0f0f0;
        }

        body.dark-mode .hero-brand {
            background: none;
            color: #fff;
            -webkit-text-fill-color: unset;
        }

        body.dark-mode .section {
            background-color: #3a3a3a;
            color: #f0f0f0;
        }

        body.dark-mode .shop-item {
            background-color: #555;
            border-color: #666;
        }

        body.dark-mode .footer {
            background-color: #222;
            color: #ddd;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="ig-removebg-preview.png" alt="Logo" id="logo-">
                <span class="brand-name">Aesthetic Haven</span>
            </a>

            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#shop">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>

                    <!-- Toggle inside hamburger -->
                    <li class="nav-item d-lg-none">
                        <button id="modeToggle" class="btn btn-outline-secondary w-100 mt-2">
                            <i class="bi bi-moon"></i>
                        </button>
                    </li>

                    <!-- Toggle for desktop view -->
                    <li class="nav-item d-none d-lg-block ms-3">
                        <button id="modeToggleLg" class="btn btn-outline-secondary">
                            <i class="bi bi-moon"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <div class="hero">
        <h1>Welcome to <span class="hero-brand">Aesthetic Haven</span> <span>
                <h3 class="hero-brand">with IG</h3>
            </span></h1>
        <p>Shop Everything Aesthetic Here</p>
        <a href="#contact" class="btn btn-custom mt-3">Contact Us</a>
    </div>

    <!-- About Section -->
    <div id="about" class="section">
        <div class="container-fluid px-4">
            <h2 class="text-center mb-5">About Us</h2>

            <!-- Carousel Start -->
            <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000"
                data-bs-pause="hover">
                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                </div>

                <div class="carousel-inner">
                    <!-- Slide 1: Owner Photo & Info -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center align-items-center text-center py-4">
                            <div class="col-12 col-md-4">
                                <img src="goodnews.jpg" class="img-fluid rounded-circle shadow mb-3" alt="Owner"
                                    style="max-width: 200px;">
                                <h3 class="mt-3">Idehen Goodnews</h3>
                                <p class="text-muted">Founder & Creative Director, Aesthetic Haven</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Personal Message -->
                    <div class="carousel-item">
                        <div class="row justify-content-center text-center py-4">
                            <div class="col-lg-8">
                                <p>
                                    At Aesthetic Haven, honesty and authenticity are at the heart of everything we do.
                                    This brand started as a passion project to help people create cozy, beautiful spaces
                                    without
                                    fear of online scams.
                                    As a real person behind this business, I make it my mission to ensure every customer
                                    feels
                                    seen, heard, and most importantly—safe.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: Video Message -->
                    <div class="carousel-item">
                        <div class="row justify-content-center text-center py-4">
                            <div class="col-lg-8">
                                <video controls class="w-100 rounded shadow">
                                    <source src="owner-message.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p class="text-muted small mt-2">A short welcome message from me (the founder), sharing
                                    our values and mission.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4: Testimonials -->
                    <div class="carousel-item">
                        <div class="row justify-content-center text-center py-4">
                            <div class="col-md-6">
                                <blockquote class="blockquote">
                                    "I received exactly what I ordered, even better! Aesthetic Haven is 100% legit."
                                    <footer class="blockquote-footer">Adaora O.</footer>
                                </blockquote>
                            </div>
                            <div class="col-md-6">
                                <blockquote class="blockquote">
                                    "I was skeptical at first, but seeing the owner's video gave me confidence. Glad I
                                    ordered!"
                                    <footer class="blockquote-footer">Chinedu B.</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 5: Customer Photo/Video Testimonials -->
                    <div class="carousel-item">
                        <div class="text-center py-4">
                            <h5>Customer Reviews in Photos & Videos</h5>
                            <div class="row justify-content-center gx-4">
                                <div class="col-sm-6 col-md-4 mb-3">
                                    <img src="test.png" class="img-fluid rounded shadow-sm" alt="Customer Review 1">
                                </div>
                                <div class="col-sm-6 col-md-4 mb-3">
                                    <video controls class="w-100 rounded shadow-sm">
                                        <source src="review2.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                            <p class="small text-muted">Real customers showing off their orders. Thank you for trusting
                                us!</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Carousel End -->
        </div>
    </div>
    <!-- Shop Section -->
    <div id="shop" class="section bg-light">
        <div class="container">
            <h2 class="text-center text-dark mb-4">Shop</h2>
            <div class="row g-4">

                <!-- Item 1 -->
                <div class="col-md-4">
                    <a href="login.php" class="text-decoration-none text-dark">
                        <div class="shop-item">
                            <div id="carouselItem1" class="carousel slide" data-bs-ride="carousel"
                                data-bs-interval="4000" data-bs-pause="hover">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="test.png" class="d-block w-100 rounded mb-2" alt="Poster Image 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="test.png" class="d-block w-100 rounded mb-2" alt="Poster Image 2">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselItem1"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselItem1"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <h5 class="mt-2">Wall Prints & Posters</h5>
                            <p>Trendy art prints to beautify your walls.</p>
                            <span class="badge bg-success">₦9,500</span>
                        </div>
                    </a>
                </div>

                <!-- Item 2 -->
                <div class="col-md-4">
                    <a href="login.php" class="text-decoration-none text-dark">
                        <div class="shop-item">
                            <div id="carouselItem2" class="carousel slide" data-bs-ride="carousel"
                                data-bs-interval="4000" data-bs-pause="hover">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <video class="d-block w-100 rounded mb-2" muted autoplay loop playsinline>
                                            <source src="led-demo.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="test.png" class="d-block w-100 rounded mb-2"
                                            alt="LED Light Image">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselItem2"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselItem2"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <h5 class="mt-2">LED String Lights</h5>
                            <p>Warm and cozy LED lights for your room.</p>
                            <span class="badge bg-success">₦2,000</span>
                        </div>
                    </a>
                </div>

                <!-- Item 3 -->
                <div class="col-md-4">
                    <a href="login.php" class="text-decoration-none text-dark">
                        <div class="shop-item">
                            <div id="carouselItem3" class="carousel slide" data-bs-ride="carousel"
                                data-bs-interval="4000" data-bs-pause="hover">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="test.png" class="d-block w-100 rounded mb-2" alt="Organizer 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="test.png" class="d-block w-100 rounded mb-2" alt="Organizer 2">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselItem3"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselItem3"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <h5 class="mt-2">Makeup Organizers</h5>
                            <p>Chic and functional storage for your beauty items.</p>
                            <span class="badge bg-success">₦4,200</span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="section">
        <div class="container">
            <h2 class="text-center mb-4">Contact</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Your message"></textarea>
                </div>
                <button type="submit" class="btn btn-custom">Send Message</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer text-center">
        <div class="mb-3">
            <a href="https://instagram.com/" target="_blank" class="text-white me-3">
                <i class="bi bi-instagram fs-4"></i>
            </a>
            <a href="https://facebook.com/" target="_blank" class="text-white me-3">
                <i class="bi bi-facebook fs-4"></i>
            </a>
            <a href="https://www.tiktok.com/@life_of_ig" target="_blank" class="text-white me-3">
                <i class="fab fa-tiktok fs-4"></i>
            </a>

            <a href="mailto:you@example.com" class="text-white">
                <i class="bi bi-envelope-fill fs-4"></i>
            </a>
        </div>
        &copy; 2025 Aesthetic Haven. All rights reserved.
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Dark Mode Script with LocalStorage -->
    <script>
        const modeToggleMobile = document.getElementById('modeToggle');
        const modeToggleDesktop = document.getElementById('modeToggleLg');

        function applyDarkMode(isDark) {
            document.body.classList.toggle('dark-mode', isDark);
            const iconMobile = modeToggleMobile.querySelector('i');
            const iconDesktop = modeToggleDesktop.querySelector('i');

            iconMobile.classList.toggle('bi-moon', !isDark);
            iconMobile.classList.toggle('bi-sun', isDark);

            iconDesktop.classList.toggle('bi-moon', !isDark);
            iconDesktop.classList.toggle('bi-sun', isDark);
        }

        function toggleDarkMode() {
            const isDark = !document.body.classList.contains('dark-mode');
            localStorage.setItem('darkMode', isDark);
            applyDarkMode(isDark);
        }

        window.addEventListener('DOMContentLoaded', () => {
            const savedMode = localStorage.getItem('darkMode') === 'true';
            applyDarkMode(savedMode);
        });

        modeToggleMobile.addEventListener('click', toggleDarkMode);
        modeToggleDesktop.addEventListener('click', toggleDarkMode);
    </script>

</body>

</html>