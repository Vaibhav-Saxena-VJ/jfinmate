@extends('layouts.header')


@section('content')
<h2>Blog List</h2>

<a href="{{ route('admin.blogs.create') }}">Create New Blog</a>

<table>
    <tr>
        <th>Title</th>
        <th>Category</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    @foreach ($blogs as $blog)
    <tr>
        <td>{{ $blog->title }}</td>
        <td>{{ $blog->category->name }}</td>
        <td>{{ ucfirst($blog->status) }}</td>
        <td>
            <a href="{{ route('admin.blogs.edit', $blog->id) }}">Edit</a> |
            <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $blogs->links() }}
@endsection
