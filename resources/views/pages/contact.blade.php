@extends('layouts.master')

@section('content')

@foreach($people as $people)
 {{ $people }}
 @endforeach

@endsection