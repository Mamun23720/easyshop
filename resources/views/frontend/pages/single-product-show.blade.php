@extends('frontend.master')

@section('content')

{{-- Single Product Section --}}
  <section class="">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div style="text-align: center" class="mb-3 d-flex">
              <img style="height: 500px; width: 500px" class="border rounded-5 bg-white" src="{{url('/uploads/product/'.$singleProduct->image)}}" />
          </div>
        </aside>


        <main class="col-lg-6">

        <div class="ps-lg-3">

            <h4 class="title text-dark" style=""><b>Product Name: {{$singleProduct->name}}</b></h4>

            <div class="mb-3" style="">

              <span class="h5"><b>Product Price: {{$singleProduct->price}} Taka</b></span>

            </div>
            <div class="border rounded-2 px-3 py-2 bg-white">
                <div class="tab-content" id="ex1-content">
                  <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                    <h2><b>Description:</b></h2>
                    <h4 style="text-align: justify">{{$singleProduct->description}}</h4>
                  </div>
                </div>
              </div>
            <div style="text-align: center">
              <a style="margin-right: 5px" class="btn btn-primary btn-lg mt-5" href="#" class="nav-link">Download</a></li>
            </div>
              {{--
            <div class="row">
              <dt class="col-3">Type:</dt>
              <dd class="col-9">Regular</dd>

              <dt class="col-3">Color</dt>
              <dd class="col-9">Brown</dd>

              <dt class="col-3">Material</dt>
              <dd class="col-9">Cotton, Jeans</dd>

              <dt class="col-3">Brand</dt>
              <dd class="col-9">Reebook</dd>
            </div> --}}

        </div>
        </main>
      </div>
    </div>
    <br>
    <div style="text-align: center">
        <a href="#" style="width:300px;height:50px; text-align:center; margin-right: 5px" class="btn btn-warning shadow-0" style="color: black"><b>Buy now</b></a>
        <a href="#" style="width:300px;height:50px; background-color: rgb(0, 61, 61); text-align:center; margin-left: 5px" class="btn btn-primary shadow-0"><b>Add to cart</b></a>
        </div>
  </section>









{{-- Multiple Product Section --}}

<section class="">
    <div class="container">
        <h2 class="fw-bolder mb-4">Related products</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">



@foreach ($multipleProduct as $multi)

            <div class="col-md-3" style="height: 340px; width: 252px">
                <div class="card h-100 mb-0">
                    <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Discount</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="{{url('/uploads/product/'.$multi->image)}}" alt="..." style="height: 300px; width: 200px">
                    <!-- Product details-->
                    <div class="">
                        <div style="text-align: center" class="text-black mb-0">
                            <!-- Product name-->
                            <h5 class="fw-bolder"><b>Name: {{$multi->name}}</b></h5>
                            <!-- Product price-->
                            <p>Price: {{$multi->price}} BDT</p>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer pt-0 border-top-0 bg-transparent mt-0">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#"><b>View Details</b></a></div>
                    </div>
                </div>
            </div>

@endforeach





            </div>
        </div>
    </div>
</section>


@endsection
