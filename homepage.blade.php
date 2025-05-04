<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Our Company</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('home/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }
        html {
            scroll-behavior: smooth;
        }

        .background {
            background-image: url('{{ asset("home/assets/images/bg.jpg") }}');
            background-size: cover;
            background-position: center;
            filter: blur(5px);
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: -1;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000; 
            backdrop-filter: blur(8px); 
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .logo i {
            margin-right: 10px;
            color: #e74c3c;
        }

        .buttons a {
            text-decoration: none;
            padding: 10px 20px;
            margin-left: 15px;
            border-radius: 5px;
            font-weight: 500;
        }

        .btn-login {
            background-color: #3498db;
            color: white;
        }
        
        /* Navbar styles */
        .navbar-links {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .navbar-links a {
            color: black;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 15px;
            border-radius: 5px;
            position: relative; 
            transition: color 0.3s;
        }

        .navbar-links a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 5px; /* Adjust depending on your design */
            width: 0;
            height: 2px;
            background-color: #3498db;
            transition: width 0.3s;
        }

        .navbar-links a:hover::after,
        .navbar-links a.active::after {
            width: 100%;
        }

        .navbar-links a:hover {
            color: #3498db;
        }

        .navbar-links a.active {
            color: #3498db;
        }
        
        /* Section styles */
        .section {
            background-color: #ffffff;
            padding: 100px 20px;
            border-bottom: 1px solid #ccc;
            position: relative;
            z-index: 1;
            min-height: 100vh;
        }

        .about {
            background-color: #88c7f071; /* Light gray */
        }

        .blog {
            background-color: #88c7f071; /* Blue */
        }

        .contact {
            background-color: #88c7f071; /* Red */
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #555;
        }

        /* Dropdown btn css */
        .btn-menu {
            font-family: 'Montserrat', sans-serif;
            text-transform: uppercase;
            position: relative;
            border: none;
            font-size: 30px;
            transition: color 0.5s, transform 0.2s, background-color 0.2s;
            outline: none;
            border-radius: 5px;
            margin: 0 10px;
            background-color: transparent;

        }
        .btn-menu:active {
            transform: translateY(3px);
        }
        .btn-menu::after,
        .btn-menu::before {
            border-radius: 3px;
        }

        /* Dropdown Container */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Toggle Button */
        .dropdown-toggle {
            background-color: #2980b9;
            padding: 10px 20px;
            font-weight: 500;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Dropdown Icon */
        .dropdown-toggle i {
            margin-left: 5px;
        }

        /* Dropdown Menu (Hover & Left Position) */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: auto;
            right: 100%; /* Push it to the left side of the button */
            background-color: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
            overflow: hidden;
        }

        /* Dropdown Link Items */
        .dropdown-menu a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s ease;
        }

        /* Hover Effect for Items */
        .dropdown-menu a:hover {
            background-color: #cdcacae9;
        }

        /* Card css */
        .card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            max-width: 100%;
            margin: 0 auto;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .card h1 {
            margin-bottom: 20px;
            font-size: 32px;
        }

        .card p {
            font-size: 18px;
            color: #444;
        }

        .btn-explore {
            display: block;
            padding: 12px 25px;
            background-color: #3498db;
            color: white;
            border-radius: 8px;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
            width: 50%;
            margin: 20px auto 0;
            text-align: center;
        }

        .btn-explore:hover {
            background-color: #2980b9;
            color: white;
            transform: scale(1.05);
        }

        .title-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px; /* space between the text and logo */
            margin-bottom: 20px;
        }

        .title-logo h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 0;
        }

        .title-logo img {
            width: 250px;
            height: auto;
        }

        // Contact_Section
        .social-links {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center; /* important to keep icons vertically centered */
            gap: 40px;
            flex-wrap: wrap; /* if the screen is too small, they wrap nicely */
        }

        .social-icon {
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background-color: #eee;
            border-radius: 50%;
            font-size: 24px;
            color: #555;
            transition: background-color 0.3s, color 0.3s, transform 0.3s;
            text-decoration: none;
            display: inline-flex;
        }

        .social-icon:hover {
            transform: scale(1.2);
        }

        .social-icon.ig:hover {
            background-color: #C13584;
            color: #fff;
        }

        .social-icon.fb:hover {
            background-color: #1877f2;
            color: #fff;
        }

        .social-icon.tw:hover {
            background-color: #1DA1F2;
            color: #fff;
        }

        .footer {
            text-align: center;
            padding: 8px;
            font-size: 10px;
            color: #777;
            background-color: #f9f9f9;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <!-- Header + Navbar -->
<div class="header">
    <div class="logo">
        <img src="{{ asset('home/assets/images/logo.png') }}" alt="logo" style="width: 40px">&nbsp;
        <img src="{{ asset('home/assets/images/logo1.png') }}" alt="logo" style="width: 150px">
    </div>

    <div class="navbar-links">
        <a href="#home" class="nav-link">Home</a>
        <a href="#about" class="nav-link">About</a>
        <a href="#blog" class="nav-link">Blog</a>
        <a href="#contact" class="nav-link">Contact</a>
    </div>

    <div class="dropdown">
        <a class="btn-menu" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-bars" style="font-size: 15px;"></i>
        </a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('logins') }}"><i class="fas fa-sign-in-alt" style="margin-right: 5px;"></i> Login</a></li>
            <li><a href="javascript:void(0);" data-route="{{ route('apply.page') }}" class="applylink"><i class="fa fa-file-import" style="margin-right: 10px;"></i>Apply Now</a></li>
        </ul>
    </div>
