@extends('layouts.header')

@section('content')
    <h1>{{ isset($blog) ? 'Edit' : 'Create' }} Blog</h1>
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Title" required>
    <textarea name="description" placeholder="Description"></textarea>
    <input type="file" name="img">
    <input type="text" name="meta_keyword" placeholder="Meta Keywords">
    <input type="text" name="meta_title" placeholder="Meta Title">
    <input type="text" name="meta_description" placeholder="Meta Description">
    <input type="date" name="published_date">
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <button type="submit">Create</button>
</form>

@endsection
