@extends('frontend.master2')

@section('content')


<section class="py-5">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div>
              <img style="height: 500px; width: 500px; margin: auto; border-radius:5% " class="rounded-4 fit" src="{{ url('/uploads/product/' . $singleProduct->image) }}">
          </div>
          <!-- thumbs-wrap.// -->
          <!-- gallery-wrap .end// -->
        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <div class="mb-3">
                <span class="h5"><b>Product Name: {{ $singleProduct->name }}</b></span>
              </div>
            <div class="mb-3">
              <span class="h5"><b>Product Price: {{ $singleProduct->price }} BDT</b></span>
            </div>

            {{-- <div class="mb-3">
                <span class="h5"><b>Product Category: {{ $singleProduct->category->name }}</b></span>
              </div> --}}


            <p><b>Product Description: </b>{{ $singleProduct->description }}</p><br>

            <div class="row">
              <dt class="col-3">Type:</dt>
              <dd class="col-9">Regular</dd>

              <dt class="col-3">Color</dt>
              <dd class="col-9">Brown</dd>

              <dt class="col-3">Material</dt>
              <dd class="col-9">Cotton, Jeans</dd>

              <dt class="col-3">Brand</dt>
              <dd class="col-9">Reebook</dd>
            </div>
<br>

            <hr>

            <div class="row mb-4">
              <div class="col-md-4 col-6">
                <label class="mb-2">Size</label>
                <select class="form-select border border-secondary" style="height: 35px;">
                  <option>Small</option>
                  <option>Medium</option>
                  <option>Large</option>
                </select>
              </div>
              <!-- col.// -->
              <div class="col-md-4 col-6 mb-3">
                <label class="mb-2 d-block">Quantity</label>
                <div class="input-group mb-3" style="width: 170px;">
                  <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                    <i class="fas fa-minus"></i>
                  </button>
                  <input type="text" class="form-control text-center border border-secondary" placeholder="1" aria-label="Example text with button addon" aria-describedby="button-addon1">
                  <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
            </div>
            <a href="{{ route('add.to.cart', $singleProduct->id) }}" class="btn btn-primary shadow-0"> <i class="me-1 bi bi-cart4"></i> <b>Add to cart</b> </a>
            <a href="#" class="btn btn-danger shadow-0"> <i class="me-1 bi bi-heart"></i> <b>Save</b> </a>
          </div>
        </main>
      </div>
    </div>
  </section>







    {{-- Multiple Product Section --}}

    <section class="">
        <div class="container">
            <hr>
            <h2 class="fw-bolder mb-5 mt-5">Related products</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">



                @foreach ($multipleProduct as $multi)
                    <div class="col-md-3" style="height: 100%; width: 100%;">
                        <div style="border: solid #4160ff" class="card h-100 mb-0">
                            <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Discount</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ url('/uploads/product/' . $multi->image) }}" alt="..."
                                style="height: 300px; width: 100%">
                            <!-- Product details-->
                            <div class="">
                                <div style="text-align: center" class="text-black mb-0">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder mt-2"><b>Name: {{ $multi->name }}</b></h5>
                                    <!-- Product price-->
                                    <p style="color: red" ><b>Price: {{ $multi->price }} BDT</b></p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer pt-0 border-top-0 bg-transparent mt-0">
                                <div class="text-center"><a class="button button2 mt-auto" href="{{ route('show.product', $multi->id) }}"><b>View
                                            Details</b></a></div>
                            </div>
                        </div>
                    </div>
                @endforeach





            </div>
        </div>
        </div>
    </section>
@endsection
