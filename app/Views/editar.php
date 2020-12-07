    <div class="container">
        <?php
        if(isset($users)){

            $id=$users[0]['idUsuario'];
            $nickname=$users[0]['nickname'];
            $tipo=$users[0]['tipo'];
            $correoElectronico=$users[0]['correoElectronico'];
            $contrasenia=$users[0]['contrasenia'];
            $imagen=$users[0]['imagen'];
           
             }else{
                $id="";
                $nickname="";
                $tipo="";
                $correoElectronico="";
                $contrasenia="";
                $imagen="";
               
             }

            ?>
       
        <div class="row justify-content-center pt-3.5 mt-5 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                <form method="POST" action="<?php echo base_url();?>/index.php/ProyectoA/guardar" role="form" onsubmit="return seguridad();" enctype="multipart/form-data">
                    <div class="form-group text-center">
                        <h3 class="text-center huno">Editar usuario</h3>
                        
                    </div>
                  <?php

                    echo '<div class="form-group mx-sm-4 pt-3">';
                    echo '<h6 class="huno">Imagen:</h6>';    
                    echo '<input type="file" class="form-control" name="imagen" id="imagen" value='.$imagen.' >
                    </div>';

                    echo '<div class="form-group mx-sm-4 pt-3">';
                    echo '<h6 class="huno">Id:</h6>';    
                    echo '<input type="text" class="form-control" name="id" id="id" value='.$id.' required="">
                    </div>';

                    echo '<div class="form-group mx-sm-4 pt-3">';
                    echo '<h6 class="huno">Nickname:</h6>';    
                    echo '<input type="text" class="form-control" name="nickname" id="nickname" value='.$nickname.' required="">
                    </div>';


                    echo '<div class="form-group mx-sm-4">';
                    echo '<h6 class="huno">Tipo:</h6>'; 
                    echo '<select class="form-control" name="tipo" id="tipo" value='.$tipo.'>';
                    echo '<option>Administrador</option>';
                    echo '<option>Normal</option>';
                    echo '</select>';  
                    echo '</div>';

                    echo '<div class="form-group mx-sm-4 ">';
                    echo '<h6 class="huno">Correo electrónico:</h6>';    
                    echo ' <input type="email" class="form-control" name="correoElectronico" id="correoElectronico" value='.$correoElectronico.' required="">
                    </div>';  

                    echo '<div class="form-group mx-sm-4">';
                    echo '<h6 class="huno">Contraseña:</h6>';    
                     echo '<input type="password" class="form-control" name="contrasenia" id="contrasenia" value='.$contrasenia.'.required="">
                    </div>';   

                   ?>

                   <div class="form-group mx-sm-4">
                        
                        <input type="submit" class="ingresar ingresar-block" value="Guardar" name="">
                        
                    </div>
                </form>
            </div>
            
        </div>

    </div>


