<section>
    <p class="text-muted mb-4">
        Pastikan akun Anda menggunakan kata sandi yang kuat dan aman.
    </p>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="update_password_current_password" class="form-label fw-semibold">Kata Sandi Saat Ini</label>
            <input type="password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" 
                   id="update_password_current_password" name="current_password" 
                   autocomplete="current-password">
            @error('current_password', 'updatePassword')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="update_password_password" class="form-label fw-semibold">Kata Sandi Baru</label>
            <input type="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror" 
                   id="update_password_password" name="password" 
                   autocomplete="new-password">
            @error('password', 'updatePassword')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="update_password_password_confirmation" class="form-label fw-semibold">Konfirmasi Kata Sandi</label>
            <input type="password" class="form-control" 
                   id="update_password_password_confirmation" name="password_confirmation" 
                   autocomplete="new-password">
        </div>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-shield-check me-2"></i>Ubah Kata Sandi
            </button>

            @if (session('status') === 'password-updated')
                <p class="text-success mb-0 small">
                    <i class="bi bi-check-circle-fill me-1"></i>Tersimpan!
                </p>
            @endif
        </div>
    </form>
</section>
