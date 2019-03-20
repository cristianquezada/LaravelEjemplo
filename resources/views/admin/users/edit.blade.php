@extends('admin.template.main')


@section('title','Editar Usuario '.$user->name)

@section('titulo','Editar Usuario '.$user->name)

@section('content')
<!-- Hacer formulario-->
{!! Form::open(['route'=>['users.update',$user->id],'method'=>'PUT']) !!}

<div class="form-group">
{!! Form::label('name','Nombre') !!}	
{!! Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Nombre completo','required'])!!}
</div>

<div class="form-group">
{!! Form::label('email','Correo Electrónico') !!}	
{!! Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'Correo electrónico','required'])!!}
</div>



<div class="form-group">
	{!! Form::label('type','Tipo')!!}
	{!! Form::select('type',['miembro'=>'Miembro','admin'=>'Administrador'],$user->type,['class'=>'form-control','required'])!!}
</div>


<div class="form-group">
	{!!	Form::submit('Editar',['class'=>'btn btn-primary'])!!}

</div>


{!! Form::close() !!}


@endsection
