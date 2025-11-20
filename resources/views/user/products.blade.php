<!-- filepath: resources/views/user/products.blade.php -->
@extends('layouts.app')

@section('title', 'Produk')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="products-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <nav aria-label="breadcrumb" class="mb-3">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}" class="breadcrumb-link">Beranda</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Produk</li>
                        </ol>
                    </nav>
                    <h1 class="products-hero-title">Koleksi Produk Kami</h1>
                    <p class="products-hero-subtitle">
                        Temukan berbagai pilihan produk es krim premium dan perlengkapan untuk bisnis Anda
                    </p>
                </div>
                <div class="col-lg-6">
                    <!-- Stats Grid - ONLY 2 CARDS -->
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="hero-stat-card">
                                <i class="bi bi-box-seam hero-stat-icon"></i>
                                <h5 class="hero-stat-title">{{ \App\Models\Product::count() }}</h5>
                                <p class="hero-stat-subtitle">Total Produk</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="hero-stat-card hero-stat-card-secondary">
                                <i class="bi bi-tags-fill hero-stat-icon"></i>
                                <h5 class="hero-stat-title">{{ \App\Models\Category::count() }}</h5>
                                <p class="hero-stat-subtitle">Kategori</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products-section">
        <div class="container">
            <div class="row">
                <!-- Sidebar Filters -->
                <div class="col-lg-3 mb-4">
                    <div class="filter-card">
                        <div class="filter-header">
                            <i class="bi bi-funnel me-2"></i>Filter Produk
                        </div>
                        <div class="filter-body">
                            <!-- Search -->
                            <div class="filter-group">
                                <h6 class="filter-title">
                                    <i class="bi bi-search me-2"></i>Cari Produk
                                </h6>
                                <form action="{{ route('products') }}" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control search-input" name="search"
                                            placeholder="Cari produk..." value="{{ request('search') }}">
                                        <button class="btn btn-search" type="submit">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div class="filter-divider"></div>

                            <!-- Categories -->
                            <div class="filter-group">
                                <h6 class="filter-title">
                                    <i class="bi bi-tag me-2"></i>Kategori
                                </h6>
                                <form id="categoryForm" action="{{ route('products') }}" method="GET">
                                    <input type="hidden" name="search" value="{{ request('search') }}">
                                    <input type="hidden" name="sort" value="{{ request('sort') }}">
                                    <input type="hidden" name="order" value="{{ request('order') }}">

                                    <div class="category-list">
                                        <a href="{{ route('products') }}"
                                            class="category-item {{ request('category') == '' ? 'active' : '' }}">
                                            <span>
                                                <i class="bi bi-grid me-2"></i>Semua Produk
                                            </span>
                                            <span class="category-count">
                                                {{ \App\Models\Product::count() }}
                                            </span>
                                        </a>

                                        @foreach (\App\Models\Category::withCount('products')->get() as $cat)
                                            <a href="{{ route('products', ['category' => $cat->name]) }}"
                                                class="category-item {{ request('category') == $cat->name ? 'active' : '' }}">
                                                <span>
                                                    <i class="bi bi-tag me-2"></i>{{ $cat->name }}
                                                </span>
                                                <span class="category-count">
                                                    {{ $cat->products_count }}
                                                </span>
                                            </a>
                                        @endforeach
                                    </div>
                                </form>
                            </div>

                            <div class="filter-divider"></div>

                            <!-- Price Range Info -->
                            <div class="filter-group">
                                <h6 class="filter-title">
                                    <i class="bi bi-cash-stack me-2"></i>Rentang Harga
                                </h6>
                                <div class="price-range-info">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted small">Minimum:</span>
                                        <span class="fw-bold">Rp
                                            {{ number_format(\App\Models\Product::min('price'), 0, ',', '.') }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-muted small">Maksimum:</span>
                                        <span class="fw-bold">Rp
                                            {{ number_format(\App\Models\Product::max('price'), 0, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="filter-divider"></div>

                            <!-- Contact Card -->
                            <div class="contact-card">
                                <i class="bi bi-headset contact-icon"></i>
                                <h6 class="contact-title">Butuh Bantuan?</h6>
                                <p class="contact-text">Hubungi tim sales kami untuk pemesanan dalam jumlah besar</p>
                                <a href="/contact" class="btn btn-contact w-100">
                                    <i class="bi bi-telephone me-2"></i>Hubungi Kami
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="col-lg-9">
                    <!-- Toolbar -->
                    <div class="products-toolbar">
                        <div class="row align-items-center">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <h5 class="products-count">
                                    <i class="bi bi-box-seam me-2"></i>
                                    {{ $products->total() }} Produk Ditemukan
                                    @if (request('category'))
                                        <span class="category-badge-toolbar">
                                            {{ request('category') }}
                                        </span>
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
                                                    Nama Produk
                                                </option>
                                                <option value="price" {{ request('sort') == 'price' ? 'selected' : '' }}>
                                                    Harga
                                                </option>
                                                <option value="stock" {{ request('sort') == 'stock' ? 'selected' : '' }}>
                                                    Stok
                                                </option>
                                                <option value="created_at"
                                                    {{ request('sort') == 'created_at' ? 'selected' : '' }}>
                                                    Terbaru
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select sort-select" name="order"
                                                onchange="document.getElementById('sortForm').submit()">
                                                <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>
                                                    <i class="bi bi-sort-up"></i> A-Z / Rendah-Tinggi
                                                </option>
                                                <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>
                                                    <i class="bi bi-sort-down"></i> Z-A / Tinggi-Rendah
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Products Grid -->
                    @if ($products->count() > 0)
                        <div class="row g-4">
                            @foreach ($products as $product)
                                <div class="col-md-6 col-lg-4">
                                    <a href="{{ route('products.show', $product->id) }}" class="text-decoration-none">
                                        <div class="product-card">
                                            <div class="product-image-wrapper">
                                                @if ($product->image_path && file_exists(public_path($product->image_path)))
                                                    <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}"
                                                        class="product-image">
                                                @else
                                                    <div class="product-image-placeholder">
                                                        <i class="bi bi-cup-straw"></i>
                                                    </div>
                                                @endif

                                                @if ($product->stock <= 10 && $product->stock > 0)
                                                    <span class="product-badge badge-warning">
                                                        <i class="bi bi-exclamation-triangle me-1"></i>Stok Terbatas
                                                    </span>
                                                @elseif($product->stock == 0)
                                                    <span class="product-badge badge-danger">
                                                        <i class="bi bi-x-circle me-1"></i>Habis
                                                    </span>
                                                @else
                                                    <span class="product-badge badge-success">
                                                        <i class="bi bi-check-circle me-1"></i>Tersedia
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="product-body">
                                                <!-- Categories -->
                                                <div class="product-categories mb-2">
                                                    @foreach ($product->categories->take(2) as $category)
                                                        <span class="category-tag">{{ $category->name }}</span>
                                                    @endforeach
                                                </div>

                                                <h5 class="product-title">{{ $product->name }}</h5>

                                                <p class="product-description">
                                                    {{ Str::limit($product->description, 60) }}
                                                </p>

                                                <div class="product-footer">
                                                    <div class="product-price-wrapper">
                                                        <span class="product-price">
                                                            Rp {{ number_format($product->price, 0, ',', '.') }}
                                                        </span>
                                                        <span class="product-stock">
                                                            <i class="bi bi-box me-1"></i>Stok: {{ $product->stock }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-center mt-5">
                            {{ $products->links('pagination::bootstrap-5') }}
                        </div>
                    @else
                        <div class="empty-state">
                            <i class="bi bi-inbox empty-icon"></i>
                            <h4 class="empty-title">Tidak Ada Produk Ditemukan</h4>
                            <p class="empty-text">
                                @if (request('search'))
                                    Maaf, tidak ada produk yang cocok dengan pencarian "{{ request('search') }}".
                                @elseif(request('category'))
                                    Tidak ada produk dalam kategori "{{ request('category') }}".
                                @else
                                    Belum ada produk tersedia saat ini.
                                @endif
                            </p>
                            <a href="{{ route('products') }}" class="btn btn-primary">
                                <i class="bi bi-arrow-left me-2"></i>Kembali ke Semua Produk
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
