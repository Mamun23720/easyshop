<header class="p-1 text-bg-dark">
    <div class="container">
        <div class="d-flex  align-items-left justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-0">
                <h3>
                    <li><a href="{{ route('backend.dashboard') }}" class="nav-link text-white">S-Shop</a></li>
                </h3>
                {{-- <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li> --}}
            </ul>

            <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form> -->


            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ url('/uploads/important/sajibVaiya.jpeg') }}" alt="" width="45"
                        height="45" class="rounded-circle me-2">
                    <strong>Sajib Vaiya</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Log-out</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
