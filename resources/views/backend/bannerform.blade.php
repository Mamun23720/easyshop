@extends('backend.master')

@section('content')
    <br>
    <form action="{{ route('backend.storebanner') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label"><b>Banner Name</b></label>
            <input type="name" class="form-control" id="name" placeholder="Enter your product name" name="banner_name"
                required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label"><b>Banner image</b></label>
            <input type="file" class="form-control" id="image" name="banner_image" required>
        </div>
        <div class="mb-3">
            <label for="text" class="form-label"><b>Banner Description</b></label>
            <input type="text" class="form-control" id="text" name="banner_description">
        </div>
        <div class="mt-3 mb-3">
            <button type="submit" class="btn btn-success">Add Banner</button>
        </div>
    </form>
@endsection
