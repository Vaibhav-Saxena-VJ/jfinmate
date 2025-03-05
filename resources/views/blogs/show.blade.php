@extends('layouts.header')

@section('content')
<h1>{{ $blog->title }}</h1>
<p>{{ $blog->description }}</p>
@endsection