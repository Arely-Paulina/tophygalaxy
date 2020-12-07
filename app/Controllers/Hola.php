<?php namespace App\Controllers;

class Hola extends BaseController
{
	public function index()
	{
		return view('cabecera').view('navegacion').view('contenido').view('pie');
	}

	public function contenido2(){
		return view('cabecera').view('navegacion').view('contenido2').view('pie');

	}

	//--------------------------------------------------------------------

}
