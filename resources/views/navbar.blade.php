<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">Milky</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link{{ request()->is('/') ? ' active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link{{ request()->is('about') ? ' active' : '' }}">About</a>
                <a href="{{ route('services') }}" class="nav-item nav-link{{ request()->is('services') ? ' active' : '' }}">Services</a>
                <a href="{{ route('products') }}" class="nav-item nav-link{{ request()->is('products') ? ' active' : '' }}">Products</a>
                <!-- Add similar links for other routes -->
                <a href="{{ route('contact') }}" class="nav-item nav-link{{ request()->is('contact') ? ' active' : '' }}">Contact</a>
                <!-- Add dropdown -->
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('signin') }}">Sign In</a>
                        <a class="dropdown-item" href="{{ route('signup') }}">Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="border-start ps-4 d-none d-lg-block">
                <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
            </div>

        </div>
    </nav>
