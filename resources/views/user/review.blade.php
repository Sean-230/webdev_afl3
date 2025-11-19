@extends('layouts.app')

@section('title', 'Ulasan Pelanggan')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/review.css') }}">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="review-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <nav aria-label="breadcrumb" class="mb-3">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}" class="breadcrumb-link">Beranda</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Ulasan</li>
                        </ol>
                    </nav>
                    <h1 class="review-hero-title">Ulasan Pelanggan</h1>
                    <p class="review-hero-subtitle">
                        Lihat apa yang pelanggan kami katakan tentang produk dan layanan distribusi es krim kami.
                    </p>
                </div>
                <div class="col-lg-6">
                    <!-- Stats Grid -->
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="hero-stat-card">
                                <i class="bi bi-star-fill hero-stat-icon"></i>
                                <h5 class="hero-stat-title">
                                    {{ $totalReviews > 0 ? number_format($averageRating, 1) : 'N/A' }}
                                </h5>
                                <p class="hero-stat-subtitle">Rating Rata-rata</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="hero-stat-card hero-stat-card-secondary">
                                <i class="bi bi-chat-left-text-fill hero-stat-icon"></i>
                                <h5 class="hero-stat-title">{{ $totalReviews }}</h5>
                                <p class="hero-stat-subtitle">Total Ulasan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="review-section">
        <div class="container py-4">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-circle me-2"></i>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if ($reviews->count() > 0)
                <div class="row g-4">
                    @foreach ($reviews as $review)
                        <div class="col-lg-4 col-md-6">
                            <div class="review-card">
                                <!-- User Info -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="review-avatar me-3">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1 fw-bold review-author-name">
                                            {{ $review->user->name }}
                                            @auth
                                                @if ($review->user_id === Auth::id())
                                                    <span class="badge bg-info ms-2">Anda</span>
                                                @endif
                                            @endauth
                                        </h6>
                                        <small class="text-muted">{{ $review->created_at->format('d M Y') }}</small>
                                    </div>
                                </div>

                                <!-- Product Info -->
                                <div class="review-product-info mb-3">
                                    <a href="{{ route('products.show', $review->product->id) }}"
                                        class="text-decoration-none">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-box-seam me-2" style="color: #1C7FDD;"></i>
                                            <span class="review-product-name">{{ $review->product->name }}</span>
                                        </div>
                                    </a>
                                </div>

                                <!-- Rating Stars -->
                                <div class="review-rating mb-3">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="bi bi-star{{ $i <= $review->rating ? '-fill' : '' }}"
                                            style="color: #ffc107; font-size: 1.1rem;"></i>
                                    @endfor
                                </div>

                                <!-- Review Comment -->
                                <p class="review-comment mb-3">{{ $review->comment }}</p>

                                <!-- Action Buttons (if user owns this review) -->
                                @auth
                                    @if ($review->user_id === Auth::id())
                                        <div class="review-actions">
                                            <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                                data-bs-target="#editReviewModal{{ $review->id }}">
                                                <i class="bi bi-pencil me-1"></i>Edit
                                            </button>
                                            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('Hapus ulasan ini?')">
                                                    <i class="bi bi-trash me-1"></i>Hapus
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-5">
                    {{ $reviews->links('pagination::bootstrap-5') }}
                </div>
            @else
                <div class="text-center py-5">
                    <i class="bi bi-chat-left-text" style="font-size: 5rem; color: #1C7FDD; opacity: 0.3;"></i>
                    <h4 class="fw-bold mt-4" style="color: #173648;">Belum Ada Ulasan</h4>
                    <p class="text-muted">Jadilah yang pertama membagikan pengalaman Anda!</p>
                    <a href="{{ route('products') }}" class="btn btn-custom-primary mt-3">
                        <i class="bi bi-box-seam me-2"></i>Lihat Produk
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- Edit Review Modals -->
    @auth
        @foreach ($reviews as $review)
            @if ($review->user_id === Auth::id())
                <div class="modal fade" id="editReviewModal{{ $review->id }}" tabindex="-1"
                    aria-labelledby="editReviewModalLabel{{ $review->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editReviewModalLabel{{ $review->id }}">Edit Ulasan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('reviews.update', $review->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Rating</label>
                                        <div class="rating-input">
                                            @for ($i = 5; $i >= 1; $i--)
                                                <input type="radio" name="rating" value="{{ $i }}"
                                                    id="edit_star{{ $review->id }}_{{ $i }}"
                                                    {{ $review->rating == $i ? 'checked' : '' }} required>
                                                <label for="edit_star{{ $review->id }}_{{ $i }}">
                                                    <i class="bi bi-star-fill"></i>
                                                </label>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit_comment{{ $review->id }}" class="form-label fw-bold">Ulasan
                                            Anda</label>
                                        <textarea class="form-control" id="edit_comment{{ $review->id }}" name="comment" rows="4" required>{{ $review->comment }}</textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-custom-primary">
                                        <i class="bi bi-save me-2"></i>Simpan Perubahan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @endauth
@endsection
