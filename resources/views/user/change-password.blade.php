@extends('layouts.app')

@section('title', 'Change Password')

@section('content')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">

<section class="py-5" style="margin-top: 76px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body p-5">
                        <h2 class="fw-bold mb-4 text-center" style="color: var(--primary-dark);">Change Password</h2>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('account.change-password') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="current_password" class="form-label">Current Password</label>
                                <input type="password" class="form-control @error('current_password') is-invalid @enderror" 
                                       id="current_password" name="current_password" required>
                                @error('current_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="new_password" class="form-label">New Password</label>
                                <input type="password" class="form-control @error('new_password') is-invalid @enderror" 
                                       id="new_password" name="new_password" required minlength="8">
                                <small class="text-muted">Minimum 8 characters</small>
                                @error('new_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" 
                                       id="new_password_confirmation" name="new_password_confirmation" required>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-custom-pink">
                                    <i class="bi bi-shield-lock me-2"></i>Change Password
                                </button>
                                <a href="/" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>

                        <hr class="my-4">

                        <div class="text-center">
                            <h5 class="text-danger fw-bold mb-3">Danger Zone</h5>
                            <p class="text-muted small mb-3">Once you delete your account, there is no going back. This action is permanent.</p>
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
                                <i class="bi bi-trash me-2"></i>Delete Account
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Delete Account Modal -->
<div class="modal fade" id="deleteAccountModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title"><i class="bi bi-exclamation-triangle me-2"></i>Delete Account</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST" action="{{ route('account.delete') }}">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <p class="fw-bold">Are you absolutely sure?</p>
                    <p>This will permanently delete your account, including:</p>
                    <ul>
                        <li>All your reviews</li>
                        <li>Your shopping cart</li>
                        <li>Your account information</li>
                    </ul>
                    <p class="text-danger fw-bold">This action cannot be undone!</p>
                    
                    <div class="mt-3">
                        <label for="password" class="form-label">Enter your password to confirm:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash me-2"></i>Delete My Account
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
