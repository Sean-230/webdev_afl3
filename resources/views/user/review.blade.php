<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Reviews - Ice Cream Distribution</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/review.css') }}">
</head>

<body>
    <!-- Include Navbar -->
    @include('layouts.navbar')

    <!-- Hero Section -->
    <section class="text-white py-5" style="margin-top: 76px; background-color: var(--primary-dark);">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3">
                            <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none opacity-75">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Reviews</li>
                        </ol>
                    </nav>
                    <h1 class="display-4 fw-bold mb-3">Customer Reviews</h1>
                    <p class="lead mb-0 opacity-90">See what our valued customers say about our products and services</p>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <i class="bi bi-star-fill display-1 opacity-25"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Overall Rating Section -->
    <section class="py-5" style="background-color: var(--accent-peach);">
        <div class="container py-4">
            <div class="row g-4 align-items-center">
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm text-center p-4">
                        <h6 class="text-muted mb-2">OVERALL RATING</h6>
                        <div class="display-1 fw-bold mb-2" style="color: var(--primary-dark);">4.8</div>
                        <div class="mb-3">
                            <i class="bi bi-star-fill rating-star" style="color: var(--accent-pink);"></i>
                            <i class="bi bi-star-fill rating-star" style="color: var(--accent-pink);"></i>
                            <i class="bi bi-star-fill rating-star" style="color: var(--accent-pink);"></i>
                            <i class="bi bi-star-fill rating-star" style="color: var(--accent-pink);"></i>
                            <i class="bi bi-star-half rating-star" style="color: var(--accent-pink);"></i>
                        </div>
                        <p class="text-muted mb-0">Based on 1,248 reviews</p>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm p-4">
                        <h5 class="fw-bold mb-4" style="color: var(--primary-dark);">Rating Distribution</h5>
                        
                        <!-- 5 Stars -->
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3" style="min-width: 100px;">
                                <span class="fw-semibold">5 Stars</span>
                            </div>
                            <div class="progress flex-grow-1 progress-bar-custom" style="height: 20px;">
                                <div class="progress-bar progress-bar-fill" role="progressbar" style="width: 75%"></div>
                            </div>
                            <span class="ms-3 fw-semibold" style="color: var(--primary-dark); min-width: 50px;">936</span>
                        </div>

                        <!-- 4 Stars -->
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3" style="min-width: 100px;">
                                <span class="fw-semibold">4 Stars</span>
                            </div>
                            <div class="progress flex-grow-1 progress-bar-custom" style="height: 20px;">
                                <div class="progress-bar progress-bar-fill" role="progressbar" style="width: 15%"></div>
                            </div>
                            <span class="ms-3 fw-semibold" style="color: var(--primary-dark); min-width: 50px;">187</span>
                        </div>

                        <!-- 3 Stars -->
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3" style="min-width: 100px;">
                                <span class="fw-semibold">3 Stars</span>
                            </div>
                            <div class="progress flex-grow-1 progress-bar-custom" style="height: 20px;">
                                <div class="progress-bar progress-bar-fill" role="progressbar" style="width: 6%"></div>
                            </div>
                            <span class="ms-3 fw-semibold" style="color: var(--primary-dark); min-width: 50px;">75</span>
                        </div>

                        <!-- 2 Stars -->
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3" style="min-width: 100px;">
                                <span class="fw-semibold">2 Stars</span>
                            </div>
                            <div class="progress flex-grow-1 progress-bar-custom" style="height: 20px;">
                                <div class="progress-bar progress-bar-fill" role="progressbar" style="width: 3%"></div>
                            </div>
                            <span class="ms-3 fw-semibold" style="color: var(--primary-dark); min-width: 50px;">37</span>
                        </div>

                        <!-- 1 Star -->
                        <div class="d-flex align-items-center">
                            <div class="me-3" style="min-width: 100px;">
                                <span class="fw-semibold">1 Star</span>
                            </div>
                            <div class="progress flex-grow-1 progress-bar-custom" style="height: 20px;">
                                <div class="progress-bar progress-bar-fill" role="progressbar" style="width: 1%"></div>
                            </div>
                            <span class="ms-3 fw-semibold" style="color: var(--primary-dark); min-width: 50px;">13</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5 text-white" style="background-color: var(--primary-teal);">
        <div class="container py-4">
            <div class="row g-4 text-center">
                <div class="col-md-3 col-6">
                    <div class="stats-card">
                        <h2 class="display-4 fw-bold mb-2">98%</h2>
                        <p class="mb-0 opacity-90">Satisfaction Rate</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-card">
                        <h2 class="display-4 fw-bold mb-2">1.2K+</h2>
                        <p class="mb-0 opacity-90">Total Reviews</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-card">
                        <h2 class="display-4 fw-bold mb-2">500+</h2>
                        <p class="mb-0 opacity-90">Verified Buyers</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-card">
                        <h2 class="display-4 fw-bold mb-2">4.8</h2>
                        <p class="mb-0 opacity-90">Average Rating</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-4" style="background-color: white;">
        <div class="container">
            <div class="d-flex flex-wrap gap-3 justify-content-center align-items-center">
                <button class="filter-btn active">All Reviews</button>
                <button class="filter-btn">5 Stars</button>
                <button class="filter-btn">4 Stars</button>
                <button class="filter-btn">3 Stars</button>
                <button class="filter-btn">With Photos</button>
                <button class="filter-btn">Verified Only</button>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row g-4">
                <!-- Review 1 -->
                <div class="col-lg-6">
                    <div class="review-card shadow-sm p-4" style="background-color: white;">
                        <div class="d-flex align-items-start mb-3">
                            <div class="reviewer-avatar me-3" style="background-color: var(--primary-dark);">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h6 class="fw-bold mb-1" style="color: var(--primary-dark);">Budi Santoso</h6>
                                        <small class="text-muted">Ice Cream Shop Owner, Jakarta</small>
                                    </div>
                                    <span class="verified-badge">
                                        <i class="bi bi-patch-check-fill me-1"></i>Verified
                                    </span>
                                </div>
                                <div class="mb-2">
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            Excellent service! The delivery is always on time and the products are top quality. I've been ordering from them for 2 years now and never had any issues. Highly recommended for any ice cream business.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="bi bi-calendar3 me-1"></i>2 weeks ago
                            </small>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-hand-thumbs-up me-1"></i>Helpful (24)
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="col-lg-6">
                    <div class="review-card shadow-sm p-4" style="background-color: white;">
                        <div class="d-flex align-items-start mb-3">
                            <div class="reviewer-avatar me-3" style="background-color: var(--primary-teal);">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h6 class="fw-bold mb-1" style="color: var(--primary-dark);">Siti Nurhaliza</h6>
                                        <small class="text-muted">Restaurant Owner, Bandung</small>
                                    </div>
                                    <span class="verified-badge">
                                        <i class="bi bi-patch-check-fill me-1"></i>Verified
                                    </span>
                                </div>
                                <div class="mb-2">
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            Great prices and reliable partner! They've helped our business grow with consistent supply and excellent customer service. The temperature control during delivery is perfect.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="bi bi-calendar3 me-1"></i>3 weeks ago
                            </small>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-hand-thumbs-up me-1"></i>Helpful (18)
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="col-lg-6">
                    <div class="review-card shadow-sm p-4" style="background-color: white;">
                        <div class="d-flex align-items-start mb-3">
                            <div class="reviewer-avatar me-3" style="background-color: var(--accent-pink); color: var(--primary-dark);">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h6 class="fw-bold mb-1" style="color: var(--primary-dark);">Ahmad Rizki</h6>
                                        <small class="text-muted">Cafe Owner, Surabaya</small>
                                    </div>
                                    <span class="verified-badge">
                                        <i class="bi bi-patch-check-fill me-1"></i>Verified
                                    </span>
                                </div>
                                <div class="mb-2">
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            Professional team with great product variety. The temperature control during delivery ensures our products arrive in perfect condition every single time. Very satisfied!
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="bi bi-calendar3 me-1"></i>1 month ago
                            </small>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-hand-thumbs-up me-1"></i>Helpful (32)
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="col-lg-6">
                    <div class="review-card shadow-sm p-4" style="background-color: white;">
                        <div class="d-flex align-items-start mb-3">
                            <div class="reviewer-avatar me-3" style="background-color: var(--primary-dark);">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h6 class="fw-bold mb-1" style="color: var(--primary-dark);">Lisa Wijaya</h6>
                                        <small class="text-muted">Dessert Shop Owner, Semarang</small>
                                    </div>
                                    <span class="verified-badge">
                                        <i class="bi bi-patch-check-fill me-1"></i>Verified
                                    </span>
                                </div>
                                <div class="mb-2">
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star" style="color: var(--accent-peach);"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            Good quality products and responsive customer service. Delivery is reliable and packaging is always secure. Only minor issue was one late delivery, but they compensated well.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="bi bi-calendar3 me-1"></i>1 month ago
                            </small>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-hand-thumbs-up me-1"></i>Helpful (15)
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 5 -->
                <div class="col-lg-6">
                    <div class="review-card shadow-sm p-4" style="background-color: white;">
                        <div class="d-flex align-items-start mb-3">
                            <div class="reviewer-avatar me-3" style="background-color: var(--primary-teal);">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h6 class="fw-bold mb-1" style="color: var(--primary-dark);">Rudi Hermawan</h6>
                                        <small class="text-muted">Street Vendor, Yogyakarta</small>
                                    </div>
                                    <span class="verified-badge">
                                        <i class="bi bi-patch-check-fill me-1"></i>Verified
                                    </span>
                                </div>
                                <div class="mb-2">
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            Sangat membantu usaha kecil seperti saya. Harga kompetitif, produk berkualitas, dan pelayanan ramah. Pengiriman selalu tepat waktu dan produk sampai dalam kondisi baik!
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="bi bi-calendar3 me-1"></i>2 months ago
                            </small>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-hand-thumbs-up me-1"></i>Helpful (28)
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 6 -->
                <div class="col-lg-6">
                    <div class="review-card shadow-sm p-4" style="background-color: white;">
                        <div class="d-flex align-items-start mb-3">
                            <div class="reviewer-avatar me-3" style="background-color: var(--accent-pink); color: var(--primary-dark);">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h6 class="fw-bold mb-1" style="color: var(--primary-dark);">Diana Putri</h6>
                                        <small class="text-muted">Bakery Owner, Malang</small>
                                    </div>
                                    <span class="verified-badge">
                                        <i class="bi bi-patch-check-fill me-1"></i>Verified
                                    </span>
                                </div>
                                <div class="mb-2">
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                    <i class="bi bi-star-fill" style="color: var(--accent-pink);"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            Best ice cream distributor in Indonesia! Wide product selection, competitive prices, and excellent service. My customers love the quality. Will continue ordering from them!
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="bi bi-calendar3 me-1"></i>2 months ago
                            </small>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-hand-thumbs-up me-1"></i>Helpful (41)
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="Review pagination" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Write Review CTA -->
    <section class="py-5 text-white" style="background-color: var(--primary-dark);">
        <div class="container text-center py-4">
            <h2 class="display-6 fw-bold mb-3">Share Your Experience</h2>
            <p class="lead mb-4 opacity-90">Have you purchased from us? We'd love to hear about your experience!</p>
            <button class="btn btn-lg px-5" style="background-color: var(--accent-pink); color: var(--primary-dark); border: none; font-weight: 600;">
                <i class="bi bi-pencil-square me-2"></i>Write a Review
            </button>
        </div>
    </section>

    <!-- Testimonial Highlights -->
    <section class="py-5" style="background-color: var(--accent-peach);">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold mb-3" style="color: var(--primary-dark);">Why Customers Choose Us</h2>
                <p class="text-muted">Key highlights from customer feedback</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm text-center h-100 p-4">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                            style="width: 80px; height: 80px; background-color: rgba(26, 49, 83, 0.1);">
                            <i class="bi bi-truck fs-1" style="color: var(--primary-dark);"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--primary-dark);">Fast & Reliable Delivery</h5>
                        <p class="text-muted mb-0">95% of customers praised our on-time delivery and proper temperature control</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm text-center h-100 p-4">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                            style="width: 80px; height: 80px; background-color: rgba(12, 87, 119, 0.1);">
                            <i class="bi bi-star fs-1" style="color: var(--primary-teal);"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--primary-dark);">Premium Quality Products</h5>
                        <p class="text-muted mb-0">98% satisfaction rate for product quality and freshness</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm text-center h-100 p-4">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                            style="width: 80px; height: 80px; background-color: rgba(239, 147, 255, 0.2);">
                            <i class="bi bi-headset fs-1" style="color: var(--accent-pink);"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--primary-dark);">Excellent Customer Service</h5>
                        <p class="text-muted mb-0">92% of customers rated our customer support as excellent</p>
                    </div>
                </div>
            </div>
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
                    <p class="opacity-75">Your trusted partner for premium ice cream distribution services across Indonesia.</p>
                    <div class="d-flex gap-2 mt-3">
                        <a href="#" class="btn btn-sm rounded-circle border border-white" style="width: 40px; height: 40px; color: white;">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="btn btn-sm rounded-circle border border-white" style="width: 40px; height: 40px; color: white;">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-sm rounded-circle border border-white" style="width: 40px; height: 40px; color: white;">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-sm rounded-circle border border-white" style="width: 40px; height: 40px; color: white;">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/" class="text-decoration-none opacity-75" style="color: white;">Home</a></li>
                        <li class="mb-2"><a href="/products" class="text-decoration-none opacity-75" style="color: white;">Products</a></li>
                        <li class="mb-2"><a href="/about" class="text-decoration-none opacity-75" style="color: white;">About Us</a></li>
                        <li class="mb-2"><a href="/contact" class="text-decoration-none opacity-75" style="color: white;">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Products</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/products?category=Es Krim" class="text-decoration-none opacity-75" style="color: white;">Ice Cream</a></li>
                        <li class="mb-2"><a href="/products?category=Bubuk Es Krim" class="text-decoration-none opacity-75" style="color: white;">Ice Cream Powder</a></li>
                        <li class="mb-2"><a href="/products?category=Cone" class="text-decoration-none opacity-75" style="color: white;">Cones & Cups</a></li>
                        <li class="mb-2"><a href="/products?category=Sendok" class="text-decoration-none opacity-75" style="color: white;">Accessories</a></li>
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
        // Filter button functionality
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });

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