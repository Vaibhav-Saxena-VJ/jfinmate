@extends('layouts.header')

@section('content')
<div class="container mt-5">
    <h2>Manage Banners</h2>

    <!-- Upload Form -->
    <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Banner Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label>Banner Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload Banner</button>
    </form>

    <!-- Display Existing Banners -->
    <h3 class="mt-4">Existing Banners</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($banners as $banner)
                <tr>
                    <td>
                        <img src="{{ asset('storage/' . $banner->image) }}" width="100">
                    </td>
                    <td>{{ $banner->title }}</td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-warning">Edit</a>

                        <!-- Delete Form -->
                        <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this banner?');">
                            @csrf
                            @method('DELETE') <!-- Laravel DELETE request -->
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
