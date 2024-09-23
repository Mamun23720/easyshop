@extends('backend.master')

@section('content')
    <br>
    <div>
        <a href="{{ route('backend.categoryform') }}" class="btn btn-info btn-lg"><b style="font-size: xx-large; font-family:'Times New Roman', Times, serif">Add Category</b></a>
        <br>
    </div>
    <h2 style="text-align:center"><b style=" font-size: xx-large; font-family:'Times New Roman', Times, serif">Categories ({{ $allCategory ? count($allCategory) : 0 }})</b></h2>
    <table class="table table-dark table-hover">
        <thead style="border: white">
            <tr style=" font-family:'Times New Roman', Times, serif" >
                <th scope="col">Serial</th>
                <th scope="col">Category Name</th>
                <!-- <th scope="col">Category Description</th> -->
                <th scope="col">Image</th>
                <th scope="col" style="text-align: center">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($allCategory as $key => $category)
                <tr style=" font-family:'Times New Roman', Times, serif" >
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $category->name }}</td>
                    <!-- <td>{{ $category->description }}</td> -->
                    <td style="text-align: center">
                        <img src="{{ url('/uploads/category/' . $category->image) }}" width="50px" height="50px">
                    </td>
                    <td style="text-align: center">
                        <a class="btn btn-danger" href="{{ route('backend.deleteCategory', $category->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    {{ $allCategory->links() }}
@endsection
