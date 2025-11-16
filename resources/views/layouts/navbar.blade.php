<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top py-3">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4 text-danger d-flex align-items-center" href="/">
            <img src="{{ asset('images/logo_transparan.png') }}" alt="Depo Es Krim" width="40" height="40"
                class="me-2">
            Depo Es Krim
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fw-medium text-dark px-2 {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium text-dark px-2 {{ Request::is('products*') ? 'active' : '' }}" href="/products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium text-dark px-2 {{ Request::is('review') ? 'active' : '' }}" href="/review">Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium text-dark px-2 {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
            
            <div class="d-flex align-items-center ms-lg-3">
                @auth
                    <!-- User Dropdown -->
                    <div class="dropdown">
                        <button class="btn btn-outline-danger dropdown-toggle d-flex align-items-center" type="button" 
                                id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle me-2"></i>
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>My Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-cart me-2"></i>My Cart</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-clock-history me-2"></i>Order History</a></li>
                            @if(Auth::user()->is_admin)
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/admin/dashboard"><i class="bi bi-speedometer2 me-2"></i>Admin Dashboard</a></li>
                            @endif
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i>Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-danger me-2">
                        <i class="bi bi-box-arrow-in-right me-1"></i>Login
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-danger">
                        <i class="bi bi-person-plus me-1"></i>Register
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>