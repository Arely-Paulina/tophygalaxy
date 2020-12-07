<?php namespace App\Controllers;

use App\Models\tophyModel;
use App\Models\publicacionModel;
use App\Models\comentarioModel;

class Proyecto extends BaseController
{
	public function index()
	{
		$request=\Config\Services::request();
		$nickname=$request->getPost('nickname');
		$correoElectronico=$request->getPost('correoElectronico');
		$contrasenia=$request->getPost('contrasenia');

		$data = [
    			'nickname' => $nickname,
    			'tipo'=>'Normal',
    			'correoElectronico'=> $correoElectronico,
    			'contrasenia'	=> $contrasenia
				];
		$variable=new tophyModel($db);

		$variable->insert($data);
		return view('cabeceraPrincipal').view('navPrincipal').view('sectionU').view('navPrincipalM').view('pieU');
	}

	public function perfil(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navA').view('perfil').view('navPrincipalM').view('pieU');
	}

	public function buscar(){
		$variable=new publicacionModel($db);
		$request=\Config\Services::request();
		$titulo=$request->getPost('buscar');
		$info['osito']=$variable->where('titulo',$titulo)->findAll();
		return view('cabeceraPrincipal').view('navPrincipal').view('navV').view('buscar',$info).view('navPrincipalM').view('pieU');
	}

	public function actualizar(){
		$variable=new tophyModel($db);
		$request=\Config\Services::request();
		$idUsuario=$request->getPost('idUsuario');
		$nickname=$request->getPost('nickname');
		$tipo=$request->getPost('tipo');
		$correoElectronico=$request->getPost('correoElectronico');
		$contrasenia=$request->getPost('contrasenia');
		$imagen=$this->request->getFile('imagen');
		if($imagen->isValid()){
			$imagen->move('./upload');
			$name=$imagen->getName();
		}

		$data = [
    			'nickname' => $nickname,
    			'tipo'=>$tipo,
    			'correoElectronico'=> $correoElectronico,
    			'contrasenia'	=> $contrasenia,
    			'imagen'=> $name
				];
		
		$variable->update($idUsuario,$data);
		return view('inicioSesionC').view('cuerpoIS');

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
    			'tipo'=> 'Resenias',
    			'categoria'	=> $categoria,
    			'contenido'=>$contenido,
    			'idUsuario'=>$idUsuario,
    			'sinopsis'=>$sinopsis,
    			'imagen'=>$name
				];
		$variable=new publicacionModel($db);

