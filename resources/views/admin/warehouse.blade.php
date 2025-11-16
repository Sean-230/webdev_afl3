@extends('layouts.app')

@section('title', 'Warehouse Management')

@section('content')
<div class="container-fluid py-5" style="margin-top: 76px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold" style="color: var(--primary-dark);">Warehouse Management</h1>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-arrow-left me-1"></i>Back to Dashboard
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4">
            <h5 class="fw-bold mb-3" style="color: var(--primary-dark);">
                <i class="bi bi-plus-circle me-2"></i>Add New Product
            </h5>
            <form action="{{ route('admin.warehouse.store') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label small text-muted">Product Name</label>
                        <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter product name" required>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label small text-muted">Price</label>
                        <input type="number" class="form-control form-control-sm" name="price" placeholder="0" step="0.01" required>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label small text-muted">Stock</label>
                        <input type="number" class="form-control form-control-sm" name="stock" placeholder="0" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label small text-muted">Categories</label>
                        <select class="form-select form-select-sm" name="categories[]" multiple required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label small text-muted">Description</label>
                        <textarea class="form-control form-control-sm" name="description" placeholder="Product description" rows="2"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-custom-pink btn-sm">
                            <i class="bi bi-plus-circle me-1"></i>Add Product
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover table-sm mb-0">
                    <thead style="background-color: var(--primary-dark); color: white;">
                        <tr>
                            <th style="width: 5%;">ID</th>
                            <th style="width: 25%;">Product Name</th>
                            <th style="width: 15%;">Categories</th>
                            <th style="width: 12%;">Price</th>
                            <th style="width: 15%;">Stock</th>
                            <th style="width: 10%;">Status</th>
                            <th style="width: 8%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td class="fw-medium">{{ $product->name }}</td>
                            <td>
                                @foreach($product->categories as $category)
                                    <span class="badge bg-secondary me-1" style="font-size: 0.7rem;">{{ $category->name }}</span>
                                @endforeach
                            </td>
                            <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('admin.warehouse.update-stock', $product->id) }}" method="POST" class="d-flex align-items-center gap-1">
                                    @csrf
                                    @method('PUT')
                                    <input type="number" name="stock" value="{{ $product->stock }}" style="width: 70px;" class="form-control form-control-sm">
                                    <button type="submit" class="btn btn-sm btn-outline-primary" style="padding: 0.25rem 0.5rem;">
                                        <i class="bi bi-check2"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                @if($product->stock > 50)
                                    <span class="badge bg-success" style="font-size: 0.7rem;">In Stock</span>
                                @elseif($product->stock > 0)
                                    <span class="badge bg-warning text-dark" style="font-size: 0.7rem;">Low Stock</span>
                                @else
                                    <span class="badge bg-danger" style="font-size: 0.7rem;">Out of Stock</span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('admin.warehouse.delete', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" style="padding: 0.25rem 0.5rem;" onclick="return confirm('Delete this product?')">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if($products->hasPages())
    <div class="d-flex justify-content-center mt-3">
        {{ $products->links('pagination::bootstrap-5') }}
    </div>
    @endif
</div>
@endsection
