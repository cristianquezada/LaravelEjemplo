@extends('admin.template.main')


@section('title','Crear Usuario')

@section('titulo','Crear Usuario')

@section('content')
<!-- Hacer formulario-->
{!! Form::open(['route'=>'users.store','method'=>'POST']) !!}

<div class="form-group">
{!! Form::label('name','Nombre') !!}	
{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre completo','required'])!!}
</div>

<div class="form-group">
{!! Form::label('email','Correo Electrónico') !!}	
{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Correo electrónico','required'])!!}
</div>

<div class="form-group">
{!! Form::label('password','Password') !!}	
{!! Form::password('password',['class'=>'form-control','placeholder'=>'***********','required'])!!}
</div>

<div class="form-group">
	{!! Form::label('type','Tipo')!!}
	{!! Form::select('type',[''=>'Seleccione un tipo','miembro'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control','required'])!!}
</div>


<div class="form-group">
	{!!	Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

</div>


{!! Form::close() !!}


@endsection
