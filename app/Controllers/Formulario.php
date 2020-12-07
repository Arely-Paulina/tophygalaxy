<?php namespace App\Controllers;

use App\Models\personaModel;
class Formulario extends BaseController
{
	public function index()
	{
		return view('cabeceraForm').view('cuerpoForm').view('finForm');

	}

	public function object()
	{
		$request=\Config\Services::request();
		$firstName=$request->getPost('first_name');
		$lastName=$request->getPost('last_name');
		$email=$request->getPost('email');
		$phone=$request->getPost('phone');
		$password=$request->getPost('password');

		$data = [
    			'nombre' => $firstName,
    			'apellido'    => $lastName,
    			'correo'	=> $email,
    			'telefono'	=> $phone,
    			'contrasenia'	=> $password

				];
		$variable=new personaModel($db);

		$variable->insert($data);
		$info['osito']=$variable->findAll();
		return view('cabeceraForm').view('cuerpoTbl',$info).view('finForm');

	}

	public function consultaId(){
		$variable=new personaModel($db);
		$info['osito']=$variable->find([2,3]);
		return view('cabeceraForm').view('cuerpoTbl',$info).view('finForm');

	}

	public function consultaWhere(){
		$variable=new personaModel($db);
		$info['osito']=$variable->where('nombre','A')->findAll();
		return view('cabeceraForm').view('cuerpoTbl',$info).view('finForm');

	}
	

	public function consultaDelete(){
		$variable=new personaModel($db);
		$variable->where('idPersona',2)->delete();
		$info['osito']=$variable->withDeleted()->findAll();
		return view('cabeceraForm').view('cuerpoTbl',$info).view('finForm');

	}

	public function consultaUpdate(){
		$variable=new personaModel($db);
		$data = [
    			'nombre' => 'El Kevin',
    			'apellido'    => 'Perez',
    			'correo'	=> 'elkevin@gmail.com',
    			'telefono'	=> '9989006756',
    			'contrasenia'	=> 'notiene'

				];
		$variable->update(3,$data);
		$info['osito']=$variable->withDeleted()->findAll();
		return view('cabeceraForm').view('cuerpoTbl',$info).view('finForm');

	}

	

	//--------------------------------------------------------------------

}