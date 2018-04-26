@extends('layouts.master')
@section('content')

<h3>{{ $ids->title }}</h3>
<p><strong>Name:</strong> {{ $ids->name }}</p>
<p><strong>Level of education:</strong>&nbsp;{{ $ids->education }}</p>
<p><strong>Professional:</strong>&nbsp;{{ $ids->professional }}</p>
<p><strong>Hobies:</strong>&nbsp;{{ $ids->hobies }}</p> 

@endsection