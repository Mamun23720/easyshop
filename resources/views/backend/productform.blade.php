@extends('backend.master')

@section('content')

<br>
<form action="{{route('backend.storeproduct')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label"><b>Product Name</b></label>
        <input type="name" class="form-control" id="name" placeholder="Enter your product name" name="product_name" required>
      </div>
    <div class="mb-3">
      <label for="price" class="form-label"><b>Product Price</b></label>
      <input type="number" class="form-control" id="price" name="product_price">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label"><b>Product image</b></label>
        <input type="file" class="form-control" id="image" name="product_image">
      </div>
    <div class="mb-3">
        <label for="text" class="form-label"><b>Product Description</b></label>
        <input type="text" class="form-control" id="date" name="product_description">
      </div>
      <label for="text" class="form-label"><b>Product Category</b></label>
      <div class="">
        <select class="form-select" aria-label="Default select example" name="product_category">
            <option selected><b>Product Category</b></option>
            @foreach ($allCategory as $category)

                <option value="{{$category->id}}">{{$category->name}}</option>

            @endforeach

        </select>
      </div>
    <div class="mt-3 mb-3">
    <button type="submit" class="btn btn-success">Add Product</button>
    </div>
  </form>

  @endsection