		$variable->insert($data);
		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Videojuegos')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal').view('navV').view('contenidoNV',$info).view('navPrincipalM').view('pieU');

	}

	public function login(){
		$request=\Config\Services::request();
		$correoElectronico=$request->getPost('correoElectronico');
		$contrasenia=$request->getPost('contrasenia');
		$variable=new tophyModel();

		$datos=$variable->obtenerUsuario(['correoElectronico'=>$correoElectronico]);

		if(count($datos)> 0 && $contrasenia===$datos[0]['contrasenia']){
			
			$data=[
				"idUsuario"=>$datos[0]['idUsuario'],
				"nickname"=>$datos[0]['nickname'],
				"correoElectronico"=>$datos[0]['correoElectronico'],
				"contrasenia"=>$datos[0]['contrasenia'],
				"imagen"=>$datos[0]['imagen']

			];

			$session=session();
			$session->set($data);
			return view('cabeceraPrincipal').view('navPrincipal').view('sectionU').view('navPrincipalM').view('pieU');
		}else{
			return view('inicioSesionC').view('cuerpoIS');
		}
	}

	public function salir(){
		$session=session();
		$session->destroy();
		return view('inicioSesionC').view('cuerpoIS');

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
		return view('cabeceraPrincipal').view('navPrincipal', $info).view('navV').view('ver').view('comentariosP').view('vercomentarios', $valor).view('navPrincipalM').view('pieU');
		echo "a".$idPublicacion;
	}

	public function inicioSesion(){
		return view('inicioSesionC').view('cuerpoIS');

	}

	public function eliminar(){
		$nueva=new publicacionModel($db);
		$variable=new comentarioModel($db);
		$request=\Config\Services::request();
		$idComentario=$request->getPostGet('id');
		$variable->delete($idComentario);
		$info['osito']=$nueva->where('tipo','Noticias')->where('categoria', 'Videojuegos')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navV').view('contenidoNV').view('navPrincipalM').view('pieU');
	}

	public function ver(){
		$variable=new publicacionModel($db);
		$comentarios=new comentarioModel($db);
		$request=\Config\Services::request();
		$idPublicacion=$request->getPostGet('id');
		$lista['oso']=$comentarios->where('idPublicacion', $idPublicacion)->findAll();
		$info['osito']=$variable->where('idPublicacion', $idPublicacion)->findAll();
		return view('cabeceraPrincipal').view('navPrincipal', $info).view('navV').view('ver').view('comentariosP').view('vercomentarios', $lista).view('navPrincipalM').view('pieU');
	}

	public function registro(){
		return view('cabeceraRegistro').view('cuerpoRegistro');
	}

	public function noticiasV(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Videojuegos')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navV').view('contenidoNV').view('navPrincipalM').view('pieU');
	}

	public function n1V(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navV').view('contenidoN1V').view('comentarios').view('navPrincipalM').view('pieU');
	}

	public function n2V(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navV').view('contenidoN2V').view('comentarios').view('navPrincipalM').
		view('pieU');
	}

	public function n3V(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navV').view('contenidoN3V').view('comentarios').view('navPrincipalM').
		view('pieU');
	}

	public function publicacion(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navVR').view('contenidoPublicacion').view('navPrincipalM').view('pieU');
	}

	public function reseñasV(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Resenias')->where('categoria', 'Videojuegos')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navVR').view('contenidoRV').view('navPrincipalM').view('pieU');
	}

	public function r1V(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navVR').view('contenidoR1V').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function r2V(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navVR').view('contenidoR2V').view('comentariosR').view('navPrincipalM').view('pieU');
	}

	public function r3V(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navVR').view('contenidoR3V').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function articulosV(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Articulos')->where('categoria', 'Videojuegos')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navVA').view('contenidoAV').view('navPrincipalM').view('pieU');
	}
	public function a1V(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navVA').view('contenidoA1V').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function a2V(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navVA').view('contenidoA2V').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function a3V(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navVA').view('contenidoA3V').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function noticiasT(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Tecnologia')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navT').view('contenidoNT').view('navPrincipalM').view('pieU');
	}
	public function n1T(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navT').view('contenidoN1T').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function n2T(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navT').view('contenidoN2T').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function n3T(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navT').view('contenidoN3T').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function reseñasT(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Resenias')->where('categoria', 'Tecnologia')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navTR').view('contenidoRT').view('navPrincipalM').view('pieU');
	}
	public function r1T(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navTR').view('contenidoR1T').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function r2T(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navTR').view('contenidoR2T').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function r3T(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navTR').view('contenidoR3T').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function articulosT(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Articulos')->where('categoria', 'Tecnologia')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navTA').view('contenidoAT').view('navPrincipalM').view('pieU');
	}
	public function a1T(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navTA').view('contenidoA1T').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function a2T(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navTA').view('contenidoA2T').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function a3T(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navTA').view('contenidoA3T').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function noticiasC(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Comics')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navC').view('contenidoNC').view('navPrincipalM').view('pieU');
	}
	public function n1C(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navC').view('contenidoN1C').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function n2C(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navC').view('contenidoN2C').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function n3C(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navC').view('contenidoN3C').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function reseñasC(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Resenias')->where('categoria', 'Comics')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navCR').view('contenidoRC').view('navPrincipalM').view('pieU');
	}
	public function r1C(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navCR').view('contenidoR1C').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function r2C(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navCR').view('contenidoR2C').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function r3C(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navCR').view('contenidoR3C').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function articulosC(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Articulos')->where('categoria', 'Comics')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navCA').view('contenidoAC').view('navPrincipalM').view('pieU');
	}
	public function a1C(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navCA').view('contenidoA1C').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function a2C(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navCA').view('contenidoA2C').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function a3C(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navCA').view('contenidoA3C').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function noticiasP(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Peliculas')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navP').view('contenidoNP').view('navPrincipalM').view('pieU');
	}
	public function n1P(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navP').view('contenidoN1P').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function n2P(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navP').view('contenidoN2P').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function n3P(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navP').view('contenidoN3P').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function reseñasP(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Resenias')->where('categoria', 'Peliculas')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navPR').view('contenidoRP').view('navPrincipalM').view('pieU');
	}
	public function r1P(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navPR').view('contenidoR1P').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function r2P(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navPR').view('contenidoR2P').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function r3P(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navPR').view('contenidoR3P').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function articulosP(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Articulos')->where('categoria', 'Peliculas')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navPA').view('contenidoAP').view('navPrincipalM').view('pieU');
	}
	public function a1P(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navPA').view('contenidoA1P').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function a2P(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navPA').view('contenidoA2P').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function a3P(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navPA').view('contenidoA3P').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function noticiasS(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Series')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navS').view('contenidoNS').view('navPrincipalM').view('pieU');
	}
	public function n1S(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navS').view('contenidoN1S').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function n2S(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navS').view('contenidoN2S').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function n3S(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navS').view('contenidoN3S').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function reseñasS(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Resenias')->where('categoria', 'Series')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navSR').view('contenidoRS').view('navPrincipalM').view('pieU');
	}
	public function r1S(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navSR').view('contenidoR1S').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function r2S(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navSR').view('contenidoR2S').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function r3S(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navSR').view('contenidoR3S').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function articulosS(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Articulos')->where('categoria', 'Series')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navSA').view('contenidoAS').view('navPrincipalM').view('pieU');
	}
	public function a1S(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navSA').view('contenidoA1S').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function a2S(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navSA').view('contenidoA2S').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function a3S(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navSA').view('contenidoA3S').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function noticiasA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Anime')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navA').view('contenidoNA').view('navPrincipalM').view('pieU');
	}
	public function n1A(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navA').view('contenidoN1A').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function n2A(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navA').view('contenidoN2A').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function n3A(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navA').view('contenidoN3A').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function reseñasA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Resenias')->where('categoria', 'Anime')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navAR').view('contenidoRA').view('navPrincipalM').view('pieU');
	}
	public function r1A(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navAR').view('contenidoR1A').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function r2A(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navAR').view('contenidoR2A').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function r3A(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navAR').view('contenidoR3A').view('comentariosR').view('navPrincipalM').view('pieU');
	}
	public function articulosA(){
		$variable=new publicacionModel($db);
		$info['osito']=$variable->where('tipo','Noticias')->where('categoria', 'Anime')->findAll();
		return view('cabeceraPrincipal').view('navPrincipal',$info).view('navAA').view('contenidoAA').view('navPrincipalM').view('pieU');
	}
	public function a1A(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navAA').view('contenidoA1A').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function a2A(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navAA').view('contenidoA2A').view('comentarios').view('navPrincipalM').view('pieU');
	}
	public function a3A(){
		return view('cabeceraPrincipal').view('navPrincipal').view('navAA').view('contenidoA3A').view('comentarios').view('navPrincipalM').view('pieU');
	}
	//--------------------------------------------------------------------

}
