@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">

<!-- Cart Section -->
<section class="py-5">
    <div class="container">
        <h1 class="fw-bold mb-4" style="color: var(--primary-dark);">Shopping Cart</h1>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($cartItems->count() > 0)
        <div class="row g-4">
            <!-- Cart Items -->
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        @foreach($cartItems as $item)
                        <div class="row g-3 align-items-center border-bottom pb-3 mb-3">
                            <!-- Product Image -->
                            <div class="col-md-2">
                                @if($item->product->image_path && file_exists(public_path($item->product->image_path)))
                                    <img src="{{ asset($item->product->image_path) }}" alt="{{ $item->product->name }}" class="img-fluid rounded" style="max-height: 100px; object-fit: cover;">
                                @else
                                    <div class="d-flex align-items-center justify-content-center rounded" style="height: 100px; background-color: var(--accent-peach);">
                                        <i class="bi bi-snow3" style="font-size: 2rem; color: var(--primary-teal);"></i>
                                    </div>
                                @endif
                            </div>

                            <!-- Product Info -->
                            <div class="col-md-4">
                                <h5 class="fw-bold mb-1" style="color: var(--primary-dark);">
                                    <a href="{{ route('products.show', $item->product->id) }}" class="text-decoration-none" style="color: var(--primary-dark);">
                                        {{ $item->product->name }}
                                    </a>
                                </h5>
                                <p class="text-muted small mb-0">
                                    @if($item->product->stock > 0)
                                        <span class="text-success"><i class="bi bi-check-circle"></i> In Stock</span>
                                    @else
                                        <span class="text-danger"><i class="bi bi-x-circle"></i> Out of Stock</span>
                                    @endif
                                </p>
                            </div>

                            <!-- Price -->
                            <div class="col-md-2">
                                <p class="fw-bold mb-0" style="color: var(--primary-teal);">
                                    Rp {{ number_format($item->price, 0, ',', '.') }}
                                </p>
                            </div>

                            <!-- Quantity -->
                            <div class="col-md-2">
                                <form action="{{ route('cart.update', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group input-group-sm">
                                        <input type="number" class="form-control" name="quantity" value="{{ $item->quantity }}" min="1" max="100" onchange="this.form.submit()">
                                    </div>
                                </form>
                            </div>

                            <!-- Subtotal & Remove -->
                            <div class="col-md-2 text-end">
                                <p class="fw-bold mb-2" style="color: var(--primary-dark);">
                                    Rp {{ number_format($item->price * $item->quantity, 0, ',', '.') }}
                                </p>
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Remove this item from cart?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endforeach

                        <!-- Clear Cart -->
                        <div class="text-end mt-3">
                            <form action="{{ route('cart.clear') }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Clear all items from cart?')">
                                    <i class="bi bi-trash me-2"></i>Clear Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-bold mb-4" style="color: var(--primary-dark);">Order Summary</h5>
                        
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Subtotal</span>
                            <span class="fw-bold">Rp {{ number_format($total, 0, ',', '.') }}</span>
                        </div>
                        
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Shipping</span>
                            <span class="text-muted">Calculated at checkout</span>
                        </div>
                        
                        <hr>
                        
                        <div class="d-flex justify-content-between mb-4">
                            <span class="fw-bold" style="color: var(--primary-dark);">Total</span>
                            <span class="fw-bold fs-4" style="color: var(--primary-teal);">Rp {{ number_format($total, 0, ',', '.') }}</span>
                        </div>

                        <form action="{{ route('orders.checkout') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label small text-muted">Order Notes (Optional)</label>
                                <textarea class="form-control form-control-sm" name="notes" rows="2" placeholder="Special instructions..."></textarea>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-custom-pink btn-lg">
                                    <i class="bi bi-credit-card me-2"></i>Proceed to Checkout
                                </button>
                                <a href="/products" class="btn btn-outline-secondary">
                                    <i class="bi bi-arrow-left me-2"></i>Continue Shopping
                                </a>
                            </div>
                        </form>

                        <!-- Payment Info -->
                        <div class="mt-4 p-3 rounded" style="background-color: #f8f9fa;">
                            <p class="small text-muted mb-0">
                                <i class="bi bi-shield-check me-2" style="color: var(--primary-teal);"></i>
                                Secure checkout with SSL encryption
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <!-- Empty Cart -->
        <div class="text-center py-5">
            <i class="bi bi-cart-x" style="font-size: 5rem; color: var(--primary-teal);"></i>
            <h3 class="fw-bold mt-4 mb-3" style="color: var(--primary-dark);">Your cart is empty</h3>
            <p class="text-muted mb-4">Add some delicious ice cream products to your cart!</p>
            <a href="/products" class="btn btn-custom-pink btn-lg">
                <i class="bi bi-shop me-2"></i>Browse Products
            </a>
        </div>
        @endif
    </div>
</section>
@endsection
