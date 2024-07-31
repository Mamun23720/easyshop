@extends('backend.master')



@section('content')

<form action="{{route('backend.storecustomer')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Customer Name</label>
        <input type="name" class="form-control" id="name" name="customer_name" required>
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address" name="customer_email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    {{-- {{-- <div class="mb-3">
        <label for="date" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" id="date" name="customer_dob">
      </div>
    <div class="mb-3">
      <label for="number" class="form-label">Mobile Number</label>
      <input type="number" class="form-control" id="number" name="customer_number">
    </div> --}}
    <div class="mb-3">
        <label for="image" class="form-label">Customer image</label>
        <input type="file" class="form-control" id="exampleInputPassword1" name="customer_image">
      </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

  @endsection
