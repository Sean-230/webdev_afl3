<!-- filepath: resources/views/user/home.blade.php -->
@extends('layouts.app')

@section('title', 'Beranda')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" style="background-color: #173648; padding: 140px 0 100px; margin-top: 76px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="display-3 fw-bold mb-4 text-white lh-sm">Depo <br> Es Krim </h1>
                    <p class="fs-5 mb-5 text-white opacity-90 lh-lg">
                        Menyediakan es krim, bahan, dan perlengkapan. Melayani sepenuh hati dengan produk-produk berkualitas untuk kesuksesan bisnis Anda.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="/products" class="btn btn-lg px-5 py-3 fw-semibold"
                            style="background-color: #1C7FDD; color: white; border-radius: 10px; transition: all 0.3s ease;"
                            onmouseover="this.style.backgroundColor='#0FB7D4'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 20px rgba(28, 127, 221, 0.4)';"
                            onmouseout="this.style.backgroundColor='#1C7FDD'; this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                            <i class="bi bi-grid-3x3-gap me-2"></i>Jelajahi Produk
                        </a>
                        <a href="/contact" class="btn btn-lg px-5 py-3 fw-semibold"
                            style="background-color: transparent; color: white; border: 2px solid white; border-radius: 10px; transition: all 0.3s ease;"
                            onmouseover="this.style.backgroundColor='white'; this.style.color='#173648';"
                            onmouseout="this.style.backgroundColor='transparent'; this.style.color='white';">
                            <i class="bi bi-telephone me-2"></i>Hubungi Kami
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Stats Grid -->
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="p-4 rounded-3 text-center" style="background-color: rgba(28, 127, 221, 0.2);">
                                <h2 class="display-4 fw-bold text-white mb-2">500+</h2>
                                <p class="text-white mb-0 opacity-90">Partner Aktif</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-4 rounded-3 text-center" style="background-color: rgba(15, 183, 212, 0.2);">
                                <h2 class="display-4 fw-bold text-white mb-2">15+</h2>
                                <p class="text-white mb-0 opacity-90">Kota</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-4 rounded-3 text-center" style="background-color: rgba(15, 183, 212, 0.2);">
                                <h2 class="display-4 fw-bold text-white mb-2">50+</h2>
                                <p class="text-white mb-0 opacity-90">Lini Produk</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-4 rounded-3 text-center" style="background-color: rgba(28, 127, 221, 0.2);">
                                <h2 class="display-4 fw-bold text-white mb-2">10K+</h2>
                                <p class="text-white mb-0 opacity-90">Pengiriman</p>
                            </div>
                        </div>
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
                    <h2 class="display-5 fw-bold mb-3" style="color: #173648;">Produk Unggulan</h2>
                    <p class="text-muted fs-5">Jelajahi pilihan produk es krim premium kami</p>
                </div>
            </div>

            <div class="row g-4 mb-5">
                @foreach ($products as $product)
                    <div class="col-md-6 col-lg-3">
                        <a href="{{ route('products.show', $product->id) }}" class="text-decoration-none">
                            <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; transition: all 0.3s ease; cursor: pointer;"
                                onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.15)';"
                                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 10px rgba(0,0,0,0.1)';">
                                <div class="position-relative overflow-hidden"
                                    style="height: 250px; border-radius: 15px 15px 0 0;">
                                    @if ($product->image_path && file_exists(public_path($product->image_path)))
                                        <img src="{{ asset($product->image_path) }}" class="w-100 h-100"
                                            alt="{{ $product->name }}" style="object-fit: cover;">
                                    @else
                                        <div class="w-100 h-100 d-flex align-items-center justify-content-center"
                                            style="background-color: rgba(28, 127, 221, 0.1);">
                                            <i class="bi bi-cup-straw" style="font-size: 4rem; color: #1C7FDD;"></i>
                                        </div>
                                    @endif
                                    @if ($product->stock <= 10 && $product->stock > 0)
                                        <span class="badge position-absolute top-0 end-0 m-3"
                                            style="background-color: #dc3545;">Stok Terbatas</span>
                                    @elseif($product->stock == 0)
                                        <span class="badge position-absolute top-0 end-0 m-3"
                                            style="background-color: #6c757d;">Habis</span>
                                    @endif
                                </div>
                                <div class="card-body p-4">
                                    <h5 class="fw-bold mb-2" style="color: #173648;">{{ $product->name }}</h5>
                                    <p class="text-muted small mb-3" style="height: 40px; overflow: hidden;">
                                        {{ Str::limit($product->description, 60) }}
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fw-bold fs-5" style="color: #1C7FDD;">
                                            Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </span>
                                        <span class="text-muted small">Stok: {{ $product->stock }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="/products" class="btn btn-lg px-5 py-3 fw-semibold"
                    style="background-color: #1C7FDD; color: white; border-radius: 10px; transition: all 0.3s ease;"
                    onmouseover="this.style.backgroundColor='#0FB7D4'; this.style.transform='translateY(-2px)';"
                    onmouseout="this.style.backgroundColor='#1C7FDD'; this.style.transform='translateY(0)';">
                    Lihat Semua Produk <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-3" style="color: #173648;">Ulasan Pelanggan</h2>
                    <p class="text-muted fs-5">Dengarkan dari bisnis yang mempercayai kami untuk kebutuhan es krim
                        mereka</p>
                </div>
            </div>

            <div class="row g-4 mb-4">
                @php
                    $reviews = \App\Models\Review::with(['user', 'product'])
                        ->where('rating', '>=', 4)
                        ->inRandomOrder()
                        ->limit(3)
                        ->get();
                @endphp

                @if ($reviews->count() > 0)
                    @foreach ($reviews as $review)
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm p-4" style="border-radius: 15px;">
                                <div class="mb-3">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="bi bi-star{{ $i <= $review->rating ? '-fill' : '' }}"
                                            style="color: #0FB7D4;"></i>
                                    @endfor
                                </div>
                                <p class="text-muted mb-4 fst-italic">"{{ $review->comment }}"</p>
                                <div class="d-flex align-items-center mt-auto">
                                    <div class="me-3">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 50px; height: 50px; background-color: rgba(28, 127, 221, 0.1);">
                                            <i class="bi bi-person-fill fs-4" style="color: #0A5A99;"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 fw-bold" style="color: #173648;">{{ $review->user->name }}
                                        </h6>
                                        <small class="text-muted">{{ $review->product->name }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center py-5">
                        <i class="bi bi-chat-left-text" style="font-size: 4rem; color: #1C7FDD; opacity: 0.3;"></i>
                        <h5 class="fw-bold mt-3" style="color: #173648;">Belum Ada Ulasan</h5>
                        <p class="text-muted">Jadilah yang pertama membagikan pengalaman Anda!</p>
                    </div>
                @endif
            </div>

            @if ($reviews->count() > 0)
                <div class="text-center">
                    <a href="{{ route('review') }}" class="btn btn-lg px-5 py-3 fw-semibold"
                        style="background-color: #1C7FDD; color: white; border-radius: 10px; transition: all 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#0FB7D4'; this.style.transform='translateY(-2px)';"
                        onmouseout="this.style.backgroundColor='#1C7FDD'; this.style.transform='translateY(0)';">
                        Lihat Semua Ulasan <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            @endif
        </div>
    </section>
@endsection

@push('scripts')
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
@endpush
