@extends('layouts.header')

@section('content')
<div class="container mt-5">
    <h2>Edit Banner</h2>

    <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Banner Title</label>
            <input type="text" name="title" class="form-control" value="{{ $banner->title }}">
        </div>

        <div class="mb-3">
            <label>Current Image</label><br>
            <img src="{{ asset('storage/' . $banner->image) }}" width="150">
        </div>

        <div class="mb-3">
            <label>Upload New Image (Optional)</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Update Banner</button>
    </form>
</div>
@endsection
