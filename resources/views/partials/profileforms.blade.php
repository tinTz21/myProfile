<div class="form-group">
	{!! Form::label('title', 'Add Profile Title') !!}
	{!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('name', 'Add Your name:') !!}
	{!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('education','Add Your Education level') !!}
	{!! Form::text('education',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('professional','Add Your Professional') !!}
	{!! Form::text('professional',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('hobies','What is your Hobie') !!}
	{!! Form::text('hobies',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($submit,['class'=>'btn btn-primary']) !!}
</div>