    <div class="container">
       
       
        <div class="row justify-content-center pt-3.5 mt-5 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                <form method="POST" action="<?php echo base_url();?>/index.php/Proyecto/actualizar" role="form" onsubmit="return seguridad();" enctype="multipart/form-data">
                    <div class="form-group text-center">
                        <h3 class="text-center huno">Editar usuario</h3>
                        <div class="form-group mx-sm-4 pt-3">
                            <img class="float-left img-fluid " src="<?php echo base_url(); ?>/upload/<?php echo session('imagen') ?>">
                        </div>
                        
                    </div>
                  <?php

                    echo '<div class="form-group mx-sm-4 pt-3">';
                      
                    echo '<input type="file" class="form-control" name="imagen" id="imagen" value='.session('imagen').' >
                    </div>';

                    echo '<div class="form-group mx-sm-4 pt-3">';
                    echo '<h6 class="huno">Id:</h6>';    
                    echo '<input type="text" class="form-control" name="idUsuario" id="idUsuario" value='.session('idUsuario').' required="">
                    </div>';

                    echo '<div class="form-group mx-sm-4 pt-3">';
                    echo '<h6 class="huno">Nickname:</h6>';    
                    echo '<input type="text" class="form-control" name="nickname" id="nickname" value='.session('nickname').' required="">
                    </div>';


                    echo '<div class="form-group mx-sm-4">';
                    echo '<h6 class="huno">Tipo:</h6>'; 
                    echo '<select class="form-control" name="tipo" id="tipo" value="">';
                    echo '<option>Normal</option>';
                    echo '</select>';  
                    echo '</div>';

                    echo '<div class="form-group mx-sm-4 ">';
                    echo '<h6 class="huno">Correo electrónico:</h6>';    
                    echo ' <input type="email" class="form-control" name="correoElectronico" id="correoElectronico" value='.session('correoElectronico').' required="">
                    </div>';  

                    echo '<div class="form-group mx-sm-4">';
                    echo '<h6 class="huno">Contraseña:</h6>';    
                     echo '<input type="password" class="form-control" name="contrasenia" id="contrasenia" value='.session('contrasenia').'.required="">
                    </div>';   

                   ?>

                   <div class="form-group mx-sm-4">
                        
                        <input type="submit" class="ingresar ingresar-block" value="Guardar" name="">
                        
                    </div>
                </form>
            </div>
            
        </div>

    </div>


