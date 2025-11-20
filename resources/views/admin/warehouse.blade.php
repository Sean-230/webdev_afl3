@extends('layouts.app')

@section('title', 'Manajemen Gudang')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/warehouse.css') }}">
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
    <div class="warehouse-page">
        <!-- Page Header -->
        <div class="page-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1>
                            Manajemen Gudang
                        </h1>
                        <p>Kelola inventori dan stok produk Anda</p>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <!-- Success Alert -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <!-- Error Alert -->
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-circle me-2"></i>
                    <strong>Error:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <!-- Add Product Form -->
            <div class="form-card">
                <div class="form-card-header">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Produk Baru
                </div>
                <div class="form-card-body">
                    <form action="{{ route('admin.warehouse.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-4">
                            <!-- Product Name -->
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    Nama Produk <span class="text-danger">*</span>
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom @error('name') is-invalid @enderror"
                                    name="name" placeholder="Contoh: Vanilla Ice Cream 5L" value="{{ old('name') }}"
                                    required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Categories (Select2 Dropdown) -->
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    Kategori <span class="text-danger">*</span>
                                </label>
                                <select class="form-select select2-multiple @error('categories') is-invalid @enderror"
                                    name="categories[]" multiple="multiple" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ collect(old('categories'))->contains($category->id) ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <small class="form-help-text">
                                    <i class="bi bi-info-circle me-1"></i>Pilih satu atau lebih kategori
                                </small>
                                @error('categories')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Price -->
                            <div class="col-md-4">
                                <label class="form-label-custom">
                                    Harga (Rp) <span class="text-danger">*</span>
                                </label>
                                <input type="number"
                                    class="form-control form-control-custom @error('price') is-invalid @enderror"
                                    name="price" placeholder="50000" step="0.01" min="0"
                                    value="{{ old('price') }}" required>
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Stock -->
                            <div class="col-md-4">
                                <label class="form-label-custom">
                                    Stok <span class="text-danger">*</span>
                                </label>
                                <input type="number"
                                    class="form-control form-control-custom @error('stock') is-invalid @enderror"
                                    name="stock" placeholder="100" min="0" value="{{ old('stock') }}" required>
                                @error('stock')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Image Upload -->
                            <div class="col-md-4">
                                <label class="form-label-custom">
                                    Gambar Produk <small class="text-muted">(opsional)</small>
                                </label>
                                <input type="file"
                                    class="form-control form-control-custom @error('image') is-invalid @enderror"
                                    name="image">
                                <small class="form-help-text">
                                    <i class="bi bi-image me-1"></i>Upload any file
                                </small>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="col-12">
                                <label class="form-label-custom">
                                    Deskripsi Produk
                                </label>
                                <textarea class="form-control form-control-custom @error('description') is-invalid @enderror" name="description"
                                    placeholder="Masukkan deskripsi lengkap produk..." rows="4">{{ old('description') }}</textarea>
                                <small class="form-help-text">
                                    <i class="bi bi-file-text me-1"></i>Jelaskan keunggulan dan detail produk
                                </small>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-plus-circle me-2"></i>Tambah Produk
                                </button>
                                <button type="reset" class="btn btn-light ms-2">
                                    <i class="bi bi-x-circle me-2"></i>Reset Form
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Products Table -->
            <div class="table-card">
                <div class="table-responsive">
                    <table class="table table-custom table-hover">
                        <thead>
                            <tr>
                                <th style="width: 5%;">ID</th>
                                <th style="width: 25%;">Nama Produk</th>
                                <th style="width: 20%;">Kategori</th>
                                <th style="width: 12%;">Harga</th>
                                <th style="width: 15%;">Stok</th>
                                <th style="width: 13%;">Status</th>
                                <th style="width: 10%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $product)
                                <tr>
                                    <!-- ID -->
                                    <td>
                                        <span class="badge bg-secondary">#{{ $product->id }}</span>
                                    </td>

                                    <!-- Product Name & Description -->
                                    <td>
                                        <div class="product-name">{{ $product->name }}</div>
                                        @if ($product->description)
                                            <p class="product-desc">{{ Str::limit($product->description, 60) }}</p>
                                        @endif
                                    </td>

                                    <!-- Categories -->
                                    <td>
                                        @forelse($product->categories as $category)
                                            <span class="category-badge">
                                                <i class="bi bi-tag-fill me-1"></i>{{ $category->name }}
                                            </span>
                                        @empty
                                            <span class="text-muted">-</span>
                                        @endforelse
                                    </td>

                                    <!-- Price -->
                                    <td>
                                        <strong style="color: #1C7FDD;">
                                            Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </strong>
                                    </td>

                                    <!-- Stock (Editable) -->
                                    <td>
                                        <form action="{{ route('admin.warehouse.update-stock', $product->id) }}"
                                            method="POST" class="d-flex align-items-center">
                                            @csrf
                                            @method('PUT')
                                            <div class="input-group stock-input-group">
                                                <input type="number" name="stock" value="{{ $product->stock }}"
                                                    class="form-control" min="0" required>
                                                <button type="submit" class="btn btn-outline-primary"
                                                    title="Update Stok">
                                                    <i class="bi bi-check2"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>

                                    <!-- Status -->
                                    <td>
                                        @if ($product->stock > 50)
                                            <span class="stock-badge stock-good">
                                                <i class="bi bi-check-circle-fill"></i>
                                                Tersedia
                                            </span>
                                        @elseif($product->stock > 0)
                                            <span class="stock-badge stock-low">
                                                <i class="bi bi-exclamation-triangle-fill"></i>
                                                Rendah
                                            </span>
                                        @else
                                            <span class="stock-badge stock-out">
                                                <i class="bi bi-x-circle-fill"></i>
                                                Habis
                                            </span>
                                        @endif
                                    </td>

                                    <!-- Actions -->
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button type="button" class="btn btn-outline-primary btn-action"
                                                data-bs-toggle="modal" data-bs-target="#editProductModal{{ $product->id }}"
                                                title="Edit Produk">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <form action="{{ route('admin.warehouse.delete', $product->id) }}" method="POST"
                                                class="d-inline"
                                                onsubmit="return confirm('Yakin ingin menghapus produk {{ $product->name }}?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-action"
                                                    title="Hapus Produk">
                                                    <i class="bi bi-trash3"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Edit Product Modal -->
                                <div class="modal fade" id="editProductModal{{ $product->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Produk: {{ $product->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <form action="{{ route('admin.warehouse.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="row g-3">
                                                        <!-- Product Name -->
                                                        <div class="col-md-6">
                                                            <label class="form-label">Nama Produk <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
                                                        </div>

                                                        <!-- Categories -->
                                                        <div class="col-md-6">
                                                            <label class="form-label">Kategori <span class="text-danger">*</span></label>
                                                            <select class="form-select" name="categories[]" multiple required>
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}"
                                                                        {{ $product->categories->contains($category->id) ? 'selected' : '' }}>
                                                                        {{ $category->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <!-- Price -->
                                                        <div class="col-md-4">
                                                            <label class="form-label">Harga (Rp) <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" name="price" value="{{ $product->price }}" step="0.01" min="0" required>
                                                        </div>

                                                        <!-- Stock -->
                                                        <div class="col-md-4">
                                                            <label class="form-label">Stok <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" name="stock" value="{{ $product->stock }}" min="0" required>
                                                        </div>

                                                        <!-- Image Upload -->
                                                        <div class="col-md-4">
                                                            <label class="form-label">Gambar Baru <small class="text-muted">(opsional)</small></label>
                                                            <input type="file" class="form-control" name="image">
                                                        </div>

                                                        <!-- Current Image -->
                                                        @if($product->image_path && file_exists(public_path($product->image_path)))
                                                        <div class="col-12">
                                                            <label class="form-label">Gambar Saat Ini:</label>
                                                            <div>
                                                                <img src="{{ asset($product->image_path) }}?v={{ time() }}" alt="{{ $product->name }}" style="max-height: 150px; object-fit: contain;">
                                                            </div>
                                                        </div>
                                                        @endif

                                                        <!-- Description -->
                                                        <div class="col-12">
                                                            <label class="form-label">Deskripsi Produk</label>
                                                            <textarea class="form-control" name="description" rows="3">{{ $product->description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="bi bi-save me-2"></i>Simpan Perubahan
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <tr>
                                    <td colspan="7">
                                        <div class="empty-state">
                                            <i class="bi bi-inbox"></i>
                                            <h5>Belum Ada Produk</h5>
                                            <p>Mulai dengan menambahkan produk pertama Anda menggunakan form di atas</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            @if ($products->hasPages())
                <div class="d-flex justify-content-center">
                    {{ $products->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
@endsection

@push('scripts')
    <!-- jQuery (required for Select2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize Select2 for multiple category selection
            $('.select2-multiple').select2({
                placeholder: "Pilih kategori produk...",
                allowClear: true,
                width: '100%',
                theme: 'default',
                language: {
                    noResults: function() {
                        return "Kategori tidak ditemukan";
                    },
                    searching: function() {
                        return "Mencari...";
                    }
                }
            });

            // Auto-hide alerts after 5 seconds
            setTimeout(function() {
                $('.alert').fadeOut('slow');
            }, 5000);
        });
    </script>
@endpush
