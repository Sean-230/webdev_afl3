@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container py-5" style="margin-top: 76px;">
    <h1 class="fw-bold mb-4" style="color: var(--primary-dark);">Admin Dashboard</h1>
    
    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <i class="bi bi-box-seam display-4 mb-3" style="color: var(--primary-teal);"></i>
                    <h3 class="fw-bold mb-1">{{ $totalProducts }}</h3>
                    <p class="text-muted mb-0">Total Products</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <i class="bi bi-exclamation-triangle display-4 mb-3" style="color: #ffc107;"></i>
                    <h3 class="fw-bold mb-1">{{ $lowStockProducts }}</h3>
                    <p class="text-muted mb-0">Low Stock (&lt;50)</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <i class="bi bi-x-circle display-4 mb-3" style="color: #dc3545;"></i>
                    <h3 class="fw-bold mb-1">{{ $outOfStock }}</h3>
                    <p class="text-muted mb-0">Out of Stock</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <i class="bi bi-receipt display-4 mb-3" style="color: var(--accent-pink);"></i>
                    <h3 class="fw-bold mb-1">{{ $totalOrders }}</h3>
                    <p class="text-muted mb-0">Total Orders</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-4">Quick Actions</h5>
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.warehouse') }}" class="btn btn-outline-primary">
                            <i class="bi bi-building me-2"></i>Manage Warehouse
                        </a>
                        <a href="{{ route('admin.orders') }}" class="btn btn-outline-success">
                            <i class="bi bi-clipboard-check me-2"></i>View Orders
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-4">Admin Info</h5>
                    <p><strong>Logged in as:</strong> {{ Auth::user()->name }}</p>
                    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                    <p class="mb-0"><strong>Role:</strong> <span class="badge bg-danger">Administrator</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
