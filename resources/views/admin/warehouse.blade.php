@extends('layouts.app')

@section('title', 'Warehouse Management')

@section('content')
<div class="container-fluid py-5" style="margin-top: 76px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold" style="color: var(--primary-dark);">Warehouse Management</h1>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-2"></i>Back to Dashboard
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
            <h5 class="fw-bold mb-3">Add New Product</h5>
            <form action="{{ route('admin.warehouse.store') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="name" placeholder="Product Name" required>
                    </div>
                    <div class="col-md-3">
                        <input type="number" class="form-control" name="price" placeholder="Price" step="0.01" required>
                    </div>
                    <div class="col-md-2">
                        <input type="number" class="form-control" name="stock" placeholder="Stock" required>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" name="categories[]" multiple required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" name="description" placeholder="Description" rows="2"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-custom-pink">
                            <i class="bi bi-plus-circle me-2"></i>Add Product
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead style="background-color: var(--primary-dark); color: white;">
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Categories</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>
                                @foreach($product->categories as $category)
                                    <span class="badge bg-secondary">{{ $category->name }}</span>
                                @endforeach
                            </td>
                            <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('admin.warehouse.update-stock', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <input type="number" name="stock" value="{{ $product->stock }}" style="width: 80px;" class="form-control form-control-sm d-inline">
                                    <button type="submit" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-check"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                @if($product->stock > 50)
                                    <span class="badge bg-success">In Stock</span>
                                @elseif($product->stock > 0)
                                    <span class="badge bg-warning">Low Stock</span>
                                @else
                                    <span class="badge bg-danger">Out of Stock</span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('admin.warehouse.delete', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this product?')">
                                        <i class="bi bi-trash"></i>
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

    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>
@endsection
