<!-- filepath: resources/views/admin/dashboard.blade.php -->
@extends('layouts.app')

@section('title', 'Admin Dashboard')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endpush

@section('content')
<div class="admin-dashboard">
    <!-- Header Section -->
    <div class="dashboard-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="dashboard-title">
                        <i class="bi bi-speedometer2 me-2"></i>Admin Dashboard
                    </h1>
                    <p class="dashboard-subtitle mb-0">Welcome back, {{ Auth::user()->name }}</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="d-flex gap-2 justify-content-md-end justify-content-start mt-3 mt-md-0">
                        <a href="{{ route('admin.warehouse') }}" class="btn btn-primary">
                            <i class="bi bi-building me-2"></i>Warehouse
                        </a>
                        <a href="{{ route('admin.orders') }}" class="btn btn-outline-primary">
                            <i class="bi bi-clipboard-check me-2"></i>Orders
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Statistics Cards -->
        <div class="row g-4 mb-4">
            <div class="col-xl-3 col-md-6">
                <div class="stat-card stat-card-primary">
                    <div class="stat-card-body">
                        <div class="stat-icon">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <div class="stat-details">
                            <h3 class="stat-value">{{ $totalProducts }}</h3>
                            <p class="stat-label">Total Products</p>
                        </div>
                    </div>
                    <div class="stat-card-footer">
                        <span class="text-success"><i class="bi bi-check-circle me-1"></i>{{ $activeProducts }} Active</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stat-card stat-card-warning">
                    <div class="stat-card-body">
                        <div class="stat-icon">
                            <i class="bi bi-exclamation-triangle"></i>
                        </div>
                        <div class="stat-details">
                            <h3 class="stat-value">{{ $lowStockProducts }}</h3>
                            <p class="stat-label">Low Stock Items</p>
                        </div>
                    </div>
                    <div class="stat-card-footer">
                        <span class="text-muted">Below 50 units</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stat-card stat-card-danger">
                    <div class="stat-card-body">
                        <div class="stat-icon">
                            <i class="bi bi-x-circle"></i>
                        </div>
                        <div class="stat-details">
                            <h3 class="stat-value">{{ $outOfStock }}</h3>
                            <p class="stat-label">Out of Stock</p>
                        </div>
                    </div>
                    <div class="stat-card-footer">
                        <span class="text-danger"><i class="bi bi-arrow-down me-1"></i>Requires attention</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stat-card stat-card-info">
                    <div class="stat-card-body">
                        <div class="stat-icon">
                            <i class="bi bi-receipt"></i>
                        </div>
                        <div class="stat-details">
                            <h3 class="stat-value">{{ $totalOrders }}</h3>
                            <p class="stat-label">Total Orders</p>
                        </div>
                    </div>
                    <div class="stat-card-footer">
                        <span class="text-muted">All time orders</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Stats Row -->
        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <div class="info-card">
                    <div class="info-card-header">
                        <i class="bi bi-graph-up me-2"></i>
                        <h5 class="mb-0">Stock Overview</h5>
                    </div>
                    <div class="info-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Total Stock Units</span>
                            <span class="fw-bold fs-4">{{ number_format($totalStock) }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Average Price</span>
                            <span class="fw-bold fs-4">Rp {{ number_format($avgPrice, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="info-card">
                    <div class="info-card-header">
                        <i class="bi bi-tags me-2"></i>
                        <h5 class="mb-0">Categories</h5>
                    </div>
                    <div class="info-card-body">
                        <div class="category-list">
                            @foreach($categories as $category)
                            <div class="category-item">
                                <span class="category-name">{{ $category->name }}</span>
                                <span class="category-count">{{ $category->products_count }} products</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Table -->
        <div class="products-section">
            <div class="section-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="section-title mb-1">
                            <i class="bi bi-grid-3x3-gap me-2"></i>All Products
                        </h4>
                        <p class="section-subtitle mb-0">Manage your product inventory</p>
                    </div>
                    <a href="{{ route('admin.warehouse') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle me-2"></i>Add New Product
                    </a>
                </div>
            </div>

            <div class="table-card">
                <div class="table-responsive">
                    <table class="products-table">
                        <thead>
                            <tr>
                                <th style="width: 5%;">ID</th>
                                <th style="width: 10%;">Image</th>
                                <th style="width: 25%;">Product Name</th>
                                <th style="width: 15%;">Categories</th>
                                <th style="width: 12%;">Price</th>
                                <th style="width: 10%;">Stock</th>
                                <th style="width: 10%;">Status</th>
                                <th style="width: 13%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $product)
                            <tr>
                                <td class="text-muted">#{{ $product->id }}</td>
                                <td>
                                    <div class="product-image-wrapper">
                                        @if($product->image_path && file_exists(public_path($product->image_path)))
                                            <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" class="product-thumbnail">
                                        @else
                                            <div class="product-thumbnail-placeholder">
                                                <i class="bi bi-image"></i>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">{{ $product->name }}</h6>
                                        <small class="text-muted">{{ Str::limit($product->description, 50) }}</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="category-badges">
                                        @foreach($product->categories as $category)
                                            <span class="category-badge">{{ $category->name }}</span>
                                        @endforeach
                                    </div>
                                </td>
                                <td>
                                    <span class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                </td>
                                <td>
                                    @if($product->stock == 0)
                                        <span class="stock-badge stock-out">
                                            <i class="bi bi-x-circle me-1"></i>0
                                        </span>
                                    @elseif($product->stock < 50)
                                        <span class="stock-badge stock-low">
                                            <i class="bi bi-exclamation-triangle me-1"></i>{{ $product->stock }}
                                        </span>
                                    @else
                                        <span class="stock-badge stock-good">
                                            <i class="bi bi-check-circle me-1"></i>{{ $product->stock }}
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    @if($product->is_active)
                                        <span class="status-badge status-active">
                                            <i class="bi bi-circle-fill me-1"></i>Active
                                        </span>
                                    @else
                                        <span class="status-badge status-inactive">
                                            <i class="bi bi-circle-fill me-1"></i>Inactive
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('products.show', $product->id) }}" 
                                           class="btn-action btn-action-view" 
                                           title="View Product"
                                           target="_blank">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.warehouse') }}" 
                                           class="btn-action btn-action-edit" 
                                           title="Edit Product">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('admin.warehouse.delete', $product->id) }}" 
                                              method="POST" 
                                              class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this product?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="btn-action btn-action-delete" 
                                                    title="Delete Product">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center py-5">
                                    <div class="empty-state">
                                        <i class="bi bi-inbox display-1 text-muted mb-3"></i>
                                        <h5 class="text-muted">No products found</h5>
                                        <p class="text-muted">Start by adding your first product</p>
                                        <a href="{{ route('admin.warehouse') }}" class="btn btn-primary mt-3">
                                            <i class="bi bi-plus-circle me-2"></i>Add Product
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($products->hasPages())
                <div class="table-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-muted">
                            Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} products
                        </div>
                        <div>
                            {{ $products->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection