@extends('layouts.master')

@section('content')

@foreach($blog as $blog)

<a href="{{ action('pagesController1@blog') }}"><h3>{{ $blog->title }}</h3></a>
<p>{{ $blog->name }}</p>
<p>{{ $blog->education }}</p>
<p>{{ $blog->professional }}</p>
<p>{{ $blog->hobies }}</p>
@endforeach
@endsection