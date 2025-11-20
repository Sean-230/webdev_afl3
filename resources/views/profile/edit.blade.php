@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
<div class="container py-5" style="margin-top: 76px;">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="fw-bold mb-4" style="color: #173648;">
                <i class="bi bi-person-circle me-2"></i>Profil Saya
            </h1>

            <!-- Update Profile Information -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-semibold" style="color: #173648;">Informasi Profil</h5>
                </div>
                <div class="card-body p-4">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-semibold" style="color: #173648;">Ubah Kata Sandi</h5>
                </div>
                <div class="card-body p-4">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account -->
            <div class="card border-0 shadow-sm mb-4 border-danger">
                <div class="card-header bg-danger bg-opacity-10 py-3">
                    <h5 class="mb-0 fw-semibold text-danger">Hapus Akun</h5>
                </div>
                <div class="card-body p-4">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
