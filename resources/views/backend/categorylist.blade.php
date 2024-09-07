@extends('backend.master')

@section('content')
<br>
<div>
    <a href="{{route('backend.categoryform')}}" class="btn btn-info btn-lg">Add Category</a>
<br>
<br>
</div>
<table class="table table-dark table-hover">
        <thead style="border: white">
          <tr>
            <th scope="col">Serial</th>
            <th scope="col">Category Name</th>
            <th scope="col">Category Description</th>
            <th scope="col">Category Image</th>
            <th scope="col" style="text-align: center">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($allCategory as $key=>$category)


          <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$category->cat_name}}</td>
            <td>{{$category->cat_description}}</td>
            <td style="text-align: center">
                <img src="{{url('/uploads/category/'. $category->cat_image)}}" width="50px" height="50px">
            </td>
            <td style="text-align: center">
                <a class="btn btn-danger" href="{{route('backend.deleteCategory',$category->id)}}">Delete</a>
              </td>
          </tr>

          @endforeach

        </tbody>
  </table>

  {{$allCategory->links()}}


@endsection
