<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Ice Cream Distribution</title>

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
    </style>
</head>

<body class="bg-light">
    <!-- Include Navbar -->
    @include('layouts.navbar')

    <!-- Hero Section -->
    <section class="bg-primary text-white py-5" style="margin-top: 76px;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-white mb-3">
                            <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Home</a>
                            </li>
                            <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                    <h1 class="display-4 fw-bold mb-3">About Our Company</h1>
                    <p class="lead mb-0">Leading the ice cream distribution industry with quality, reliability, and
                        innovation since 2015</p>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <i class="bi bi-building display-1 opacity-25"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="bg-primary bg-opacity-10 rounded-4 p-5 d-flex align-items-center justify-content-center"
                        style="height: 400px;">
                        <i class="bi bi-snow display-1 text-primary"></i>
                    </div>
                </div>
                <div class="col-lg-6">
                    <span class="badge bg-primary mb-3 px-3 py-2">Our Story</span>
                    <h2 class="display-5 fw-bold mb-4">Building Trust Through Quality Distribution</h2>
                    <p class="text-muted mb-4">
                        Founded in 2015, Ice Cream Distribution has grown to become Indonesia's most trusted wholesale
                        distributor of premium ice cream products and supplies. We started with a simple mission: to
                        provide businesses with reliable access to quality ice cream products at competitive prices.
                    </p>
                    <p class="text-muted mb-4">
                        Today, we serve over 500 businesses across 15 cities, delivering excellence with every order.
                        Our commitment to quality, customer service, and innovation has made us the preferred partner
                        for retailers, restaurants, and ice cream shops nationwide.
                    </p>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="bg-success bg-opacity-10 rounded-circle p-3 me-3">
                                    <i class="bi bi-check-circle-fill text-success fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold">9+ Years</h5>
                                    <small class="text-muted">Experience</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                    <i class="bi bi-people-fill text-primary fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold">500+</h5>
                                    <small class="text-muted">Happy Clients</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Mission & Vision</h2>
                <p class="text-muted">Driving excellence in ice cream distribution across Indonesia</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-5">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex p-4 mb-4">
                                <i class="bi bi-bullseye text-primary fs-1"></i>
                            </div>
                            <h3 class="fw-bold mb-3">Our Mission</h3>
                            <p class="text-muted mb-3">
                                To provide businesses with reliable, temperature-controlled distribution of premium ice
                                cream products, ensuring quality and freshness with every delivery.
                            </p>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Maintain the highest quality standards
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Build lasting partnerships with clients
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Provide exceptional customer service
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-5">
                            <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex p-4 mb-4">
                                <i class="bi bi-eye text-success fs-1"></i>
                            </div>
                            <h3 class="fw-bold mb-3">Our Vision</h3>
                            <p class="text-muted mb-3">
                                To become Indonesia's leading ice cream distribution network, recognized for innovation,
                                reliability, and commitment to excellence in serving the food service industry.
                            </p>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Expand to 50 cities by 2027
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Implement sustainable practices
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Lead through technology innovation
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Core Values</h2>
                <p class="text-muted">The principles that guide everything we do</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <div class="card-body p-4">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex p-4 mb-3">
                                <i class="bi bi-star-fill text-primary fs-2"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Quality First</h5>
                            <p class="text-muted small mb-0">We never compromise on product quality and maintain strict
                                temperature controls throughout the supply chain.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <div class="card-body p-4">
                            <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex p-4 mb-3">
                                <i class="bi bi-shield-check text-success fs-2"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Reliability</h5>
                            <p class="text-muted small mb-0">On-time delivery, consistent quality, and dependable
                                service you can count on every single time.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <div class="card-body p-4">
                            <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex p-4 mb-3">
                                <i class="bi bi-lightbulb-fill text-info fs-2"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Innovation</h5>
                            <p class="text-muted small mb-0">Continuously improving our processes and adopting new
                                technologies to serve you better.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <div class="card-body p-4">
                            <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex p-4 mb-3">
                                <i class="bi bi-heart-fill text-warning fs-2"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Integrity</h5>
                            <p class="text-muted small mb-0">Honest business practices, transparent pricing, and ethical
                                operations in every transaction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Journey</h2>
                <p class="text-muted">Key milestones in our growth story</p>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="position-relative">
                        <!-- Timeline Line -->
                        <div class="position-absolute top-0 start-50 translate-middle-x bg-primary"
                            style="width: 2px; height: 100%;"></div>

                        <!-- Timeline Item 1 -->
                        <div class="row mb-5 position-relative">
                            <div class="col-md-6 text-md-end">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body p-4">
                                        <span class="badge bg-primary mb-2">2015</span>
                                        <h5 class="fw-bold mb-2">Company Founded</h5>
                                        <p class="text-muted mb-0 small">Started operations in Jakarta with just 2
                                            delivery vehicles and 10 product lines.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                            <div
                                class="position-absolute top-50 start-50 translate-middle bg-primary rounded-circle d-flex align-items-center justify-content-center text-white">
                                <i class="bi bi-flag-fill fs-5 p-3"></i>
                            </div>
                        </div>

                        <!-- Timeline Item 2 -->
                        <div class="row mb-5 position-relative">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body p-4">
                                        <span class="badge bg-primary mb-2">2017</span>
                                        <h5 class="fw-bold mb-2">Expansion to 5 Cities</h5>
                                        <p class="text-muted mb-0 small">Expanded operations to Bandung, Surabaya,
                                            Semarang, and Yogyakarta with 100+ clients.</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="position-absolute top-50 start-50 translate-middle bg-success rounded-circle d-flex align-items-center justify-content-center text-white">
                                <i class="bi bi-geo-alt-fill fs-5 p-3"></i>
                            </div>
                        </div>

                        <!-- Timeline Item 3 -->
                        <div class="row mb-5 position-relative">
                            <div class="col-md-6 text-md-end">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body p-4">
                                        <span class="badge bg-primary mb-2">2020</span>
                                        <h5 class="fw-bold mb-2">New Warehouse Facility</h5>
                                        <p class="text-muted mb-0 small">Opened state-of-the-art 5,000 sqm
                                            temperature-controlled warehouse in Jakarta.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                            <div
                                class="position-absolute top-50 start-50 translate-middle bg-info rounded-circle d-flex align-items-center justify-content-center text-white">
                                <i class="bi bi-building fs-5 p-3"></i>
                            </div>
                        </div>

                        <!-- Timeline Item 4 -->
                        <div class="row position-relative">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body p-4">
                                        <span class="badge bg-primary mb-2">2024</span>
                                        <h5 class="fw-bold mb-2">500+ Clients Nationwide</h5>
                                        <p class="text-muted mb-0 small">Serving 500+ clients across 15 cities with 50+
                                            product lines and 24/7 service.</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="position-absolute top-50 start-50 translate-middle bg-warning rounded-circle d-flex align-items-center justify-content-center text-white">
                                <i class="bi bi-trophy-fill fs-5 p-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Meet Our Leadership Team</h2>
                <p class="text-muted">Experienced professionals dedicated to your success</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex mb-3"
                                style="width: 120px; height: 120px;">
                                <i class="bi bi-person-circle display-4 text-primary m-auto"></i>
                            </div>
                            <h5 class="fw-bold mb-1">John Anderson</h5>
                            <p class="text-muted small mb-3">Chief Executive Officer</p>
                            <p class="text-muted small mb-3">20+ years in food distribution industry</p>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-circle"
                                    style="width: 35px; height: 35px;">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-circle"
                                    style="width: 35px; height: 35px;">
                                    <i class="bi bi-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex mb-3"
                                style="width: 120px; height: 120px;">
                                <i class="bi bi-person-circle display-4 text-success m-auto"></i>
                            </div>
                            <h5 class="fw-bold mb-1">Sarah Mitchell</h5>
                            <p class="text-muted small mb-3">Chief Operations Officer</p>
                            <p class="text-muted small mb-3">15+ years in logistics management</p>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="btn btn-sm btn-outline-success rounded-circle"
                                    style="width: 35px; height: 35px;">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-success rounded-circle"
                                    style="width: 35px; height: 35px;">
                                    <i class="bi bi-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex mb-3"
                                style="width: 120px; height: 120px;">
                                <i class="bi bi-person-circle display-4 text-info m-auto"></i>
                            </div>
                            <h5 class="fw-bold mb-1">David Chen</h5>
                            <p class="text-muted small mb-3">Sales Director</p>
                            <p class="text-muted small mb-3">12+ years in B2B sales</p>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="btn btn-sm btn-outline-info rounded-circle"
                                    style="width: 35px; height: 35px;">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-info rounded-circle"
                                    style="width: 35px; height: 35px;">
                                    <i class="bi bi-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex mb-3"
                                style="width: 120px; height: 120px;">
                                <i class="bi bi-person-circle display-4 text-warning m-auto"></i>
                            </div>
                            <h5 class="fw-bold mb-1">Lisa Rahman</h5>
                            <p class="text-muted small mb-3">Quality Assurance Head</p>
                            <p class="text-muted small mb-3">10+ years in food safety</p>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="btn btn-sm btn-outline-warning rounded-circle"
                                    style="width: 35px; height: 35px;">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-warning rounded-circle"
                                    style="width: 35px; height: 35px;">
                                    <i class="bi bi-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section class="py-5 bg-primary text-white">
        <div class="container py-4">
            <div class="row g-4 text-center">
                <div class="col-md-3 col-6">
                    <div class="p-3">
                        <h2 class="display-4 fw-bold mb-2">500+</h2>
                        <p class="mb-0 opacity-75">Active Clients</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3">
                        <h2 class="display-4 fw-bold mb-2">15</h2>
                        <p class="mb-0 opacity-75">Cities Covered</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3">
                        <h2 class="display-4 fw-bold mb-2">50+</h2>
                        <p class="mb-0 opacity-75">Product Lines</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3">
                        <h2 class="display-4 fw-bold mb-2">24/7</h2>
                        <p class="mb-0 opacity-75">Customer Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications -->
    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Certifications & Standards</h2>
                <p class="text-muted">Committed to the highest industry standards</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <div class="card-body p-4">
                            <i class="bi bi-patch-check-fill text-primary display-4 mb-3"></i>
                            <h5 class="fw-bold mb-2">HACCP Certified</h5>
                            <p class="text-muted small mb-0">Hazard Analysis Critical Control Points</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <div class="card-body p-4">
                            <i class="bi bi-shield-fill-check text-success display-4 mb-3"></i>
                            <h5 class="fw-bold mb-2">ISO 9001:2015</h5>
                            <p class="text-muted small mb-0">Quality Management System</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <div class="card-body p-4">
                            <i class="bi bi-thermometer-snow text-info display-4 mb-3"></i>
                            <h5 class="fw-bold mb-2">Cold Chain</h5>
                            <p class="text-muted small mb-0">Certified Temperature Control</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <div class="card-body p-4">
                            <i class="bi bi-award-fill text-warning display-4 mb-3"></i>
                            <h5 class="fw-bold mb-2">Halal Certified</h5>
                            <p class="text-muted small mb-0">Indonesian Halal Certification</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center py-4">
            <h2 class="display-5 fw-bold mb-3">Ready to Partner With Us?</h2>
            <p class="lead mb-4">Join hundreds of satisfied clients who trust us for their ice cream distribution needs
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="/products" class="btn btn-light btn-lg px-5">
                    <i class="bi bi-box-seam me-2"></i>View Products
                </a>
                <a href="/contact" class="btn btn-outline-light btn-lg px-5">
                    <i class="bi bi-telephone me-2"></i>Contact Us
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-snow me-2"></i>IceCream Distribution
                    </h5>
                    <p class="text-white-50">Your trusted partner for premium ice cream distribution services across
                        Indonesia.</p>
                    <div class="d-flex gap-2 mt-3">
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"
                            style="width: 40px; height: 40px;">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"
                            style="width: 40px; height: 40px;">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"
                            style="width: 40px; height: 40px;">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"
                            style="width: 40px; height: 40px;">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="/products"
                                class="text-white-50 text-decoration-none">Products</a></li>
                        <li class="mb-2"><a href="/about" class="text-white-50 text-decoration-none">About Us</a>
                        </li>
                        <li class="mb-2"><a href="/contact" class="text-white-50 text-decoration-none">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Products</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/products?category=Es Krim"
                                class="text-white-50 text-decoration-none">Ice Cream</a></li>
                        <li class="mb-2"><a href="/products?category=Bubuk Es Krim"
                                class="text-white-50 text-decoration-none">Ice Cream Powder</a></li>
                        <li class="mb-2"><a href="/products?category=Cone"
                                class="text-white-50 text-decoration-none">Cones & Cups</a></li>
                        <li class="mb-2"><a href="/products?category=Sendok"
                                class="text-white-50 text-decoration-none">Accessories</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Contact Info</h5>
                    <p class="text-white-50 mb-2">
                        <i class="bi bi-geo-alt me-2"></i>Jakarta, Indonesia
                    </p>
                    <p class="text-white-50 mb-2">
                        <i class="bi bi-telephone me-2"></i>+62 812 3456 7890
                    </p>
                    <p class="text-white-50">
                        <i class="bi bi-envelope me-2"></i>info@icecream.com
                    </p>
                </div>
            </div>

            <hr class="my-4 bg-white opacity-25">

            <div class="text-center">
                <p class="text-white-50 mb-0">&copy; 2024 IceCream Distribution. All rights reserved.</p>
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
    </script>
</body>

</html>