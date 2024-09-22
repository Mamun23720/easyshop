@extends('backend.master')

@section('content')
<br>

<h1 style="font-size: xx-large; text-align: center; font-family: 'Times New Roman', Times, serif">Shared Product List's</h1><br>

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
        <tr style="text-align: center; font-family: 'Times New Roman', Times, serif">
            <th scope="row">1</th>
            <td>image</td>
            <td style="text-align: start; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">P-Name</td>
            <td>C-Name</td>
            <td>P-Brand</td>
            <td>P-Model</td>
            <td>P-Color</td>
            <td>P-Size</td>
            <td style="color: red; font-size: larger;"><b>P-Price</b></td>
            <td>P-Discount %</td>
            <td>P-Stock</td>
            <td style="text-align: justify;"><div style="white-space: nowrap; width: 200px; overflow: hidden; text-overflow: ellipsis;">P-Description</div></td>
            <td>
                <a class="btn btn-success" href="">View</a>
                <a class="btn btn-info" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
            </td>
        </tr>

    </tbody>
</table>

@endsection