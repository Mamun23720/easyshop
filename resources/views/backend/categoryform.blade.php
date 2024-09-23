@extends('backend.master')

@section('content')
    <br>

    <div style="" class="container" >

    <p style="text-align: center; color:rgb(25, 0, 255); font-size: 50px;; font-family:'Times New Roman', Times, serif" ><b>Add Category</b></p>

    <form style="font-family:'Times New Roman', Times, serif" action="{{ route('backend.storecategory') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="mb-3">
                <label for="name" class="form-label"><b>Category Name</b></label>
                <input style="border: solid black;"  type="name" class="form-control" id="name" placeholder="Enter your category name"
                    name="category_name" required>
            </div>
            <!-- <div class="mb-3">
                <label for="text" class="form-label"><b>Category Description</b></label>
                <input type="text" class="form-control" id="date" name="category_description">
            </div> -->
            <div class="mb-3">
                <label for="image" class="form-label"><b>Image</b></label>
                <input style="border: solid black;"  type="file" class="form-control" id="image" name="category_image">
            </div>
            <div class="mt-3 mb-3">
                <button type="submit" class="btn btn-info">Add Category</button>
            </div>
        </div>
    </form>
    </div>
@endsection
