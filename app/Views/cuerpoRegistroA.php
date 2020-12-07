<body class="inicio">
    <div class="container">
        <div class="row justify-content-center pt-3.5 mt-5 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                <form method="POST" action="<?php echo base_url();?>/index.php/ProyectoA/indexA" role="form" onsubmit="return seguridad();">
                    <div class="form-group text-center pt-3">
                        <h3 class="text-center huno">Crear cuenta</h3>
                        <a href="<?php echo base_url();?>/index.php/ProyectoA/indexA"><img class="img-fluid mx-auto d-block" src="<?php echo base_url(); ?>/assets/images/logo2.png" width="90" height="95"></a>
                    </div>

                    <div class="form-group mx-sm-4 pt-3">
                        <h6 class="huno">Nickname:</h6>
                        <input type="text" class="form-control" name="nickname" id="nickname" value="" required="">
                    </div>

                    <div class="form-group mx-sm-4 ">
                        <h6 class="huno">Correo electrónico:</h6>
                        <input type="email" class="form-control" name="correoElectronico" id="correoElectronico" value="" required="">
                    </div>

                    <div class="form-group mx-sm-4">
                        <h6 class="huno">Contraseña:</h6>
                        <input type="password" class="form-control" name="contrasenia" id="contrasenia" value="" required="">
                    </div>

                    <div class="form-group mx-sm-4 pt-4">
                        <input type="submit" class="ingresar ingresar-block" value="Registrarse" name="">   
                    </div>

                    <div class="form-group mx-sm-4">
                        
                        <a href="<?php echo base_url();?>/index.php/ProyectoA/inicioSesion"><input type="button" class="ingresar2 ingresar-block" value="Iniciar sesión" name=""></a>
                        
                    </div>
                </form>
            </div>
            
        </div>

    </div>


	
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/main.js"></script>

</body>

</html>