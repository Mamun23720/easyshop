<header>
    <div class="px-3 py-2 text-bg-dark border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">

          <h1><b>Easy Shop</b></h1>
        </a>
        <!-- <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
          </form> -->

          @guest('customerGuard')


        <div class="text-end">
            <div class="container d-flex flex-wrap justify-content-center">
              <div class="text-end">

                  <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasLogin" role="button" aria-controls="offcanvasExample">
                      Login
                    </a>
                    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasSignup" role="button" aria-controls="offcanvasExample">
                      Register
                    </a>
              </div>
            </div>
          </div>

          @endguest


          @auth('customerGuard')

          <div class="text-end">
            <div class="container d-flex flex-wrap justify-content-center">
              <div class="text-end">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <img src="{{url('/uploads/customerRegistration/'. auth('customerGuard')->user()->image)}}" alt="" width="50" height="50" class="rounded-circle me-2 ms-2">
                  <a href="{{route('view.profile')}}" class="btn btn-primary me-2">
                      {{auth('customerGuard')->user()->name}}
                    </a>
                    <a class="btn btn-primary"  href="{{route('frontend.logout')}}">
                      Logout
                    </a>
                    </div>
              </div>
            </div>
          </div>

          @endauth

        </div>
      </div>
    </div>
  </header>
  <br>

















{{-- Login form --}}




  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasLogin" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Login</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="{{route('frontend.login')}}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>



            <button type="submit"  style="color:black" class="btn btn-primary">Login</button>
          </form>

    </div>
  </div>



{{-- Registration form --}}

  <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasSignup" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Register</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <form action="{{route('frontend.registration')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Retype Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">Upload Photo</label>
                {{-- <img src="{{url('/uploads/users/'.'image')}}" class="card-img-top" alt="..."> --}}
                <input type="file" name="reg_image" class="form-control" id="image">
              </div>

            <button type="submit" style="color:black" class="btn btn-primary">Register</button>
          </form>

    </div>
  </div>
