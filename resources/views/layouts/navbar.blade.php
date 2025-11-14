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
            <a href="/#products" class="btn btn-danger ms-lg-3">Get Started</a>
        </div>
    </div>
</nav>

<style>
    .navbar {
        transition: all 0.3s ease;
    }

    .nav-link {
        transition: color 0.3s ease;
        position: relative;
    }

    .nav-link:hover {
        color: #FF6B6B !important;
    }

    .nav-link.active {
        color: #FF6B6B !important;
        font-weight: 600;
    }

    .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 50%;
        transform: translateX(-50%);
        width: 30px;
        height: 3px;
        background: #FF6B6B;
        border-radius: 2px;
    }

    .btn-danger {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
    }
</style>