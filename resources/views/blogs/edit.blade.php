@extends('layouts.header')

@section('content')
    <h1>{{ isset($blog) ? 'Edit' : 'Create' }} Blog</h1>
    <form action="{{ isset($blog) ? route('admin.blogs.update', $blog->id) : route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($blog))
            @method('PUT')
        @endif
        <input type="text" name="title" value="{{ $blog->title ?? '' }}" placeholder="Title" required>
        <textarea name="description" placeholder="Description">{{ $blog->description ?? '' }}</textarea>
        <input type="file" name="img">
        <input type="text" name="meta_keyword" value="{{ $blog->meta_keyword ?? '' }}" placeholder="Meta Keywords">
        <input type="text" name="meta_title" value="{{ $blog->meta_title ?? '' }}" placeholder="Meta Title">
        <input type="text" name="meta_description" value="{{ $blog->meta_description ?? '' }}" placeholder="Meta Description">
        <input type="date" name="published_date" value="{{ isset($blog->published_at) ? \Carbon\Carbon::parse($blog->published_at)->format('Y-m-d') : '' }}">
        @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ isset($blog) && $blog->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit">{{ isset($blog) ? 'Update' : 'Create' }}</button>
    </form>
@endsection
