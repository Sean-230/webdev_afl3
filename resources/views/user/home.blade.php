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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <!-- Include Navbar -->
    @include('layouts.navbar')

    <!-- Hero Section -->
    <section class="hero-section" style="background-color: #173648; padding: 140px 0 100px; margin-top: 76px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="display-3 fw-bold mb-4 text-white lh-sm">Premium Ice Cream Distribution</h1>
                    <p class="fs-5 mb-5 text-white opacity-90 lh-lg">
                        Wholesale ice cream distributor serving businesses across Indonesia.
                        We deliver quality products with reliable cold-chain logistics to help your business thrive.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="/products" class="btn btn-lg px-5 py-3 fw-semibold"
                            style="background-color: #1C7FDD; color: white; border-radius: 10px; transition: all 0.3s ease;"
                            onmouseover="this.style.backgroundColor='#0FB7D4'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 20px rgba(28, 127, 221, 0.4)';"
                            onmouseout="this.style.backgroundColor='#1C7FDD'; this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                            <i class="bi bi-grid-3x3-gap me-2"></i>Browse Products
                        </a>
                        <a href="/contact" class="btn btn-lg px-5 py-3 fw-semibold"
                            style="background-color: transparent; color: white; border: 2px solid white; border-radius: 10px; transition: all 0.3s ease;"
                            onmouseover="this.style.backgroundColor='white'; this.style.color='#173648';"
                            onmouseout="this.style.backgroundColor='transparent'; this.style.color='white';">
                            <i class="bi bi-telephone me-2"></i>Contact Us
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Stats Grid -->
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="p-4 rounded-3 text-center" style="background-color: rgba(28, 127, 221, 0.2);">
                                <h2 class="display-4 fw-bold text-white mb-2">500+</h2>
                                <p class="text-white mb-0 opacity-90">Active Partners</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-4 rounded-3 text-center" style="background-color: rgba(15, 183, 212, 0.2);">
                                <h2 class="display-4 fw-bold text-white mb-2">15+</h2>
                                <p class="text-white mb-0 opacity-90">Cities</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-4 rounded-3 text-center" style="background-color: rgba(15, 183, 212, 0.2);">
                                <h2 class="display-4 fw-bold text-white mb-2">50+</h2>
                                <p class="text-white mb-0 opacity-90">Product Lines</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-4 rounded-3 text-center" style="background-color: rgba(28, 127, 221, 0.2);">
                                <h2 class="display-4 fw-bold text-white mb-2">10K+</h2>
                                <p class="text-white mb-0 opacity-90">Deliveries</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-3" style="color: #173648;">What We Offer</h2>
                    <p class="text-muted fs-5">Comprehensive distribution solutions tailored for your business needs</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm p-4"
                        style="border-radius: 15px; transition: all 0.3s ease;"
                        onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.15)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 10px rgba(0,0,0,0.1)';">
                        <div class="mb-4">
                            <div class="d-inline-flex p-3 rounded-circle"
                                style="background-color: rgba(28, 127, 221, 0.1);">
                                <i class="bi bi-truck fs-1" style="color: #1C7FDD;"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3" style="color: #173648;">Distribution Network</h4>
                        <p class="text-muted mb-0">Extensive reach across major cities in Indonesia with reliable
                            cold-chain logistics ensuring product quality.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm p-4"
                        style="border-radius: 15px; transition: all 0.3s ease;"
                        onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.15)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 10px rgba(0,0,0,0.1)';">
                        <div class="mb-4">
                            <div class="d-inline-flex p-3 rounded-circle"
                                style="background-color: rgba(15, 183, 212, 0.1);">
                                <i class="bi bi-box-seam fs-1" style="color: #0FB7D4;"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3" style="color: #173648;">Product Variety</h4>
                        <p class="text-muted mb-0">Wide selection of ice cream products, powders, cones, cups, and
                            accessories from trusted manufacturers.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm p-4"
                        style="border-radius: 15px; transition: all 0.3s ease;"
                        onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.15)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 10px rgba(0,0,0,0.1)';">
                        <div class="mb-4">
                            <div class="d-inline-flex p-3 rounded-circle"
                                style="background-color: rgba(10, 90, 153, 0.1);">
                                <i class="bi bi-cash-coin fs-1" style="color: #0A5A99;"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3" style="color: #173648;">Competitive Pricing</h4>
                        <p class="text-muted mb-0">Wholesale prices with flexible payment terms designed to support
                            your business growth and profitability.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-3" style="color: #173648;">Featured Products</h2>
                    <p class="text-muted fs-5">Browse our selection of premium ice cream products</p>
                </div>
            </div>

            <div class="row g-4 mb-5">
                @foreach ($products as $product)
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm"
                            style="border-radius: 15px; transition: all 0.3s ease;"
                            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 40px rgba(0,0,0,0.15)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 10px rgba(0,0,0,0.1)';">
                            <div class="position-relative"
                                style="height: 250px; overflow: hidden; border-radius: 15px 15px 0 0; background-color: #f8f9fa;">
                                @if ($product->image_path && file_exists(public_path($product->image_path)))
                                    <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}"
                                        class="w-100 h-100" style="object-fit: cover;">
                                @else
                                    <div class="d-flex align-items-center justify-content-center h-100">
                                        <i class="bi bi-snow3" style="font-size: 5rem; color: #0A5A99;"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="card-body p-4">
                                <h5 class="fw-bold mb-2" style="color: #173648;">{{ $product->name }}</h5>
                                <p class="text-muted small mb-3">{{ Str::limit($product->description, 60) }}</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="fs-4 fw-bold" style="color: #0A5A99;">
                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                    </span>
                                </div>
                                <a href="{{ route('products.show', $product->id) }}" class="btn w-100 fw-semibold"
                                    style="background-color: #1C7FDD; color: white; border-radius: 8px; transition: all 0.3s ease;"
                                    onmouseover="this.style.backgroundColor='#0FB7D4';"
                                    onmouseout="this.style.backgroundColor='#1C7FDD';">
                                    <i class="bi bi-eye me-2"></i>View Details
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="/products" class="btn btn-lg px-5 py-3 fw-semibold"
                    style="background-color: #173648; color: white; border-radius: 10px; transition: all 0.3s ease;"
                    onmouseover="this.style.backgroundColor='#0A5A99'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 20px rgba(23, 54, 72, 0.4)';"
                    onmouseout="this.style.backgroundColor='#173648'; this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                    View All Products <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="position-relative">
                        <!-- Image Placeholder -->
                        <div class="rounded-4 overflow-hidden"
                            style="height: 500px; background-color: rgba(15, 183, 212, 0.1);">
                            <img src="{{ asset('images/warehouse.jpg') }}" alt="Warehouse" class="w-100 h-100"
                                style="object-fit: cover;"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="d-none align-items-center justify-content-center h-100">
                                <i class="bi bi-building" style="font-size: 10rem; color: #0A5A99; opacity: 0.3;"></i>
                            </div>
                        </div>

                        <!-- Floating Badge -->
                        <div class="position-absolute bottom-0 start-0 m-4 p-4 rounded-3 shadow-lg"
                            style="background-color: white; max-width: 280px;">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-award-fill fs-3 me-3" style="color: #1C7FDD;"></i>
                                <div>
                                    <h5 class="fw-bold mb-0" style="color: #173648;">9+ Years</h5>
                                    <small class="text-muted">Industry Experience</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4" style="color: #173648;">Why Partner With Us</h2>
                    <p class="text-muted fs-5 mb-4 lh-lg">
                        Since 2015, we've been serving the Indonesian food service industry with dedication and
                        excellence.
                        Our commitment to quality products and reliable service has earned the trust of over 500
                        businesses nationwide.
                    </p>

                    <!-- Key Points -->
                    <div class="row g-3 mb-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start p-3 rounded-3"
                                style="background-color: rgba(23, 54, 72, 0.05);">
                                <i class="bi bi-check-circle-fill fs-4 me-3" style="color: #1C7FDD;"></i>
                                <div>
                                    <h6 class="fw-bold mb-1" style="color: #173648;">Reliable Supply Chain</h6>
                                    <p class="text-muted small mb-0">Consistent stock availability and on-time delivery
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start p-3 rounded-3"
                                style="background-color: rgba(23, 54, 72, 0.05);">
                                <i class="bi bi-check-circle-fill fs-4 me-3" style="color: #0FB7D4;"></i>
                                <div>
                                    <h6 class="fw-bold mb-1" style="color: #173648;">Quality Assurance</h6>
                                    <p class="text-muted small mb-0">Temperature-controlled storage and transportation
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start p-3 rounded-3"
                                style="background-color: rgba(23, 54, 72, 0.05);">
                                <i class="bi bi-check-circle-fill fs-4 me-3" style="color: #0A5A99;"></i>
                                <div>
                                    <h6 class="fw-bold mb-1" style="color: #173648;">Business Support</h6>
                                    <p class="text-muted small mb-0">Flexible payment terms and dedicated account
                                        management</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="/about" class="btn btn-lg px-5 py-3 fw-semibold"
                        style="background-color: #1C7FDD; color: white; border-radius: 10px; transition: all 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#0FB7D4'; this.style.transform='translateY(-2px)';"
                        onmouseout="this.style.backgroundColor='#1C7FDD'; this.style.transform='translateY(0)';">
                        Learn More <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-3" style="color: #173648;">Client Success Stories</h2>
                    <p class="text-muted fs-5">Hear from businesses who trust us with their ice cream needs</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-4" style="border-radius: 15px;">
                        <div class="mb-3">
                            <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                            <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                            <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                            <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                            <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                        </div>
                        <p class="text-muted mb-4 fst-italic">"Reliable delivery and consistent quality. They've been
                            our ice cream supplier for 3 years and never disappointed us."</p>
                        <div class="d-flex align-items-center mt-auto">
                            <div class="me-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 50px; height: 50px; background-color: rgba(28, 127, 221, 0.1);">
                                    <i class="bi bi-person-fill fs-4" style="color: #0A5A99;"></i>
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold" style="color: #173648;">Budi Santoso</h6>
                                <small class="text-muted">Ice Cream Shop Owner</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-4" style="border-radius: 15px;">
                        <div class="mb-3">
                            <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                            <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                            <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                            <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                            <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                        </div>
                        <p class="text-muted mb-4 fst-italic">"Great product variety and competitive pricing. Their
                            team is always responsive to our needs."</p>
                        <div class="d-flex align-items-center mt-auto">
                            <div class="me-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 50px; height: 50px; background-color: rgba(28, 127, 221, 0.1);">
                                    <i class="bi bi-person-fill fs-4" style="color: #0A5A99;"></i>
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold" style="color: #173648;">Siti Nurhaliza</h6>
                                <small class="text-muted">Restaurant Manager</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-4" style="border-radius: 15px;">
                        <div class="mb-3">
                            <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                            <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                            <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                            <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                            <i class="bi bi-star-fill" style="color: #0FB7D4;"></i>
                        </div>
                        <p class="text-muted mb-4 fst-italic">"Professional service from order to delivery. Products
                            always arrive in perfect condition."</p>
                        <div class="d-flex align-items-center mt-auto">
                            <div class="me-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 50px; height: 50px; background-color: rgba(28, 127, 221, 0.1);">
                                    <i class="bi bi-person-fill fs-4" style="color: #0A5A99;"></i>
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold" style="color: #173648;">Ahmad Rizki</h6>
                                <small class="text-muted">Cafe Owner</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
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
