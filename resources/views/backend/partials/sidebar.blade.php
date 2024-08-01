<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 250px;">
    <a href="{{route('backend.dashboard')}}" class="d-flex align-items-center mb-3 md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Admin</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column ">
      <li>
        <a href="{{route('backend.dashboard')}}" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"></svg>
          Dashboard
        </a>
      </li>
      {{-- <li>
        <a href="{{route('backend.dashboard')}}" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"></svg>
          Orders
        </a>
      </li>
      <li> --}}
        <a href="{{route('backend.productlist')}}" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"></svg>
          Products
        </a>
      </li>
      {{-- <a href="{{route('backend.productform')}}" class="nav-link text-white">
        <svg class="bi pe-none me-2" width="16" height="16"></svg>
        Add Products
      </a>
    </li> --}}
      <li>
        <a href="{{route('backend.customerlist')}}" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"></svg>
          Customers
        </a>
      </li>
      {{-- <li>
        <a href="{{route('backend.customerform')}}" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"></svg>
          Add Customer
        </a>
      </li> --}}
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{url('/uploads/adminPhoto/sajibVaiya.jpeg')}}" alt="" width="45" height="45" class="rounded-circle me-2">
        <strong>Sajib Vaiya</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        {{-- <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li> --}}
      </ul>
    </div>
  </div>
