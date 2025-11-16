@extends('layouts.app')

@section('title', 'My Orders')

@section('content')
<div class="container py-5">
    <h1 class="fw-bold mb-4" style="color: var(--primary-dark);">My Orders</h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @forelse($orders as $order)
        <div class="card border-0 shadow-sm mb-3">
            <div class="card-header d-flex justify-content-between align-items-center" style="background-color: var(--primary-dark); color: white;">
                <div>
                    <h5 class="mb-0">Order #{{ $order->id }}</h5>
                    <small>{{ $order->created_at->format('M d, Y - H:i') }}</small>
                </div>
                <div>
                    @if($order->status == 'pending')
                        <span class="badge bg-warning">Pending</span>
                    @elseif($order->status == 'confirmed')
                        <span class="badge bg-info">Confirmed</span>
                    @elseif($order->status == 'processing')
                        <span class="badge bg-primary">Processing</span>
                    @elseif($order->status == 'completed')
                        <span class="badge bg-success">Completed</span>
                    @else
                        <span class="badge bg-danger">Cancelled</span>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <h6 class="fw-bold mb-3">Order Items:</h6>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->items as $item)
                                    <tr>
                                        <td>{{ $item->product->name }}</td>
                                        <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>Rp {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 bg-light rounded">
                            <h6 class="fw-bold">Order Summary</h6>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Total Amount:</span>
                                <strong style="color: var(--primary-teal);">Rp {{ number_format($order->total_amount, 0, ',', '.') }}</strong>
                            </div>
                            @if($order->notes)
                                <hr>
                                <small class="text-muted">
                                    <strong>Notes:</strong><br>
                                    {{ $order->notes }}
                                </small>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="text-center py-5">
            <i class="bi bi-inbox display-1 text-muted"></i>
            <h4 class="mt-3 text-muted">No orders yet</h4>
            <p class="text-muted">Start shopping to place your first order!</p>
            <a href="/products" class="btn btn-custom-pink">Browse Products</a>
        </div>
    @endforelse

    @if($orders->hasPages())
        <div class="mt-4">
            {{ $orders->links() }}
        </div>
    @endif
</div>
@endsection
