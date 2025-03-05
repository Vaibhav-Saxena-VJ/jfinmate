@extends('layouts.header')

@section('content')
<h2>Create Blog</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Title:</label>
    <input type="text" name="title" value="{{ old('title') }}" required>

    <label>Category:</label>
    <select name="category_id" required>
        <option value="">Select Category</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <label>Description:</label>
    <textarea name="description" id="editor">{{ old('description') }}</textarea>

    <label>Image:</label>
    <input type="file" name="image">

    <label>Meta Title:</label>
    <input type="text" name="meta_title" value="{{ old('meta_title') }}">

    <label>Meta Keywords:</label>
    <input type="text" name="meta_keyword" value="{{ old('meta_keyword') }}">

    <label>Meta Description:</label>
    <textarea name="meta_description">{{ old('meta_description') }}</textarea>

    <label>Status:</label>
    <select name="status">
        <option value="draft">Draft</option>
        <option value="published">Published</option>
    </select>

    <button type="submit">Create Blog</button>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js"></script>

<!-- Initialize TinyMCE -->
<script>
    tinymce.init({
        selector: '#editor',  // Change this if your selector is different
        plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table help',
        toolbar: 'undo redo | fontselect fontsizeselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | preview code',
        height: 400,
        menubar: true,
        branding: false,

        // Apply Poppins font in TinyMCE
        content_style: `
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap');
            body { font-family: 'Poppins', sans-serif !important; }
            p, h1, h2, h3, h4, h5, h6 { font-family: 'Poppins', sans-serif !important; }
        `,

        font_formats: 
            "Poppins=Poppins,sans-serif; " +
            "Arial=arial,helvetica,sans-serif; " +
            "Courier New=courier new,courier,monospace; " +
            "Georgia=georgia,palatino,serif; " +
            "Times New Roman=times new roman,times,serif; " +
            "Verdana=verdana,geneva,sans-serif; " +
            "Comic Sans MS=comic sans ms,sans-serif; ",

        setup: function (editor) {
            editor.on('init', function () {
                editor.getBody().style.fontFamily = "Poppins, sans-serif"; // Ensure font applies
            });
        }
    });
</script>
@endsection
