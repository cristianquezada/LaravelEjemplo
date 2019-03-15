<!DOCTYPE html>
<html>
<head>
	<title>{{$articulo->title}}</title>

<link rel="stylesheet" type="text/css" href="{{asset('css/general.css')}}">

</head>
<body>

Hola cristian
<br><br>


<h1>{{$articulo->title}}</h1>
<hr>
{{$articulo->content}}

<hr>
{{$articulo->users->name}} | 
{{$articulo->category->name}} | 
@foreach($articulo->tags as $tag)
{{$tag->name}}
@endforeach

</body>
</html>

