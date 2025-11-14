<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Ice Cream Distribution</title>

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

        body {
            background-color: #f8f9fa;
        }

        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            border: none;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
        }

        .product-image-wrapper {
            position: relative;
            overflow: hidden;
            height: 250px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.05);
        }

        .product-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 10;
        }

        .category-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            z-index: 10;
        }

        .price-tag {
            font-size: 1.5rem;
            font-weight: 700;
            color: #dc3545;
        }

        .filter-card {
            position: sticky;
            top: 100px;
        }

        .category-item {
            transition: all 0.3s ease;
            cursor: pointer;
            border-left: 3px solid transparent;
        }

        .category-item:hover,
        .category-item.active {
            background-color: #f8f9fa;
            border-left-color: #dc3545;
            padding-left: 15px;
        }

        .search-box {
            border-radius: 50px;
        }

        .sort-select {
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <!-- Include Navbar -->
    @include('layouts.navbar')

    <!-- Hero Section -->
    <section class="bg-primary text-white py-5" style="margin-top: 76px;">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-white mb-3">
                            <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Home</a>
                            </li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Products</li>
                        </ol>
                    </nav>
                    <h1 class="display-4 fw-bold mb-3">Our Product Collection</h1>
                    <p class="lead mb-0">Discover our wide range of premium ice cream products and supplies for your
                        business</p>
                </div>
                <div class="col-lg-4 text-end d-none d-lg-block">
                    <i class="bi bi-box-seam display-1 opacity-25"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Sidebar Filters -->
                <div class="col-lg-3 mb-4">
                    <div class="card border-0 shadow-sm filter-card">
                        <div class="card-body p-4">
                            <!-- Search -->
                            <div class="mb-4">
                                <h5 class="fw-bold mb-3">
                                    <i class="bi bi-search me-2 text-primary"></i>Search Products
                                </h5>
                                <form action="{{ route('products') }}" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control search-box" name="search"
                                            placeholder="Search products..." value="{{ request('search') }}">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <hr>

                            <!-- Categories -->
                            <div class="mb-4">
                                <h5 class="fw-bold mb-3">
                                    <i class="bi bi-tag me-2 text-primary"></i>Categories
                                </h5>
                                <form id="categoryForm" action="{{ route('products') }}" method="GET">
                                    <input type="hidden" name="search" value="{{ request('search') }}">
                                    <input type="hidden" name="sort" value="{{ request('sort') }}">
                                    <input type="hidden" name="order" value="{{ request('order') }}">

                                    <div class="list-group list-group-flush">
                                        <a href="{{ route('products') }}"
                                            class="list-group-item list-group-item-action border-0 category-item {{ request('category') == '' ? 'active' : '' }}">
                                            <i class="bi bi-grid me-2"></i>All Products
                                            <span
                                                class="badge bg-primary rounded-pill float-end">{{ \App\Models\Product::count() }}</span>
                                        </a>

                                        @foreach ($categories as $cat)
                                            <a href="?category={{ $cat }}&search={{ request('search') }}&sort={{ request('sort') }}&order={{ request('order') }}"
                                                class="list-group-item list-group-item-action border-0 category-item {{ request('category') == $cat ? 'active' : '' }}">
                                                <i class="bi bi-folder me-2"></i>{{ $cat }}
                                                <span
                                                    class="badge bg-secondary rounded-pill float-end">{{ \App\Models\Product::where('category', $cat)->count() }}</span>
                                            </a>
                                        @endforeach
                                    </div>
                                </form>
                            </div>

                            <hr>

                            <!-- Price Info -->
                            <div class="mb-3">
                                <h5 class="fw-bold mb-3">
                                    <i class="bi bi-cash-stack me-2 text-primary"></i>Price Range
                                </h5>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-muted">Minimum:</span>
                                    <span class="fw-bold">Rp
                                        {{ number_format(\App\Models\Product::min('price'), 0, ',', '.') }}</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Maximum:</span>
                                    <span class="fw-bold">Rp
                                        {{ number_format(\App\Models\Product::max('price'), 0, ',', '.') }}</span>
                                </div>
                            </div>

                            <hr>

                            <!-- Contact Card -->
                            <div class="bg-light rounded p-3 text-center">
                                <i class="bi bi-headset display-4 text-primary mb-2"></i>
                                <h6 class="fw-bold mb-2">Need Help?</h6>
                                <p class="small text-muted mb-3">Contact our sales team for bulk orders</p>
                                <a href="/contact" class="btn btn-primary btn-sm w-100">
                                    <i class="bi bi-telephone me-2"></i>Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="col-lg-9">
                    <!-- Toolbar -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <h5 class="mb-0 fw-bold">
                                        <i class="bi bi-box-seam me-2 text-primary"></i>
                                        {{ $products->total() }} Products Found
                                        @if (request('category'))
                                            <span class="badge bg-primary">{{ request('category') }}</span>
                                        @endif
                                    </h5>
                                </div>
                                <div class="col-md-6">
                                    <form action="{{ route('products') }}" method="GET" id="sortForm">
                                        <input type="hidden" name="category" value="{{ request('category') }}">
                                        <input type="hidden" name="search" value="{{ request('search') }}">

                                        <div class="row g-2">
                                            <div class="col-7">
                                                <select class="form-select sort-select" name="sort"
                                                    onchange="document.getElementById('sortForm').submit()">
                                                    <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>
                                                        Name</option>
                                                    <option value="price"
                                                        {{ request('sort') == 'price' ? 'selected' : '' }}>Price</option>
                                                    <option value="category"
                                                        {{ request('sort') == 'category' ? 'selected' : '' }}>Category
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-5">
                                                <select class="form-select sort-select" name="order"
                                                    onchange="document.getElementById('sortForm').submit()">
                                                    <option value="asc"
                                                        {{ request('order') == 'asc' ? 'selected' : '' }}>
                                                        <i class="bi bi-sort-up"></i>Ascending
                                                    </option>
                                                    <option value="desc"
                                                        {{ request('order') == 'desc' ? 'selected' : '' }}>
                                                        <i class="bi bi-sort-down"></i>Descending
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Products Grid -->
                    @if ($products->count() > 0)
                        <div class="row g-4 mb-4">
                            @foreach ($products as $product)
                                <div class="col-md-6 col-lg-4">
                                    <div class="card product-card shadow-sm h-100">
                                        <div class="product-image-wrapper">
                                            <!-- Category Badge -->
                                            <span class="badge bg-dark category-badge">{{ $product->category }}</span>

                                            <!-- Product Image -->
                                            @if ($product->image_path)
                                                <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}"
                                                    class="product-image">
                                            @else
                                                <div class="d-flex align-items-center justify-content-center h-100">
                                                    <i class="bi bi-image display-1 text-white opacity-50"></i>
                                                </div>
                                            @endif

                                            <!-- Quick View Button -->
                                            <div class="position-absolute bottom-0 end-0 p-3">
                                                <a href="{{ route('products.show', $product->id) }}"
                                                    class="btn btn-light btn-sm rounded-circle"
                                                    style="width: 40px; height: 40px;">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <h5 class="card-title fw-bold mb-2">{{ $product->name }}</h5>
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="price-tag">Rp
                                                    {{ number_format($product->price, 0, ',', '.') }}</span>
                                                <span class="badge bg-success">
                                                    <i class="bi bi-check-circle me-1"></i>In Stock
                                                </span>
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-primary">
                                                    <i class="bi bi-cart-plus me-2"></i>Add to Cart
                                                </button>
                                                <a href="{{ route('products.show', $product->id) }}"
                                                    class="btn btn-outline-primary">
                                                    <i class="bi bi-info-circle me-2"></i>View Details
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-center">
                            {{ $products->links('pagination::bootstrap-5') }}
                        </div>
                    @else
                        <!-- Empty State -->
                        <div class="card border-0 shadow-sm">
                            <div class="card-body text-center py-5">
                                <i class="bi bi-inbox display-1 text-muted mb-3"></i>
                                <h4 class="fw-bold mb-3">No Products Found</h4>
                                <p class="text-muted mb-4">We couldn't find any products matching your search criteria.
                                </p>
                                <a href="{{ route('products') }}" class="btn btn-primary">
                                    <i class="bi bi-arrow-left me-2"></i>View All Products
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-3">Looking for Bulk Orders?</h2>
                    <p class="lead mb-0">Contact our sales team for special pricing on large quantity orders</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="/contact" class="btn btn-light btn-lg">
                        <i class="bi bi-telephone me-2"></i>Contact Sales
                    </a>
                </div>
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
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">About Us</a></li>
                        <li class="mb-2"><a href="/contact" class="text-white-50 text-decoration-none">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Products</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="?category=Es Krim"
                                class="text-white-50 text-decoration-none">Ice Cream</a></li>
                        <li class="mb-2"><a href="?category=Bubuk Es Krim"
                                class="text-white-50 text-decoration-none">Ice Cream Powder</a></li>
                        <li class="mb-2"><a href="?category=Cone"
                                class="text-white-50 text-decoration-none">Cones & Cups</a></li>
                        <li class="mb-2"><a href="?category=Sendok"
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
</body>

</html>