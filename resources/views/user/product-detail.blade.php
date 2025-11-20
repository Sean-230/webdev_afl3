@extends('layouts.app')

@section('title', $product->name)

@section('content')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
<link rel="stylesheet" href="{{ asset('css/review.css') }}">

<!-- Product Detail Section -->
<section class="py-5">
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-circle me-2"></i>{{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" style="color: var(--primary-teal);">Home</a></li>
                <li class="breadcrumb-item"><a href="/products" style="color: var(--primary-teal);">Products</a></li>
                <li class="breadcrumb-item active">{{ $product->name }}</li>
            </ol>
        </nav>

        <div class="row g-5">
            <!-- Product Image -->
            <div class="col-md-6">
                <div class="product-detail-image bg-white rounded shadow-sm p-4">
                    @if($product->image_path && file_exists(public_path($product->image_path)))
                        <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" class="w-100 rounded" style="max-height: 500px; object-fit: cover;">
                    @else
                        <div class="d-flex align-items-center justify-content-center" style="height: 500px; background-color: var(--accent-peach);">
                            <i class="bi bi-snow3" style="font-size: 8rem; color: var(--primary-teal);"></i>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Product Info -->
            <div class="col-md-6">
                <div class="product-info">
                    <h1 class="fw-bold mb-3" style="color: var(--primary-dark);">{{ $product->name }}</h1>
                    
                    <!-- Categories -->
                    <div class="mb-3">
                        @foreach($product->categories as $category)
                            <span class="badge bg-secondary me-2">{{ $category->name }}</span>
                        @endforeach
                    </div>

                    <!-- Stock Availability -->
                    <p class="text-muted mb-3">
                        <i class="bi bi-box-seam me-2"></i>
                        @if($product->stock > 0)
                            <span class="text-success">{{ $product->stock }} units in stock</span>
                        @else
                            <span class="text-danger">Out of stock</span>
                        @endif
                    </p>

                    <!-- Price -->
                    <div class="mb-4">
                        <h2 class="fw-bold" style="color: var(--primary-teal);">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </h2>
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <h5 class="fw-bold mb-3" style="color: var(--primary-dark);">Product Description</h5>
                        <p class="text-muted">{{ $product->description }}</p>
                    </div>

                    <!-- Add to Cart Form -->
                    @auth
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="quantity" class="form-label fw-bold">Quantity</label>
                                <div class="input-group">
                                    <button type="button" class="btn btn-outline-secondary" onclick="decrementQuantity()">
                                        <i class="bi bi-dash"></i>
                                    </button>
                                    <input type="number" class="form-control text-center" id="quantity" name="quantity" value="1" min="1" max="100" readonly>
                                    <button type="button" class="btn btn-outline-secondary" onclick="incrementQuantity()">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-lg" style="background-color: #1C7FDD; color: white; font-weight: 600;">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                        </div>
                    </form>
                    @else
                    <div class="alert alert-info">
                        <i class="bi bi-info-circle me-2"></i>
                        Please <a href="/login" class="alert-link">login</a> to add items to your cart.
                    </div>
                    @endauth
                </div>
            </div>
        </div>
        
        <script>
        function incrementQuantity() {
            const input = document.getElementById('quantity');
            const max = parseInt(input.max);
            const current = parseInt(input.value);
            if (current < max) {
                input.value = current + 1;
            }
        }
        
        function decrementQuantity() {
            const input = document.getElementById('quantity');
            const min = parseInt(input.min);
            const current = parseInt(input.value);
            if (current > min) {
                input.value = current - 1;
            }
        }
        </script>

        <!-- Reviews Section -->
        <div class="mt-5 pt-5 border-top">
            <h3 class="fw-bold mb-4" style="color: var(--primary-dark);">Customer Reviews</h3>
            
            <!-- Add Review Form (for logged in users who haven't reviewed) -->
            @auth
                @php
                    $userHasReviewed = $product->reviews->where('user_id', Auth::id())->count() > 0;
                @endphp
                
                @if(!$userHasReviewed)
                <div class="mb-5 p-4 rounded" style="background-color: #f8f9fa;">
                    <h5 class="fw-bold mb-3" style="color: var(--primary-dark);">Write a Review</h5>
                    <form action="{{ route('reviews.store', $product->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold">Rating</label>
                            <div class="rating-input">
                                @for($i = 5; $i >= 1; $i--)
                                    <input type="radio" name="rating" value="{{ $i }}" id="star{{ $i }}" required>
                                    <label for="star{{ $i }}"><i class="bi bi-star-fill"></i></label>
                                @endfor
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label fw-bold">Your Review</label>
                            <textarea class="form-control" id="comment" name="comment" rows="4" required placeholder="Share your experience with this product..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-custom-pink">
                            <i class="bi bi-send me-2"></i>Submit Review
                        </button>
                    </form>
                </div>
                @endif
            @else
            <div class="alert alert-info mb-4">
                <i class="bi bi-info-circle me-2"></i>
                Please <a href="/login" class="alert-link">login</a> to write a review.
            </div>
            @endauth
            
            @if($product->reviews->count() > 0)
                <!-- Reviews Summary -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card shadow-sm text-center p-4">
                            <h2 class="fw-bold mb-2" style="color: var(--primary-teal);">
                                {{ number_format($product->reviews->avg('rating'), 1) }}
                            </h2>
                            <div class="mb-2">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= round($product->reviews->avg('rating')))
                                        <i class="bi bi-star-fill text-warning"></i>
                                    @else
                                        <i class="bi bi-star text-warning"></i>
                                    @endif
                                @endfor
                            </div>
                            <p class="text-muted mb-0">Based on {{ $product->reviews->count() }} reviews</p>
                        </div>
                    </div>
                </div>

                <!-- Individual Reviews -->
                <div class="row g-4">
                    @foreach($product->reviews->sortByDesc(function($review) {
                        return $review->user_id === Auth::id() ? 1 : 0;
                    }) as $review)
                    <div class="col-12">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div>
                                        <h6 class="fw-bold mb-1" style="color: var(--primary-dark);">
                                            {{ $review->user->name }}
                                            @auth
                                                @if($review->user_id === Auth::id())
                                                    <span class="badge bg-info ms-2">You</span>
                                                @endif
                                            @endauth
                                        </h6>
                                        <div class="mb-2">
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <= $review->rating)
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                @else
                                                    <i class="bi bi-star text-warning"></i>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <small class="text-muted">{{ $review->created_at->diffForHumans() }}</small>
                                        @auth
                                            @if($review->user_id === Auth::id())
                                                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editReviewModal{{ $review->id }}">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this review?')">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            @endif
                                        @endauth
                                    </div>
                                </div>
                                <p class="mb-0 text-muted">{{ $review->comment }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Review Modal -->
                    @auth
                        @if($review->user_id === Auth::id())
                        <div class="modal fade" id="editReviewModal{{ $review->id }}" tabindex="-1">
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
                                                <label for="edit_comment{{ $review->id }}" class="form-label fw-bold">Your Review</label>
                                                <textarea class="form-control" id="edit_comment{{ $review->id }}" name="comment" rows="4" required>{{ $review->comment }}</textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-custom-pink">
                                                <i class="bi bi-save me-2"></i>Save Changes
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endauth
                    @endforeach
                </div>
            @else
                <div class="text-center py-5">
                    <i class="bi bi-chat-left-text" style="font-size: 4rem; color: var(--primary-teal); opacity: 0.3;"></i>
                    <p class="text-muted mt-3">No reviews yet. Be the first to review this product!</p>
                </div>
            @endif
        </div>

        <!-- Related Products -->
        @if($relatedProducts->count() > 0)
        <div class="mt-5 pt-5 border-top">
            <h3 class="fw-bold mb-4" style="color: var(--primary-dark);">Related Products</h3>
            <div class="row g-4">
                @foreach($relatedProducts as $related)
                <div class="col-md-6 col-lg-3">
                    <div class="product-card shadow-sm">
                        <div class="product-image-wrapper" style="background-color: var(--accent-peach);">
                            @if($related->image_path && file_exists(public_path($related->image_path)))
                                <img src="{{ asset($related->image_path) }}" alt="{{ $related->name }}" class="w-100 h-100" style="object-fit: cover;">
                            @else
                                <i class="bi bi-snow3" style="font-size: 5rem; color: var(--primary-teal);"></i>
                            @endif
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold mb-2" style="color: var(--primary-dark);">{{ $related->name }}</h5>
                            <p class="text-muted small mb-3">{{ Str::limit($related->description, 50) }}</p>
                            <div class="mb-3">
                                <span class="fs-4 fw-bold" style="color: var(--primary-teal);">
                                    Rp {{ number_format($related->price, 0, ',', '.') }}
                                </span>
                            </div>
                            <a href="{{ route('products.show', $related->id) }}" class="btn btn-custom-pink w-100">
                                <i class="bi bi-eye me-2"></i>View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@endsection
