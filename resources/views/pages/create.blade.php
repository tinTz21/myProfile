@extends('layouts.master')

@section('create')

<h2>Create your profile</h2>
</br>
 
{!! Form::open(['url'=>'pages']) !!}

<div class="col-md-8">

@include('partials.profileforms',['submit'=>'Submit'])

</div>
{!! Form::close() !!}

@endsection