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

<br>

<form action="mastermind" method="get">

 @csrf
 <label for="Nombre">Jugador/a</label>
 <input type="text" name="nombre">
 <br>
 <br>
 <h4>Longitud de la clave</h4>

 <input type="radio" name="longitud" value="4">4
 <input type="radio" name="longitud" value="5">5
 <br>
 <br>


 <h4>Numero de colores posibles</h4>

 <input type="radio" name="numColores" value="4">4
 <input type="radio" name="numColores" value="5">5
 <input type="radio" name="numColores" value="6">6
 <input type="radio" name="numColores" value="7">7
 <input type="radio" name="numColores" value="8">8
 <br>
 <br>

 <h4>Permitir repetidos</h4>

 <input type="radio" name="repetido" value="si">Si
 <input type="radio" name="repetido" value="no">No
 <br>
 <br>
 <h4>Numero de intentos</h4>
 <input type="number" name="intentos">

 <br>
 <br>

 <input type="submit" value="Iniciar partida">
</form>


@stop
@section('scripts')




@stop