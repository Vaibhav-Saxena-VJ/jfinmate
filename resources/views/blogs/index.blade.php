@extends('layouts.header')

@section('content')
    <h1>Blogs</h1>
    <a href="{{ route('blogs.create') }}">Create New Blog</a>
    <ul>
        @foreach ($blogs as $blog)
            <li>
                <h2>{{ $blog->title }}</h2>
                <p>{{ $blog->meta_description }}</p>
                <small>Category: {{ $blog->category->name ?? 'Uncategorized' }}</small>
                <a href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
