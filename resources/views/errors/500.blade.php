@extends('layouts.app')

@section('title', '500 - Server Error')

@section('content')
<div class="container py-5 text-center" style="margin-top: 76px; min-height: 60vh;">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 50vh;">
        <i class="bi bi-exclamation-triangle display-1 text-warning mb-4"></i>
        <h1 class="display-4 fw-bold mb-3" style="color: var(--primary-dark);">500 - Server Error</h1>
        <p class="lead text-muted mb-4">Something went wrong on our end. We're working to fix it!</p>
        <div class="d-flex gap-3">
            <a href="/" class="btn btn-custom-pink">
                <i class="bi bi-house-door me-2"></i>Go Home
            </a>
            <a href="javascript:location.reload()" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-clockwise me-2"></i>Try Again
            </a>
        </div>
    </div>
</div>
@endsection
