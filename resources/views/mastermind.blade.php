@extends('layouts.default')
@section('title', 'MasterMind')
@section('content')
<h1 class="mt-5">Bienvenido a MasterMind</h1>
<img src="images/0.png">
<img src="images/1.png">
<img src="images/2.png">
<img src="images/3.png">
<img src="images/4.png">
<img src="images/5.png">
<img src="images/6.png">
<img src="images/7.png">
<?php 
	 
	$aciertos=Session::get('aciertos');

	$nombre=Session::get("nombre");
	$longitud=Session::get("longitud");
	$numColores=Session::get('numColores');
	$repetido=Session::get("repetido");
	$intentos=Session::get("intentos");

	$colores=Session::get('colores');
	$color=Session::get('color');
	$coloresMezclados=Session::get("coloresMezclados");




?>

<form action="mastermind" method="POST">

	@csrf
	<h4>Introduce un codigo</h4>

	@for ($i = 0; $i < $longitud; $i++)
	<select name="input{{$i}}">
		@for ($j = 0; $j < $numColores; $j++)
		<option value="{{$colores[$j]}}" >{{$colores[$j]}}</option>

		@endfor
		</select>
	@endfor

	<br>
	<br>

	<input type="submit" value="Comprobar">
</form>

@if(isset($aciertos))
<h1>Aciertos: {{$aciertos}}</h1>
@endif

@if(isset($nombre))

<h1>Jugador/a: {{$nombre}}</h1>
@endif

@stop
@section('scripts')

@stop