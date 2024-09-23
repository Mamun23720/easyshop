@extends('backend.master')

@section('content')
<br>
<div>
    <a href="{{ route('backend.productform') }}" class="btn btn-success"><b style="font-size: xx-large; font-family:'Times New Roman', Times, serif">Add New Product </b></a>
    <br>
</div>
<h1 style="text-align: center; font-family: 'Times New Roman', Times, serif">Total Products ({{ $allProduct ? count($allProduct) : 0 }})</h1>
<table class="table table-dark table-hover">
    <thead style="border: white">
        <tr style="text-align: center; font-family: 'Times New Roman', Times, serif">
            <th scope="col">Serial</th>
            <th scope="col" style="text-align: start;">Image</th>
            <th scope="col" style="text-align: start;">Product Name</th>
            <th scope="col">Category</th>
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Color</th>
            <th scope="col">Size</th>
            <th scope="col">Price</th>
            <th scope="col">Discount(%)</th>
            <th scope="col">Stock</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($allProduct as $key => $product)
        <tr style="text-align: center; font-family: 'Times New Roman', Times, serif">
            <th scope="row">{{ $key + 1 }}</th>
            <td><img src="{{ url('/uploads/product/' . $product->image) }}" width="35px" height="35px"></td>
            <td style="text-align: start; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->model }}</td>
            <td>{{ $product->color }}</td>
            <td>{{ $product->size }}</td>
            <td style="color: red; font-size: larger;"><b>{{ $product->price }}</b></td>
            <td>{{ $product->discount }}%</td>
            <td>{{ $product->stock }}</td>
            <td style="text-align: justify;"><div style="white-space: nowrap; width: 100px; overflow: hidden; text-overflow: ellipsis;">{{ $product->description }}</div></td>
            <td>
                <a class="btn btn-success" href="{{ route('backend.viewProduct', $product->id) }}">View</a>
                <a class="btn btn-info" href="{{ route('backend.editProduct', $product->id) }}">Edit</a>
                <a class="btn btn-danger" href="{{ route('backend.deleteProduct', $product->id) }}">Delete</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

{{ $allProduct->links() }}
@endsection
