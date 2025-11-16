@extends('layouts.app')

@section('title', '403 - Forbidden')

@section('content')
<div class="container py-5 text-center" style="margin-top: 76px; min-height: 60vh;">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 50vh;">
        <i class="bi bi-shield-x display-1 text-danger mb-4"></i>
        <h1 class="display-4 fw-bold mb-3" style="color: var(--primary-dark);">403 - Access Denied</h1>
        <p class="lead text-muted mb-4">You don't have permission to access this page.</p>
        <div class="d-flex gap-3">
            <a href="/" class="btn btn-custom-pink">
                <i class="bi bi-house-door me-2"></i>Go Home
            </a>
            <a href="javascript:history.back()" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-2"></i>Go Back
            </a>
        </div>
    </div>
</div>
@endsection
