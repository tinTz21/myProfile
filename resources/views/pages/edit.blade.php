@extends('layouts.master')

@section('content')

<h3>{{ $tino->title }}</h3>

{!! Form::model($tino,['method'=>'PATCH','action'=>['pagesController@update',$tino->id]]) !!}
<div class="col-md-8">
@include('partials.profileforms',['submit'=>'Save changes'])

{!! Form::model($tino,['action'=>['pagesController@destroy',$tino->id],'method'=>'DELETE']) !!}
	{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
</div>
{!! Form::close() !!}

@endsection