@extends('backend.master')


@section('content')
    <form action="{{ route('backend.updateProduct', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label"><b>Product Name</b></label>
            <input value="{{ $product->name }}" type="name" class="form-control" id="name"
                placeholder="Enter your product name" name="product_name" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label"><b>Product Price</b></label>
            <input value="{{ $product->price }}" type="number" class="form-control" id="price" name="product_price">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label"><b>Product image</b></label>
            <input type="file" class="form-control" id="image" name="product_image">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label"><b>Product Description</b></label>
            <input value="{{ $product->description }}" type="text" class="form-control" id="date"
                name="product_description">
        </div>
        <label for="text" class="form-label"><b>Product Category</b></label>
        <div class="">
            <select class="form-select" aria-label="Default select example" name="product_category">
                <option selected><b>Product Category</b></option>

                <option value="Accessories">Accessories</option>

                <option value="Mens Fashion">Mens Fashion</option>

                <option value="Womens Fashion">Womens Fashion</option>

                <option value="Kids Fashion">Kids Fashion</option>

                <option value="Cosmetics">Cosmetics</option>
            </select>
        </div>
        {{-- <div class="mb-3">
      <label for="text" class="form-label">Reviews</label>
      <input type="text" class="form-control" id="number" name="customer_number">
    </div> --}}

        <div class="mt-3 mb-3">
            <button type="submit" class="btn btn-primary">Update Product</button>
        </div>
    </form>
@endsection
