<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class MasterMindController extends Controller
{
	public function mostrar(Request $request){

		return view("mastermind",['nombre'=>$request->input("nombre")]);
	}
	public function cargarJuego(Request $request){
		session_start();

		$colores = array("amarillo","rojo","verde","naranja","azul","azulClarito","gris","morado");
		shuffle($colores);

		$coloresMezclados = array_slice($colores,0, Session::get("longitud"));
		for ($i=0; $i <count($coloresMezclados) ; $i++) { 
			echo $coloresMezclados[$i];
		}




		Session::put ("nombre",$request->input("nombre"));
		Session::put ("longitud", $request->input('longitud'));
		Session::put ("numColores", $request->input('numColores'));
		Session::put ("repetido",$request->input('repetido'));
		Session::put ("intentos",$request->input('intentos'));

		Session::put ("colores", $colores);
		Session::put ("color",$request->input('color'));
		Session::put ("coloresMezclados", $coloresMezclados);
		
		



		return view("mastermind");
	}


	public function comprobar(Request $request){
		session_start();

		$coloresMezclados = Session::get("coloresMezclados");

		$coloresJugador = [];
		$long = Session::get("longitud");
		$aciertos=0;

		for ($i=0; $i < $long ; $i++) { 
			array_push($coloresJugador, $request->input("input".$i));
			echo "<br>";

			if (array_search($coloresJugador[$i], $coloresMezclados)==$i) {
				$aciertos++;

			}
		}
		Session::put ("aciertos", $aciertos);

		return view("mastermind");

	}


}