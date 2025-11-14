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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary-dark: #1A3153;
            --primary-teal: #0C5777;
            --accent-pink: #EF93FF;
            --accent-peach: #F6D4E4;
        }

        body {
            background-color: #ffffff;
        }

        .hero-section {
            background-color: var(--primary-dark);
            color: white;
            padding: 100px 0;
            margin-top: 76px;
        }

        .btn-custom-pink {
            background-color: var(--accent-pink);
            color: var(--primary-dark);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-custom-pink:hover {
            background-color: var(--accent-peach);
            color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(239, 147, 255, 0.3);
        }

        .btn-custom-outline {
            border: 2px solid white;
            color: white;
            background-color: transparent;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-custom-outline:hover {
            background-color: white;
            color: var(--primary-dark);
        }

        .feature-card {
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            height: 100%;
            border: 2px solid var(--accent-peach);
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            border-color: var(--accent-pink);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: white;
        }

        .icon-dark {
            background-color: var(--primary-dark);
        }

        .icon-teal {
            background-color: var(--primary-teal);
        }

        .icon-pink {
            background-color: var(--accent-pink);
            color: var(--primary-dark);
        }

        .icon-peach {
            background-color: var(--accent-peach);
            color: var(--primary-dark);
        }

        .product-card {
            border-radius: 12px;
            overflow: hidden;
            border: none;
            background-color: white;
            transition: all 0.3s ease;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .product-image-wrapper {
            position: relative;
            overflow: hidden;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .badge-pink {
            background-color: var(--accent-pink);
            color: var(--primary-dark);
        }

        .badge-teal {
            background-color: var(--primary-teal);
            color: white;
        }

        .stat-card {
            text-align: center;
            padding: 30px 20px;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <!-- Include Navbar -->
    @include('layouts.navbar')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Premium Ice Cream Distribution Network</h1>
                    <p class="lead mb-4 opacity-90">
                        Your trusted partner for wholesale ice cream distribution. Quality products, reliable service,
                        competitive prices for your business success.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="/products" class="btn btn-custom-pink btn-lg">
                            <i class="bi bi-cart-check me-2"></i>View Products
                        </a>
                        <a href="/about" class="btn btn-custom-outline btn-lg">
                            <i class="bi bi-info-circle me-2"></i>Learn More
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <i class="bi bi-snow display-1" style="font-size: 15rem; opacity: 0.2;"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5" style="background-color: var(--accent-peach);">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="section-title" style="color: var(--primary-dark);">Why Choose Us</h2>
                <p class="text-muted">We provide the best ice cream distribution services in Indonesia</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon icon-dark">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--primary-dark);">Fast Delivery</h5>
                        <p class="text-muted mb-0">Quick and reliable delivery with temperature-controlled vehicles to
                            maintain product quality</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon icon-teal">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--primary-dark);">Premium Quality</h5>
                        <p class="text-muted mb-0">Only the finest ice cream products from trusted manufacturers
                            nationwide</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon icon-pink">
                            <i class="bi bi-cash-coin"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--primary-dark);">Best Prices</h5>
                        <p class="text-muted mb-0">Competitive wholesale pricing with flexible payment options for your
                            business</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon icon-peach">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--primary-dark);">24/7 Support</h5>
                        <p class="text-muted mb-0">Round-the-clock customer service for all your distribution needs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-5" id="products">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="section-title" style="color: var(--primary-dark);">Our Products</h2>
                <p class="text-muted">Browse our wide selection of ice cream products and supplies</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="product-card shadow-sm">
                        <div class="product-image-wrapper" style="background-color: var(--accent-peach);">
                            <i class="bi bi-snow3" style="font-size: 5rem; color: var(--primary-teal);"></i>
                            <span class="product-badge badge-pink">Popular</span>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold mb-2" style="color: var(--primary-dark);">Es Krim Vanilla</h5>
                            <div class="mb-3">
                                <span class="fs-4 fw-bold" style="color: var(--primary-teal);">Rp 12.000</span>
                            </div>
                            <button class="btn btn-custom-pink w-100">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="product-card shadow-sm">
                        <div class="product-image-wrapper" style="background-color: var(--accent-peach);">
                            <i class="bi bi-snow3" style="font-size: 5rem; color: #8B4513;"></i>
                            <span class="product-badge badge-teal">New</span>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold mb-2" style="color: var(--primary-dark);">Es Krim Coklat</h5>
                            <div class="mb-3">
                                <span class="fs-4 fw-bold" style="color: var(--primary-teal);">Rp 13.000</span>
                            </div>
                            <button class="btn btn-custom-pink w-100">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="product-card shadow-sm">
                        <div class="product-image-wrapper" style="background-color: var(--accent-peach);">
                            <i class="bi bi-cup-straw" style="font-size: 5rem; color: var(--accent-pink);"></i>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold mb-2" style="color: var(--primary-dark);">Bubuk Es Krim 1kg</h5>
                            <div class="mb-3">
                                <span class="fs-4 fw-bold" style="color: var(--primary-teal);">Rp 85.000</span>
                            </div>
                            <button class="btn btn-custom-pink w-100">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="product-card shadow-sm">
                        <div class="product-image-wrapper" style="background-color: var(--accent-peach);">
                            <i class="bi bi-cone-striped" style="font-size: 5rem; color: #F4A460;"></i>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold mb-2" style="color: var(--primary-dark);">Cone Wafer (100pcs)</h5>
                            <div class="mb-3">
                                <span class="fs-4 fw-bold" style="color: var(--primary-teal);">Rp 25.000</span>
                            </div>
                            <button class="btn btn-custom-pink w-100">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="/products" class="btn btn-lg btn-custom-pink">
                    View All Products <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5 text-white" style="background-color: var(--primary-teal);">
        <div class="container py-4">
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-number">500+</div>
                        <p class="mb-0 opacity-90">Happy Clients</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-number">50+</div>
                        <p class="mb-0 opacity-90">Product Variants</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-number">10K+</div>
                        <p class="mb-0 opacity-90">Deliveries Made</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-number">15+</div>
                        <p class="mb-0 opacity-90">Cities Covered</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5" id="about" style="background-color: var(--accent-peach);">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="rounded-4 p-5 text-center" style="background-color: white; height: 400px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-building" style="font-size: 10rem; color: var(--primary-dark); opacity: 0.1;"></i>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title mb-4" style="color: var(--primary-dark);">About Our Company</h2>
                    <p class="text-muted mb-4">
                        Since 2015, we've been Indonesia's leading ice cream distribution network, serving over 500
                        businesses across 15 cities. Our commitment to quality and reliable service has made us the
                        preferred partner for ice cream retailers nationwide.
                    </p>
                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle p-3 me-3" style="background-color: var(--accent-pink);">
                                    <i class="bi bi-check-circle-fill fs-4" style="color: var(--primary-dark);"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold" style="color: var(--primary-dark);">9+ Years</h5>
                                    <small class="text-muted">Experience</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle p-3 me-3" style="background-color: var(--primary-teal);">
                                    <i class="bi bi-people-fill fs-4 text-white"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold" style="color: var(--primary-dark);">500+</h5>
                                    <small class="text-muted">Happy Clients</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/about" class="btn btn-custom-pink btn-lg">
                        Learn More About Us <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="section-title" style="color: var(--primary-dark);">What Our Clients Say</h2>
                <p class="text-muted">Don't just take our word for it</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                            </div>
                            <p class="text-muted mb-3">"Excellent service! The delivery is always on time and the products
                                are top quality. Highly recommended for any ice cream business."</p>
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle p-3 me-3" style="background-color: var(--accent-peach);">
                                    <i class="bi bi-person-fill fs-4" style="color: var(--primary-dark);"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-bold" style="color: var(--primary-dark);">Budi Santoso</h6>
                                    <small class="text-muted">Ice Cream Shop Owner, Jakarta</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                            </div>
                            <p class="text-muted mb-3">"Great prices and reliable partner. They've helped our business grow
                                with consistent supply and excellent customer service."</p>
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle p-3 me-3" style="background-color: var(--accent-peach);">
                                    <i class="bi bi-person-fill fs-4" style="color: var(--primary-dark);"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-bold" style="color: var(--primary-dark);">Siti Nurhaliza</h6>
                                    <small class="text-muted">Restaurant Owner, Bandung</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                            </div>
                            <p class="text-muted mb-3">"Professional team with great product variety. The temperature control
                                during delivery ensures our products arrive in perfect condition."</p>
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle p-3 me-3" style="background-color: var(--accent-peach);">
                                    <i class="bi bi-person-fill fs-4" style="color: var(--primary-dark);"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-bold" style="color: var(--primary-dark);">Ahmad Rizki</h6>
                                    <small class="text-muted">Cafe Owner, Surabaya</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 text-white" style="background-color: var(--primary-dark);">
        <div class="container text-center py-4">
            <h2 class="section-title mb-3">Ready to Start Your Business?</h2>
            <p class="lead mb-4 opacity-90">Join hundreds of satisfied customers and grow your ice cream business with us</p>
            <a href="/contact" class="btn btn-custom-pink btn-lg">
                <i class="bi bi-telephone me-2"></i>Contact Us Today
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 text-white" style="background-color: var(--primary-dark);">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-snow me-2" style="color: var(--accent-pink);"></i>IceCream Distribution
                    </h5>
                    <p class="opacity-75">Your trusted partner for premium ice cream distribution services across
                        Indonesia.</p>
                    <div class="d-flex gap-2 mt-3">
                        <a href="#" class="btn btn-sm rounded-circle border border-white"
                            style="width: 40px; height: 40px; color: white;">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="btn btn-sm rounded-circle border border-white"
                            style="width: 40px; height: 40px; color: white;">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-sm rounded-circle border border-white"
                            style="width: 40px; height: 40px; color: white;">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-sm rounded-circle border border-white"
                            style="width: 40px; height: 40px; color: white;">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/" class="text-decoration-none opacity-75"
                                style="color: white;">Home</a></li>
                        <li class="mb-2"><a href="/products" class="text-decoration-none opacity-75"
                                style="color: white;">Products</a></li>
                        <li class="mb-2"><a href="/about" class="text-decoration-none opacity-75"
                                style="color: white;">About Us</a></li>
                        <li class="mb-2"><a href="/contact" class="text-decoration-none opacity-75"
                                style="color: white;">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Products</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/products?category=Es Krim" class="text-decoration-none opacity-75"
                                style="color: white;">Ice Cream</a></li>
                        <li class="mb-2"><a href="/products?category=Bubuk Es Krim"
                                class="text-decoration-none opacity-75" style="color: white;">Ice Cream Powder</a></li>
                        <li class="mb-2"><a href="/products?category=Cone" class="text-decoration-none opacity-75"
                                style="color: white;">Cones & Cups</a></li>
                        <li class="mb-2"><a href="/products?category=Sendok" class="text-decoration-none opacity-75"
                                style="color: white;">Accessories</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Contact Info</h5>
                    <p class="mb-2 opacity-75">
                        <i class="bi bi-geo-alt me-2" style="color: var(--accent-pink);"></i>Jakarta, Indonesia
                    </p>
                    <p class="mb-2 opacity-75">
                        <i class="bi bi-telephone me-2" style="color: var(--accent-pink);"></i>+62 812 3456 7890
                    </p>
                    <p class="opacity-75">
                        <i class="bi bi-envelope me-2" style="color: var(--accent-pink);"></i>info@icecream.com
                    </p>
                </div>
            </div>

            <hr class="my-4 opacity-25">

            <div class="text-center">
                <p class="mb-0 opacity-75">&copy; 2024 IceCream Distribution. All rights reserved.</p>
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
