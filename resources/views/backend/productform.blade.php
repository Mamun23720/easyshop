@extends('backend.master')



@section('content')

<form action="{{route('backend.storeproduct')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="name" class="form-control" id="name" placeholder="Enter your product name" name="product_name" required>
      </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control" id="price" name="product_price">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    {{-- <div class="mb-3">
        <label for="date" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" id="date" name="customer_dob">
      </div>
    <div class="mb-3">
      <label for="number" class="form-label">Mobile Number</label>
      <input type="number" class="form-control" id="number" name="customer_number">
    </div> --}}
    <div class="mb-3">
        <label for="image" class="form-label">Product image</label>
        <input type="file" class="form-control" id="image" name="product_image">
      </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

  @endsection
