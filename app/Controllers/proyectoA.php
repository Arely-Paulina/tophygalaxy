<?php namespace App\Controllers;

use App\Models\tophyModel;
use App\Models\publicacionModel;
use App\Models\comentarioModel;

class ProyectoA extends BaseController
{
	public function indexA()
	{
		$request=\Config\Services::request();
		$nickname=$request->getPost('nickname');
		$correoElectronico=$request->getPost('correoElectronico');
		$contrasenia=$request->getPost('contrasenia');

		$data = [
    			'nickname' => $nickname,
    			'tipo'=>'Administrador',
    			'correoElectronico'=> $correoElectronico,
    			'contrasenia'	=> $contrasenia
				];
		$variable=new tophyModel($db);

		$variable->insert($data);
		return view('cabeceraPrincipalA').view('navPrincipalA').view('sectionA').view('navPrincipalMA').view('pieU');
	}

		public function inicioSesion(){
		return view('inicioSesionC').view('cuerpoISA');

	}


	public function registro(){
		return view('cabeceraRegistro').view('cuerpoRegistroA');
	}

	public function usuarios(){
		$variable=new tophyModel($db);
		$info['osito']=$variable->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navU').view('usuario').view('navPrincipalMA').view('pieU');
	}


	public function modificar(){
		$variable=new publicacionModel($db);
		$request= \Config\Services::request();
		$idPublicacion=$request->getPost('idPublicacion');
		$idUsuario=$request->getPost('autor');
		$titulo=$request->getPost('titulo');
		$sinopsis=$request->getPost('sinopsis');
		$tipo=$request->getPost('tipo');
		$categoria=$request->getPost('categoria');
		$fecha=$request->getPost('fecha');
		$contenido=$request->getPost('contenido');
		$imagen=$this->request->getFile('imagen');
		if($imagen->isValid()){
			$imagen->move('./upload');
			$name=$imagen->getName();
		}

		$data=[
			'idPublicacion'=>$idPublicacion,
			'idUsuario'=>$idUsuario,
			'titulo'=>$titulo,
			'sinopsis'=>$sinopsis,
			'tipo'=>$tipo,
			'categoria'=>$categoria,
			'fecha'=>$fecha,
			'contenido'=>$contenido,
			'imagen'=>$name
		];

		$variable->update($idPublicacion,$data);

		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Videojuegos')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navVAd').view('contenidoNVA').view('navPrincipalMA').view('pieU');


	}

	public function guardar(){
		$variable=new tophyModel($db);
		$request= \Config\Services::request();
		$id=$request->getPost('id');
		$nickname=$request->getPost('nickname');
		$tipo=$request->getPost('tipo');
		$correoElectronico=$request->getPost('correoElectronico');
		$contrasenia= $request->getPost('contrasenia');
		$imagen=$this->request->getFile('imagen');
		if($imagen->isValid()){
			$imagen->move('./upload');
			$name=$imagen->getName();
		}

		$data = [
				'idUsuario'=>$id,
    			'nickname' => $nickname,
    			'tipo'=>$tipo,
    			'correoElectronico'=> $correoElectronico,
    			'contrasenia'	=> $contrasenia,
    			'imagen'=> $name
				];
		$variable->update($id,$data);
		
		$info['osito']=$variable->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navU').view('usuario').view('navPrincipalMA').view('pieU');


	}

	public function login(){
		$request=\Config\Services::request();
		$correoElectronico=$request->getPost('correoElectronico');
		$contrasenia=$request->getPost('contrasenia');
		$variable=new tophyModel();

		$datos=$variable->obtenerUsuario(['correoElectronico'=>$correoElectronico]);

		if(count($datos)> 0 && $contrasenia===$datos[0]['contrasenia'] && $datos[0]['tipo']=='Administrador'){
			
			$data=[
				"idUsuario"=>$datos[0]['idUsuario'],
				"nickname"=>$datos[0]['nickname'],
				"correoElectronico"=>$datos[0]['correoElectronico'],
				"contrasenia"=>$datos[0]['contrasenia'],
				"imagen"=>$datos[0]['imagen']

			];

			$session=session();
			$session->set($data);
			return view('cabeceraPrincipalA').view('navPrincipalA').view('sectionA').view('navPrincipalMA').view('pieU');
		}else{
			return view('inicioSesionC').view('cuerpoISA');
		}
	}

	public function salir(){
		$session=session();
		$session->destroy();
		return view('inicioSesionC').view('cuerpoISA');
		

	}

	public function borrar(){
		$variable=new tophyModel($db);
		$request= \Config\Services::request();
		$idUsuario=$request->getPostGet('id');
		$variable->delete($idUsuario);
		$info['osito']=$variable->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navU').view('usuario').view('navPrincipalMA').view('pieU');
	}

	public function eliminar(){
		$variable=new publicacionModel($db);
		$request=\Config\Services::request();
		$idPublicacion=$request->getPostGet('id');
		$variable->delete($idPublicacion);
		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Videojuegos')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navVAd').view('contenidoNVA',$info).view('navPrincipalMA').view('pieU');


	}

		public function comentar(){
		$variable=new comentarioModel($db);
		$nueva=new publicacionModel($db);
		$request=\Config\Services::request();
		$fecha=date('Y-m-d');
		$autor=session('idUsuario');
		$contenido=$request->getPost('contenido');
		$idPublicacion=$request->getPost('idPublicacion');
		$data=[
			'fecha'=>$fecha,
			'autor'=>$autor,
			'contenido'=>$contenido,
			'idPublicacion'=>$idPublicacion
		];
		$variable->insert($data);
		$valor['oso']=$variable->where('idPublicacion', $idPublicacion)->findAll();
		$info['osito']=$nueva->where('idPublicacion',$idPublicacion)->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA', $info).view('navVAd').view('ver').view('comentariosPA').view('vercomentariosA', $valor).view('navPrincipalMA').view('pieU');
		echo "a".$idPublicacion;
	}


	public function eliminarComentario(){
		$nueva=new publicacionModel($db);
		$variable=new comentarioModel($db);
		$request=\Config\Services::request();
		$idComentario=$request->getPostGet('id');
		$variable->delete($idComentario);
		$info['osito']=$nueva->where('tipo','Noticias')->where('categoria', 'Videojuegos')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navVAd').view('contenidoNVA').view('navPrincipalMA').view('pieU');
	}

	public function editar(){
		$variable=new tophyModel($db);
		$request= \Config\Services::request();
		$idUsuario=$request->getPostGet('id');
		$users=$variable->find([$idUsuario]);
		$users=array('users'=>$users);
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navU').view('editar',$users).view('navPrincipalMA').view('pieU');

	}
	public function publicar(){
		$request=\Config\Services::request();
		$titulo=$request->getPost('titulo');
		$sinopsis=$request->getPost('sinopsis');
		$tipo=$request->getPost('tipo');
		$categoria=$request->getPost('categoria');
		$fecha=$request->getPost('fecha');
		$contenido=$request->getPost('contenido');
		$idUsuario=$request->getPost('autor');
		$imagen=$this->request->getFile('imagen');
		if($imagen->isValid()){
			$imagen->move('./upload');
			$name=$imagen->getName();
		}

		$data = [
    			'titulo' =>$titulo,
    			'fecha'=>$fecha,
    			'tipo'=> $tipo,
    			'categoria'	=> $categoria,
    			'contenido'=>$contenido,
    			'idUsuario'=>$idUsuario,
    			'sinopsis'=>$sinopsis,
    			'imagen'=>$name
				];
		$variable=new publicacionModel($db);

		$variable->insert($data);
		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Videojuegos')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navVAd').view('contenidoNVA',$info).view('navPrincipalMA').view('pieU');

	}

	public function ver(){
		$variable=new publicacionModel($db);
		$comentarios=new comentarioModel($db);
		$request=\Config\Services::request();
		$idPublicacion=$request->getPostGet('id');
		$lista['oso']=$comentarios->where('idPublicacion', $idPublicacion)->findAll();
		$info['osito']=$variable->where('idPublicacion', $idPublicacion)->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA', $info).view('navVAd').view('ver').view('comentariosPA').view('vercomentariosA', $lista).view('navPrincipalMA').view('pieU');
	}

	public function editarP(){
		$variable=new publicacionModel($db);
		$request=\Config\Services::request();
		$idPublicacion=$request->getPostGet('id');
		$publicacion=$variable->find([$idPublicacion]);
		$publicacion=array('publicacion'=>$publicacion);
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navVAd').view('contenidoPublicacionAE',$publicacion).view('navPrincipalMA').view('pieU');
	}

	public function buscar(){
		$variable=new publicacionModel($db);
		$request=\Config\Services::request();
		$titulo=$request->getPost('buscar');
		$info['osito']=$variable->where('titulo',$titulo)->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navVAd').view('buscarA',$info).view('navPrincipalMA').view('pieU');
	}


	public function noticiasVA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Videojuegos')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navVAd').view('contenidoNVA').view('navPrincipalMA').view('pieU');
	}

	public function n1VA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navVAd').view('contenidoN1V').view('opciones').view('navPrincipalM').view('pieU');
	}

	public function n2VA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navVAd').view('contenidoN2V').view('opciones').view('navPrincipalMA').
		view('pieU');
	}

	public function n3VA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navVAd').view('contenidoN3V').view('opciones').view('navPrincipalMA').
		view('pieU');
	}

	public function publicacionA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navVAd').view('contenidoPublicacionA').view('navPrincipalMA').view('pieU');
	}

	public function reseñasVA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Resenias')->where('categoria', 'Videojuegos')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navVRA').view('contenidoRVA').view('navPrincipalMA').view('pieU');
	}

	public function r1VA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navVRA').view('contenidoR1V').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function r2VA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navVRA').view('contenidoR2V').view('opciones').view('navPrincipalMA').view('pieU');
	}

	public function r3VA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navVRA').view('contenidoR3V').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function articulosVA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Articulos')->where('categoria', 'Videojuegos')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navVAA').view('contenidoAVA').view('navPrincipalMA').view('pieU');
	}
	public function a1VA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navVAA').view('contenidoA1V').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function a2VA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navVAA').view('contenidoA2V').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function a3VA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navVAA').view('contenidoA3V').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function noticiasTA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Tecnologia')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navTAA').view('contenidoNTA').view('navPrincipalMA').view('pieU');
	}
	public function n1TA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navTAA').view('contenidoN1T').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function n2TA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navTAA').view('contenidoN2T').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function n3TA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navTAA').view('contenidoN3T').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function reseñasTA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Resenias')->where('categoria', 'Tecnologia')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navTRA').view('contenidoRTA').view('navPrincipalMA').view('pieU');
	}
	public function r1TA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navTRA').view('contenidoR1T').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function r2TA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navTRA').view('contenidoR2T').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function r3TA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navTRA').view('contenidoR3T').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function articulosTA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Articulos')->where('categoria', 'Tecnologia')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navTAAd').view('contenidoATA').view('navPrincipalMA').view('pieU');
		
	}
	public function a1TA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navTAAd').view('contenidoA1T').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function a2TA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navTAAd').view('contenidoA2T').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function a3TA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navTAAd').view('contenidoA3T').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function noticiasCA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Comics')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navCAd').view('contenidoNCA').view('navPrincipalMA').view('pieU');
	}
	public function n1CA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navCAd').view('contenidoN1C').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function n2CA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navCAd').view('contenidoN2C').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function n3CA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navCAd').view('contenidoN3C').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function reseñasCA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Resenias')->where('categoria', 'Comics')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navCRA').view('contenidoRCA').view('navPrincipalMA').view('pieU');
	}
	public function r1CA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navCRA').view('contenidoR1C').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function r2CA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navCRA').view('contenidoR2C').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function r3CA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navCRA').view('contenidoR3C').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function articulosCA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Articulos')->where('categoria', 'Comics')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navCAA').view('contenidoACA').view('navPrincipalMA').view('pieU');
	}
	public function a1CA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navCAA').view('contenidoA1C').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function a2CA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navCAA').view('contenidoA2C').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function a3CA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navCAA').view('contenidoA3C').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function noticiasPA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Peliculas')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navPAd').view('contenidoNPA').view('navPrincipalMA').view('pieU');

	}
	public function n1PA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navPAd').view('contenidoN1P').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function n2PA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navPAd').view('contenidoN2P').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function n3PA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navPAd').view('contenidoN3P').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function reseñasPA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Resenias')->where('categoria', 'Peliculas')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navPRA').view('contenidoRPA').view('navPrincipalMA').view('pieU');

	}
	public function r1PA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navPRA').view('contenidoR1P').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function r2PA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navPRA').view('contenidoR2P').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function r3PA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navPRA').view('contenidoR3P').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function articulosPA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Articulos')->where('categoria', 'Peliculas')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navPAA').view('contenidoAPA').view('navPrincipalMA').view('pieU');
	}
	public function a1PA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navPAA').view('contenidoA1P').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function a2PA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navPAA').view('contenidoA2P').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function a3PA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navPAA').view('contenidoA3P').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function noticiasSA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Series')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navSAd').view('contenidoNSA').view('navPrincipalMA').view('pieU');
	}
	public function n1SA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navSAd').view('contenidoN1S').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function n2SA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navSAd').view('contenidoN2S').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function n3SA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navSAd').view('contenidoN3S').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function reseñasSA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Resenias')->where('categoria', 'Series')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navSRA').view('contenidoRSA').view('navPrincipalMA').view('pieU');
	}
	public function r1SA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navSRA').view('contenidoR1S').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function r2SA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navSRA').view('contenidoR2S').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function r3SA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navSRA').view('contenidoR3S').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function articulosSA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Articulos')->where('categoria', 'Series')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navSAA').view('contenidoASA').view('navPrincipalMA').view('pieU');

	}
	public function a1SA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navSAA').view('contenidoA1S').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function a2SA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navSAA').view('contenidoA2S').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function a3SA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navSAA').view('contenidoA3S').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function noticiasAA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Anime')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navAAd').view('contenidoNAA').view('navPrincipalMA').view('pieU');

	}
	public function n1AA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navAAd').view('contenidoN1A').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function n2AA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navAAd').view('contenidoN2A').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function n3AA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navAAd').view('contenidoN3A').view('opciones').view('navPrincipalM').view('pieU');
	}
	public function reseñasAA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Resenias')->where('categoria', 'Anime')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navRA').view('contenidoRAA').view('navPrincipalMA').view('pieU');

	}
	public function r1AA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navRA').view('contenidoR1A').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function r2AA(){
		return view('cabeceraPrincipal').view('navPrincipalA').view('navRA').view('contenidoR2A').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function r3AA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navRA').view('contenidoR3A').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function articulosAA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Articulos')->where('categoria', 'Anime')->findAll();
		return view('cabeceraPrincipalA').view('navPrincipalA',$info).view('navAAA').view('contenidoAAA').view('navPrincipalMA').view('pieU');
	}
	public function a1AA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navAAA').view('contenidoA1A').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function a2AA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navAAA').view('contenidoA2A').view('opciones').view('navPrincipalMA').view('pieU');
	}
	public function a3AA(){
		return view('cabeceraPrincipalA').view('navPrincipalA').view('navAAA').view('contenidoA3A').view('opciones').view('navPrincipalMA').view('pieU');
	}
	//--------------------------------------------------------------------

}
