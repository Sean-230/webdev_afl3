<section>
    <p class="text-muted mb-4">
        Setelah akun Anda dihapus, semua data dan informasi akan dihapus secara permanen. Sebelum menghapus akun, silakan unduh data yang ingin Anda simpan.
    </p>

    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmUserDeletion">
        <i class="bi bi-trash me-2"></i>Hapus Akun
    </button>

    <!-- Delete Account Modal -->
    <div class="modal fade" id="confirmUserDeletion" tabindex="-1" aria-labelledby="confirmUserDeletionLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')

                    <div class="modal-header border-0">
                        <h5 class="modal-title fw-bold text-danger" id="confirmUserDeletionLabel">
                            <i class="bi bi-exclamation-triangle me-2"></i>Hapus Akun
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <p class="mb-3">
                            Apakah Anda yakin ingin menghapus akun Anda?
                        </p>

                        <p class="text-muted small mb-4">
                            Setelah akun dihapus, semua data akan dihapus secara permanen. Masukkan kata sandi Anda untuk mengonfirmasi.
                        </p>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Kata Sandi</label>
                            <input type="password" class="form-control @error('password', 'userDeletion') is-invalid @enderror" 
                                   id="password" name="password" 
                                   placeholder="Masukkan kata sandi Anda">
                            @error('password', 'userDeletion')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-2"></i>Batal
                        </button>
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-trash me-2"></i>Hapus Akun
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if ($errors->userDeletion->isNotEmpty())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('confirmUserDeletion'));
                myModal.show();
            });
        </script>
    @endif
</section>
