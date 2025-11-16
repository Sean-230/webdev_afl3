@extends('layouts.app')

@section('title', 'Reviews')

@section('content')
<link rel="stylesheet" href="{{ asset('css/review.css') }}">

<section class="text-white py-5" style="background-color: var(--primary-dark);">
    <div class="container py-5">
        <h1 class="display-4 fw-bold mb-3">Customer Reviews</h1>
        <p class="lead mb-0">See what our customers say about our products</p>
    </div>
</section>

<section class="py-5" style="background-color: var(--accent-peach);">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm text-center p-4">
                    <h6 class="text-muted mb-2">OVERALL RATING</h6>
                    <div class="display-1 fw-bold mb-2" style="color: var(--primary-dark);">
                        {{ $totalReviews > 0 ? number_format($averageRating, 1) : 'N/A' }}
                    </div>
                    @if($totalReviews > 0)
                    <div class="mb-3">
                        @for($i = 1; $i <= 5; $i++)
                            <i class="bi bi-star{{ $i <= round($averageRating) ? '-fill' : '' }}" style="color: var(--accent-pink);"></i>
                        @endfor
                    </div>
                    <p class="text-muted mb-0">Based on {{ $totalReviews }} reviews</p>
                    @else
                    <p class="text-muted mb-0">No reviews yet</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <h2 class="fw-bold mb-4" style="color: var(--primary-dark);">All Reviews</h2>
        
        @if($reviews->count() > 0)
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($reviews as $review)
            <div class="col">
                <div class="card h-100 shadow-sm hover-card" style="transition: transform 0.2s, box-shadow 0.2s;">
                    <div class="card-body d-flex flex-column p-4">
                        <div class="text-center mb-3">
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <h5 class="fw-bold mb-0 me-2" style="color: var(--primary-dark);">
                                    {{ $review->user->name }}
                                </h5>
                                @auth
                                    @if($review->user_id === Auth::id())
                                        <span class="badge bg-info">You</span>
                                    @endif
                                @endauth
                            </div>
                            <div class="mb-2">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="bi bi-star{{ $i <= $review->rating ? '-fill' : '' }}" style="color: #ffc107; font-size: 1.2rem;"></i>
                                @endfor
                            </div>
                            <small class="text-muted">{{ $review->created_at->format('M d, Y') }}</small>
                        </div>
                        
                        <div class="mb-3">
                            <a href="{{ route('products.show', $review->product->id) }}" class="text-decoration-none">
                                <h6 class="fw-bold text-center mb-1" style="color: var(--primary-teal);">
                                    <i class="bi bi-box-seam me-1"></i>{{ $review->product->name }}
                                </h6>
                            </a>
                        </div>

                        <p class="text-muted flex-grow-1 mb-3" style="font-size: 0.95rem;">{{ $review->comment }}</p>

                        @auth
                            @if($review->user_id === Auth::id())
                            <div class="d-flex gap-2 mt-auto">
                                <button type="button" class="btn btn-sm btn-outline-primary flex-fill" data-bs-toggle="modal" data-bs-target="#editModal{{ $review->id }}">
                                    <i class="bi bi-pencil"></i> Edit
                                </button>
                                <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="flex-fill">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger w-100" onclick="return confirm('Delete this review?')">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>

            @auth
                @if($review->user_id === Auth::id())
                <div class="modal fade" id="editModal{{ $review->id }}" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Your Review</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <form action="{{ route('reviews.update', $review->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Rating</label>
                                        <div class="rating-input">
                                            @for($i = 5; $i >= 1; $i--)
                                                <input type="radio" name="rating" value="{{ $i }}" id="edit_star{{ $review->id }}_{{ $i }}" {{ $review->rating == $i ? 'checked' : '' }} required>
                                                <label for="edit_star{{ $review->id }}_{{ $i }}"><i class="bi bi-star-fill"></i></label>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Your Review</label>
                                        <textarea class="form-control" name="comment" rows="4" required>{{ $review->comment }}</textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-custom-pink">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
            @endauth
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-5">
            <nav aria-label="Reviews pagination">
                {{ $reviews->links('pagination::bootstrap-5') }}
            </nav>
        </div>
        @else
        <div class="text-center py-5">
            <i class="bi bi-chat-left-text" style="font-size: 5rem; opacity: 0.3;"></i>
            <h4 class="fw-bold mt-4">No Reviews Yet</h4>
            <p class="text-muted">Be the first to share your experience!</p>
            <a href="/products" class="btn btn-custom-pink">Browse Products</a>
        </div>
        @endif
    </div>
</section>
@endsection
