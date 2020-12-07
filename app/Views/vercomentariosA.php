<?php foreach($oso as $comentario){
	echo '<div class="container p-3 my-3 border">';
		echo '<img class="float-left img-fluid avatar flexible" src="'.base_url().'/upload/'.session('imagen').'">';
		echo '<p>'.$comentario['contenido'].'</p>';
		echo '<hr>';
		echo '<p class="fecha">Fecha:'.$comentario['fecha'].'</p>';
		
		echo '<a class="fecha" href="'.base_url().'/index.php/ProyectoA/eliminarComentario?id='.$comentario['idComentario'].'">Eliminar</a>';
	echo '</div>';
}?>
		
	
</div>