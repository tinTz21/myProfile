@extends('layouts.master')

@section('content')
@foreach($prof as $profile)

<a href="{{ action('pagesController@show',[$profile->id]) }}"><h3>{{ $profile->title }}</h3></a>
<p>{{ $profile->name }}</p>
<p>{{ $profile->education }}</p>
<p>{{ $profile->professional }}</p>
<p>{{ $profile->hobies }}</p>

@endforeach
@endsection