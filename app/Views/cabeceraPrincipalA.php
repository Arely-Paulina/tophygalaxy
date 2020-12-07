<?php ?> 
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/pushbar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/mbr-additional-2.css">


    <title>Tophy Galaxy</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/images/logo.ico" />
</head>

<body>

	<div>
		<header>
			<nav>
                <a href="<?php echo base_url();?>/index.php/ProyectoA/indexA" class="banner "><img class="logo" src="<?php echo base_url(); ?>/assets/images/logo.png"></a>
                
                	<div class="contenedorDiv">
                		
    						<form class="barra" method="POST" action="<?php echo base_url();?>/index.php/ProyectoA/buscar" role="form">
                            <input  name="buscar" id="buscar" type="text" placeholder="Search">
                            <button type="submit" id="btn-buscar"><i class="fa fa-search"></i></button>
                        </form>
  						
                	</div>
                	<div class="contenedorDiv2">
  						<button type="button" class="btn-sesion" data-toggle="dropdown">
    						<span class="caret"><i class="fa fa-user"></i></span>
  						</button>
  						<div class="dropdown-menu">
    						<a class="dropdown-item" href="<?php echo base_url();?>/index.php/ProyectoA/inicioSesion">Iniciar sesión</a>
    						<a class="dropdown-item" href="<?php echo base_url();?>/index.php/ProyectoA/registro">Registrarse</a>
                             <a class="dropdown-item" href="<?php echo base_url();?>/index.php/ProyectoA/salir">Salir</a>

  						</div>
					</div>
                	<button class="btn-menu" data-pushbar-target="pushbar-menu"><i class="fas fa-bars"></i></button>
            </nav>

        </header>
