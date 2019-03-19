@extends('admin.template.main')

@section('title','Lista de usuarios')
@section('titulo','Lista de usuarios')

@section('content')

<a href="{{route('users.create')}}" class="btn btn-info">Registrar nuevo usuario</a><br><hr>
<table class="table table-striped">
	<thead>
	<th>ID</th>	
<th>Nombre</th>	
<th>Email</th>	
<th>Tipo</th>	
<th>Acción</th>
	</thead>
	<tbody>
		@foreach ($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>

				<td>

@if($user->type=="admin")
	<span class="badge badge-danger">{{$user->type}}</span>

@else
	<span class="badge badge-primary">{{$user->type}}</span>	

@endif
				</td>
				<td><a href="" class="btn btn-danger"></a><a href="" class="btn btn-warning"></a></td>
				</tr>
		@endforeach
	</tbody>
</table>
<!--función Paginación  -->

<div class="pagination justify-content-center">
{!! $users->links('vendor.pagination.bootstrap-4') !!}
</div>
@endsection