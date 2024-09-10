@extends('backend.master')

@section('content')
    <br>
    <div>
        <a href="{{ route('backend.bannerform') }}" class="btn btn-info btn-lg">Add Banner</a>
        <br>
        <br>
    </div>
    <table class="table table-dark table-hover">
        <thead style="border: white">
            <tr>
                <th scope="col">Serial</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col" style="text-align: center">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($allBanner as $key => $banner)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $banner->banner_name }}</td>
                    <td>{{ $banner->banner_description }}</td>
                    <td style="text-align: center">
                        <img src="{{ url('/uploads/banner/' . $banner->banner_image) }}" width="50px" height="50px">
                    </td>
                    <td style="text-align: center">
                        <a class="btn btn-danger" href="{{ route('backend.deleteBanner', $banner->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    {{ $allBanner->links() }}
@endsection
