<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Default') | Panel de administración |</title>
<link rel="stylesheet"  href="{{asset('plugings/bootstrap-4.3.1/css/bootstrap.css')}}">
</head>
<body>

	<div style="width: 1100px;height: 400px;position: absolute;margin-left: 100px">
@include('admin.template.partials.nav')
<br>

<div class="card">
<div class="card card-header">@yield('titulo','Default')</div>
<div class="card card-body">
	
<section>
	@include('flash::message')

	@include('admin.template.partials.errors')
	
	@yield('content')
</section>	
	
</div>
</div>









<footer class="card card-footer" style="margin-top: 50px">
	Todos los derechos reservados @2019 
	
</footer>

</div>

<!--
<script src="{{ asset('plugings/jquery/jquery-3.3.1.slim.min.js') }}"></script>


<script src="{{ asset('plugings/popper/popper.min.js') }}"></script>
<script src="{{ asset('plugings/bootstrap-4.3.1/js/bootstrap.min.js') }}"></script>
-->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>