</div>

<!-- Home Section with Background -->
<section class="section home" id="home">
    <div class="background"></div> 
    <div class="container" style="padding-top: 50px;">
        <div class="card">
            <div class="title-logo">
                <h1>Welcome to</h1>
                <img src="{{ asset('home/assets/images/logo1.png') }}" alt="logo">
            </div>
            <h4>We Offer <span class="multiple-text" style="color: #19357d"></span></h4>
            <p>Your trusted platform for premium products, unbeatable deals, and a seamless shopping experience. 
            Start exploring and enjoy exclusive offers tailored just for you.</p>
            <a href="#about" class="btn-explore" style="text-decoration: none">Explore Now</a>
        </div>
    </div>
</section>

<!-- Other Sections -->
<section class="section about" id="about">
    <div class="container">
        <div class="card">
            <h1>About Us</h1>
            <p>Welcome to our platform — your trusted partner in the world of e-commerce. 
            We are committed to offering you a curated selection of premium products, exceptional deals, and a seamless shopping experience that prioritizes your needs.</p>

            <p>Our mission is simple: to connect customers with quality products while providing outstanding service and unbeatable value. 
            Whether you're here to discover the latest trends or find essentials at the best prices, we are dedicated to making your journey smooth, enjoyable, and rewarding.</p>

            <p>Behind our platform is a passionate team of innovators, customer service experts, and product specialists, all working together to create a marketplace you can trust. 
            We believe in transparency, quality, and building lasting relationships with our customers.</p>

            <p>Thank you for being a part of our growing community. Together, we're redefining the future of online shopping!</p>
        </div>
    </div>
</section>

<section class="section blog" id="blog">
    <div class="container">
        <div class="card">
            <h1>Blog</h1>
            <p>Read our latest articles, updates, and news here.</p>
        </div>
    </div>
</section>

<section class="section contact" id="contact">
    <div class="container">
        <div class="card">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you! Whether you have questions, feedback, or partnership inquiries, feel free to reach out.</p>

            <p>Email us at <a href="Ecommerce@gmail.com" style="color: #3498db; text-decoration: none;">Ecommerce@gmail.com</a> or connect with us through our social media channels:</p>

            <div class="social-links">
                <a href="https://instagram.com" target="_blank" class="social-icon ig">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://facebook.com" target="_blank" class="social-icon fb">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com" target="_blank" class="social-icon tw">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<footer class="footer">
    <p>&copy; 2024 E-Commerce. All rights reserved.</p>
</footer>

    <!-- jquery 3.3.1 -->
    <script src="{{ asset('home/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('home/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('home/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{ asset('home/assets/libs/js/main-js.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="{{ asset('js/applybtn.js')}}"></script>
    <script>
        const sections = document.querySelectorAll(".section");
        const navLinks = document.querySelectorAll(".nav-link");
    
        function activateLinkOnScroll() {
            let current = "home"; // Default to "home" initially

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - sectionHeight / 3)) {
                    current = section.getAttribute("id");
                }
            });

            navLinks.forEach(link => {
                link.classList.remove("active");
                if (link.getAttribute("href").includes(current)) {
                    link.classList.add("active");
                }
            });
        }
    
        // Multiple text effect in home section
        window.addEventListener("scroll", activateLinkOnScroll);
        window.addEventListener("load", activateLinkOnScroll);

        const typed = new Typed('.multiple-text', {
            strings: [
                'ShopHub Marketplace',
                'Your E-Commerce Destination',
                'Top Deals Every Day',
                'Fast, Reliable, and Secure',
                'Where Shopping Meets Joy'
            ],
            typeSpeed: 50,
            backSpeed: 50,
            backDelay: 1000,
            loop: true,
        });
    </script>
</body>
</html>
