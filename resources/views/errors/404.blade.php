@extends('layouts.app')

@section('title', '404 - Not Found')

@section('content')
<div class="container py-5 text-center" style="margin-top: 76px; min-height: 60vh;">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 50vh;">
        <i class="bi bi-search display-1 text-muted mb-4"></i>
        <h1 class="display-4 fw-bold mb-3" style="color: var(--primary-dark);">404 - Page Not Found</h1>
        <p class="lead text-muted mb-4">The page you're looking for doesn't exist.</p>
        <div class="d-flex gap-3">
            <a href="/" class="btn btn-custom-pink">
                <i class="bi bi-house-door me-2"></i>Go Home
            </a>
            <a href="/products" class="btn btn-outline-secondary">
                <i class="bi bi-shop me-2"></i>Browse Products
            </a>
        </div>
    </div>
</div>
@endsection
