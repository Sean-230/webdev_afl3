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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
    <section class="py-5" style="background-color: rgba(15, 183, 212, 0.1);">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="section-title" style="color: #173648;">Why Choose Us</h2>
                <p class="text-muted">We provide the best ice cream distribution services in Indonesia</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon icon-dark">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: #173648;">Fast Delivery</h5>
                        <p class="text-muted mb-0">Quick and reliable delivery with temperature-controlled vehicles to
                            maintain product quality</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon icon-teal">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: #173648;">Premium Quality</h5>
                        <p class="text-muted mb-0">Only the finest ice cream products from trusted manufacturers
                            nationwide</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon icon-pink">
                            <i class="bi bi-cash-coin"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: #173648;">Best Prices</h5>
                        <p class="text-muted mb-0">Competitive wholesale pricing with flexible payment options for your
                            business</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon icon-peach">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: #173648;">24/7 Support</h5>
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
                <h2 class="section-title" style="color: #173648;">Our Products</h2>
                <p class="text-muted">Browse our wide selection of ice cream products and supplies</p>
            </div>

            <div class="row g-4">
                @foreach($products as $product)
                <div class="col-md-6 col-lg-3">
                    <div class="product-card shadow-sm">
                        <div class="product-image-wrapper" style="background-color: rgba(15, 183, 212, 0.1);">
                            @if($product->image_path && file_exists(public_path($product->image_path)))
                                <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" class="w-100 h-100" style="object-fit: cover;">
                            @else
                                <i class="bi bi-snow3" style="font-size: 5rem; color: #0A5A99;"></i>
                            @endif
                            @if($loop->first)
                                <span class="product-badge badge-pink">Popular</span>
                            @endif
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold mb-2" style="color: #173648;">{{ $product->name }}</h5>
                            <p class="text-muted small mb-3">{{ Str::limit($product->description, 50) }}</p>
                            <div class="mb-3">
                                <span class="fs-4 fw-bold" style="color: #0A5A99;">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </span>
                            </div>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-custom-pink w-100">
                                <i class="bi bi-eye me-2"></i>View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-5">
                <a href="/products" class="btn btn-lg btn-custom-pink">
                    View All Products <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5 text-white" style="background-color: #0A5A99;">
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
    <section class="py-5" id="about" style="background-color: rgba(15, 183, 212, 0.1);">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="rounded-4 p-5 text-center" style="background-color: white; height: 400px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-building" style="font-size: 10rem; color: #173648; opacity: 0.1;"></i>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title mb-4" style="color: #173648;">About Our Company</h2>
                    <p class="text-muted mb-4">
                        Since 2015, we've been Indonesia's leading ice cream distribution network, serving over 500
                        businesses across 15 cities. Our commitment to quality and reliable service has made us the
                        preferred partner for ice cream retailers nationwide.
                    </p>
                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle p-3 me-3" style="background-color: #1C7FDD;">
                                    <i class="bi bi-check-circle-fill fs-4 text-white"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold" style="color: #173648;">9+ Years</h5>
                                    <small class="text-muted">Experience</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle p-3 me-3" style="background-color: #0FB7D4;">
                                    <i class="bi bi-people-fill fs-4 text-white"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold" style="color: #173648;">500+</h5>
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
                <h2 class="section-title" style="color: #173648;">What Our Clients Say</h2>
                <p class="text-muted">Don't just take our word for it</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                                <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                                <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                                <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                                <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                            </div>
                            <p class="text-muted mb-3">"Excellent service! The delivery is always on time and the products
                                are top quality. Highly recommended for any ice cream business."</p>
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle p-3 me-3" style="background-color: rgba(15, 183, 212, 0.2);">
                                    <i class="bi bi-person-fill fs-4" style="color: #173648;"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-bold" style="color: #173648;">Budi Santoso</h6>
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
                                <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                                <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                                <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                                <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                                <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                            </div>
                            <p class="text-muted mb-3">"Great prices and reliable partner. They've helped our business grow
                                with consistent supply and excellent customer service."</p>
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle p-3 me-3" style="background-color: rgba(15, 183, 212, 0.2);">
                                    <i class="bi bi-person-fill fs-4" style="color: #173648;"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-bold" style="color: #173648;">Siti Nurhaliza</h6>
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
                                <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                                <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                                <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                                <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                                <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                            </div>
                            <p class="text-muted mb-3">"Professional team with great product variety. The temperature control
                                during delivery ensures our products arrive in perfect condition."</p>
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle p-3 me-3" style="background-color: rgba(15, 183, 212, 0.2);">
                                    <i class="bi bi-person-fill fs-4" style="color: #173648;"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-bold" style="color: #173648;">Ahmad Rizki</h6>
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
    <section class="py-5 text-white" style="background: linear-gradient(135deg, #173648 0%, #0A5A99 100%);">
        <div class="container text-center py-4">
            <h2 class="section-title mb-3">Ready to Start Your Business?</h2>
            <p class="lead mb-4 opacity-90">Join hundreds of satisfied customers and grow your ice cream business with us</p>
            <a href="/contact" class="btn btn-custom-pink btn-lg">
                <i class="bi bi-telephone me-2"></i>Contact Us Today
            </a>
        </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer')

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
