<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Distribution - Home</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary-color: #FF6B6B;
            --secondary-color: #4ECDC4;
            --dark-color: #2C3E50;
            --light-color: #F8F9FA;
        }

        body {
            overflow-x: hidden;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary-color), #FF8E53);
            border: none;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            border-radius: 50px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(255, 107, 107, 0.4);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 100px 0;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,138.7C960,139,1056,117,1152,106.7C1248,96,1344,96,1392,96L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom;
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            animation: fadeInUp 1s ease;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.95;
            animation: fadeInUp 1s ease 0.2s both;
        }

        .hero-image {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

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

        /* Features Section */
        .features-section {
            padding: 80px 0;
            background-color: var(--light-color);
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
        }

        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: white;
        }

        .feature-card:nth-child(1) .feature-icon {
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .feature-card:nth-child(2) .feature-icon {
            background: linear-gradient(135deg, #f093fb, #f5576c);
        }

        .feature-card:nth-child(3) .feature-icon {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
        }

        .feature-card:nth-child(4) .feature-icon {
            background: linear-gradient(135deg, #43e97b, #38f9d7);
        }

        /* Products Section */
        .products-section {
            padding: 80px 0;
        }

        .product-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            background: white;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
        }

        .product-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: var(--primary-color);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .product-body {
            padding: 1.5rem;
        }

        .product-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        /* Statistics Section */
        .stats-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 60px 0;
            color: white;
        }

        .stat-item {
            text-align: center;
            padding: 2rem 1rem;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* CTA Section */
        .cta-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            text-align: center;
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .cta-subtitle {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }

        .btn-light-custom {
            background: white;
            color: #f5576c;
            padding: 0.8rem 2rem;
            font-weight: 600;
            border-radius: 50px;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-light-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            background: #f8f9fa;
        }

        /* Footer */
        .footer {
            background-color: var(--dark-color);
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: white;
            padding-left: 5px;
        }

        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 0.5rem;
            color: white;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- Include Navbar Component -->
    @include('layouts.navbar')

    <!-- Hero Section -->
    <section class="hero-section" id="home" style="margin-top: 76px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="hero-title">Premium Ice Cream Distribution Network</h1>
                    <p class="hero-subtitle">
                        Your trusted partner for wholesale ice cream distribution. Quality products, reliable service,
                        competitive prices.
                    </p>
                    <div class="d-flex gap-3">
                        <button class="btn btn-light btn-lg btn-light-custom">
                            <i class="bi bi-cart-check me-2"></i>Order Now
                        </button>
                        <button class="btn btn-outline-light btn-lg">
                            <i class="bi bi-play-circle me-2"></i>Learn More
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 text-center hero-image">
                    <i class="bi bi-snow" style="font-size: 20rem; opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="about">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Why Choose Us</h2>
                <p class="text-muted mt-4">We provide the best ice cream distribution services in the industry</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h4>Fast Delivery</h4>
                        <p class="text-muted">Quick and reliable delivery to your location with temperature-controlled
                            vehicles</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h4>Premium Quality</h4>
                        <p class="text-muted">Only the finest ice cream products from trusted manufacturers</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-cash-coin"></i>
                        </div>
                        <h4>Best Prices</h4>
                        <p class="text-muted">Competitive wholesale pricing with flexible payment options</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h4>24/7 Support</h4>
                        <p class="text-muted">Round-the-clock customer service for all your needs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products-section" id="products">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Products</h2>
                <p class="text-muted mt-4">Browse our wide selection of ice cream products and supplies</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="position-relative">
                            <div class="product-image d-flex align-items-center justify-content-center">
                                <i class="bi bi-snow3" style="font-size: 4rem; color: #667eea;"></i>
                            </div>
                            <span class="product-badge">Popular</span>
                        </div>
                        <div class="product-body">
                            <h5 class="product-title">Es Krim Vanilla</h5>
                            <div class="product-price">Rp 12.000</div>
                            <button class="btn btn-primary-custom w-100">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="position-relative">
                            <div class="product-image d-flex align-items-center justify-content-center">
                                <i class="bi bi-snow3" style="font-size: 4rem; color: #8B4513;"></i>
                            </div>
                            <span class="product-badge">New</span>
                        </div>
                        <div class="product-body">
                            <h5 class="product-title">Es Krim Coklat</h5>
                            <div class="product-price">Rp 13.000</div>
                            <button class="btn btn-primary-custom w-100">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="position-relative">
                            <div class="product-image d-flex align-items-center justify-content-center">
                                <i class="bi bi-cup-straw" style="font-size: 4rem; color: #FF6B6B;"></i>
                            </div>
                        </div>
                        <div class="product-body">
                            <h5 class="product-title">Bubuk Es Krim 1kg</h5>
                            <div class="product-price">Rp 85.000</div>
                            <button class="btn btn-primary-custom w-100">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="position-relative">
                            <div class="product-image d-flex align-items-center justify-content-center">
                                <i class="bi bi-cone-striped" style="font-size: 4rem; color: #F4A460;"></i>
                            </div>
                        </div>
                        <div class="product-body">
                            <h5 class="product-title">Cone Wafer (Isi 100)</h5>
                            <div class="product-price">Rp 25.000</div>
                            <button class="btn btn-primary-custom w-100">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <button class="btn btn-primary-custom btn-lg">
                    View All Products <i class="bi bi-arrow-right ms-2"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Happy Clients</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Product Variants</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">10K+</div>
                        <div class="stat-label">Deliveries Made</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Cities Covered</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="cta-title">Ready to Start Your Business?</h2>
                    <p class="cta-subtitle">Join hundreds of satisfied customers and grow your ice cream business with
                        us</p>
                    <button class="btn btn-light-custom btn-lg">
                        <i class="bi bi-telephone me-2"></i>Contact Us Today
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="footer-title">
                        <i class="bi bi-snow me-2"></i>IceCream Distribution
                    </h5>
                    <p class="text-muted">Your trusted partner for premium ice cream distribution services across
                        Indonesia.</p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-title">Quick Links</h5>
                    <a href="#" class="footer-link">Home</a>
                    <a href="#" class="footer-link">Products</a>
                    <a href="#" class="footer-link">About Us</a>
                    <a href="#" class="footer-link">Contact</a>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-title">Products</h5>
                    <a href="#" class="footer-link">Ice Cream</a>
                    <a href="#" class="footer-link">Ice Cream Powder</a>
                    <a href="#" class="footer-link">Cones & Cups</a>
                    <a href="#" class="footer-link">Accessories</a>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-title">Contact Info</h5>
                    <p class="text-muted mb-2">
                        <i class="bi bi-geo-alt me-2"></i>Jakarta, Indonesia
                    </p>
                    <p class="text-muted mb-2">
                        <i class="bi bi-telephone me-2"></i>+62 812 3456 7890
                    </p>
                    <p class="text-muted">
                        <i class="bi bi-envelope me-2"></i>info@icecream.com
                    </p>
                </div>
            </div>

            <hr class="my-4" style="border-color: rgba(255,255,255,0.1);">

            <div class="text-center">
                <p class="text-muted mb-0">&copy; 2024 IceCream Distribution. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.padding = '0.5rem 0';
                navbar.style.boxShadow = '0 4px 15px rgba(0,0,0,0.15)';
            } else {
                navbar.style.padding = '1rem 0';
                navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            }
        });
    </script>
</body>

</html>
