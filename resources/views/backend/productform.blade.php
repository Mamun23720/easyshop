@extends('backend.master')

@section('content')
    <br>
    <div style=" padding-left: 400px; padding-right: 300px;" class="container" >

    <p style="text-align: center; color:green; font-size: 50px;;" ><b>Add Product</b></p>
    
    <form style="height: auto; width: 600px;" action="{{ route('backend.storeproduct') }}" method="post" enctype="multipart/form-data">


        @csrf


        <div class="mb-3">
            <label for="image" class="form-label"><b style="font-size: larger;" >Image</b></label>
            <input  style="border: solid black;" type="file" class="form-control" id="image" name="product_image" placeholder="Enter Your Product Image" required>
        </div>


        <div class="mb-3">
            <label for="name" class="form-label"><b style="font-size: larger;" >Name</b></label>
            <input style="border: solid black;" type="name" class="form-control" id="name" name="product_name" placeholder="Enter Your Product Name"  required>
        </div>


        <div class="mb-3">
        <label for="text" class="form-label"><b style="font-size: larger;" >Category</b></label>
            <select  style="border: solid black;"  class="form-select" aria-label="Default select example" name="product_category" placeholder="Enter Your Product Category" required>
                <option selected>Product Category</option>
                @foreach ($allCategory as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="text" class="form-label"><b style="font-size: larger;" >Brand</b></label>
            <input  style="border: solid black;" type="text" class="form-control" id="date" name="product_brand" placeholder="Enter Your Brand Name">
        </div>

        <div class="mb-3">
            <label for="text" class="form-label"><b style="font-size: larger;" >Model</b></label>
            <input  style="border: solid black;" type="text" class="form-control" id="date" name="product_model" placeholder="Enter Your Brand Name">
        </div>

        <div class="mb-3">
            <label for="text" class="form-label"><b style="font-size: larger;" >Color</b></label>
            <input  style="border: solid black;" type="text" class="form-control" id="date" name="product_color" placeholder="Enter Your Product Color">
        </div>
        
        <div class="mb-3">
        <label for="text" class="form-label"><b style="font-size: larger;" >Size</b></label>
            <select  style="border: solid black;"  class="form-select" aria-label="Default select example" name="product_size" placeholder="Enter Your Product Size">
                <option selected>Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label"><b style="font-size: larger;" >Price</b></label>
            <input  style="border: solid black;" type="number" class="form-control" id="price" name="product_price" placeholder="Enter Your Product Price" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label"><b style="font-size: larger;" >Discount(%)</b></label>
            <input  style="border: solid black;" type="text" class="form-control" id="price" name="product_discount" placeholder="Enter Your Discount(%)">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label"><b style="font-size: larger;" >Stock</b></label>
            <input  style="border: solid black;" type="number" class="form-control" id="price" name="product_stock" placeholder="Enter Your Stock" required>
        </div>

        <div class="mb-3">
            <label for="text" class="form-label"><b style="font-size: larger;" >Description</b></label>
            <input  style="border: solid black;" type="text" class="form-control" id="date" name="product_description" placeholder="Enter Your Product Description">
        </div>
        
        
        <div style="text-align:center;" class="mt-3 mb-3">
            <button type="submit" class="btn btn-success btn-lg"><b style="font-size: xx-large ;" >Submit</b></button>
        </div>

    </form>
    </div>
@endsection
