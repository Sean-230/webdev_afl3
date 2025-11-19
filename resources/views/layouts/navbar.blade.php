<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top py-3">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4 d-flex align-items-center" href="/" style="color: #173648;">
            <img src="{{ asset('images/logo.png') }}" alt="Depo Es Krim" width="50" height="50" class="me-2"
                style="object-fit: contain;">
            Depo Es Krim
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @auth
                    @if (Auth::user()->is_admin)
                        <li class="nav-item">
                            <a class="nav-link fw-medium text-dark px-2 {{ Request::is('admin/dashboard') ? 'active' : '' }}"
                                href="/admin/dashboard">Dashboard Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium text-dark px-2 {{ Request::is('admin/warehouse') ? 'active' : '' }}"
                                href="/admin/warehouse">Gudang</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link fw-medium text-dark px-2 {{ Request::is('/') ? 'active' : '' }}"
                                href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium text-dark px-2 {{ Request::is('products*') ? 'active' : '' }}"
                                href="/products">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium text-dark px-2 {{ Request::is('review') ? 'active' : '' }}"
                                href="/review">Review</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium text-dark px-2 {{ Request::is('contact') ? 'active' : '' }}"
                                href="/contact">Kontak</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link fw-medium text-dark px-2 {{ Request::is('/') ? 'active' : '' }}"
                            href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium text-dark px-2 {{ Request::is('products*') ? 'active' : '' }}"
                            href="/products">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium text-dark px-2 {{ Request::is('review') ? 'active' : '' }}"
                            href="/review">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium text-dark px-2 {{ Request::is('contact') ? 'active' : '' }}"
                            href="/contact">Kontak</a>
                    </li>
                @endauth
            </ul>

            <div class="d-flex gap-2 ms-lg-3">
                @auth
                    <div class="dropdown">
                        <button class="btn btn-custom-primary dropdown-toggle d-flex align-items-center" type="button"
                            id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle me-2"></i>
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            @if (!Auth::user()->is_admin)
                                <li><a class="dropdown-item" href="{{ route('orders.index') }}"><i
                                            class="bi bi-box-seam me-2"></i>Pesanan Saya</a></li>
                                <li><a class="dropdown-item" href="{{ route('account.change-password') }}"><i
                                            class="bi bi-shield-lock me-2"></i>Ubah Password</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            @endif
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i>Keluar
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-custom-primary">
                        <i class="bi bi-box-arrow-in-right me-1"></i>Masuk
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-custom-primary">
                        <i class="bi bi-person-plus me-1"></i>Daftar
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>
