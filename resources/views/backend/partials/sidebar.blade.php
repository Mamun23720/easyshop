<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 250px;">
    <hr>
    <ul class="nav nav-pills flex-column ">
        <li>
            <a href="{{ route('backend.dashboard') }}" class="nav-link text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-clipboard-data" viewBox="0 0 16 16">
                    <path
                        d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z" />
                    <path
                        d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z" />
                    <path
                        d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z" />
                </svg>
                Dashboard
            </a>
        </li>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Seller Management</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="{{ route('backend.newSellerRequest') }}">New Seller Request's</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.sellerList') }}">Seller List's</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.sellerCommissionSetting') }}">Seller Commission Setting's</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.sellerSubscription') }}">Seller Subscription's</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.sellerPayout') }}">Seller Payout's</a></li>
            </ul>
        </div>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Product Management</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="{{ route('backend.categorylist') }}">Categories</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.productlist') }}">Product's</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.productReview') }}">Review's</a></li>
            </ul>
        </div>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Order Management</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">Order List's</a></li>
                <li><a class="dropdown-item" href="#">Pending Order's</a></li>
                <li><a class="dropdown-item" href="#">Cancel Order's</a></li>
            </ul>
        </div>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Customer Management</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="{{ route('backend.customerlist') }}">Customer List's</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.customerComplaint') }}">Customer Complaint's</a></li>
            </ul>
        </div>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Financial Management</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="{{ route('backend.financialReport') }}">Sale's Report</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.financialPayout') }}">Payout </a></li>
                <li><a class="dropdown-item" href="{{ route('backend.financialTax') }}">Tax </a></li>
                <li><a class="dropdown-item" href="{{ route('backend.financialCoupon') }}">Coupon </a></li>
            </ul>
        </div>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Marketting & SEO</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="{{ route('backend.bannerlist') }}">Banner</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.markettingSeo') }}">SEO</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.markettingEmail') }}">Email</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.markettingSocialMedia') }}">Social Media</a></li>
            </ul>
        </div>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Delivery Management</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="{{ route('backend.deliveryProvider') }}">Delivery Provider</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.deliveryTracking') }}">Delivery Tracking</a></li>
            </ul>
        </div>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Business Setting</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="{{ route('backend.bSettingWebsite') }}">Website</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.bSettingPayment') }}">Payment</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.bSettingCurrency') }}">Currency</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.bSettingLanguage') }}">Language</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.bSettingBlog') }}">Blog</a></li>
                <li><a class="dropdown-item" href="{{ route('backend.bSettingFAQ') }}">FAQ</a></li>
            </ul>
        </div>
        <hr>
    </ul>
</div>