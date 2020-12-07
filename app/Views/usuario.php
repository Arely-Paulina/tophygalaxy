      <h1 class="huno pt-4">Usuarios</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Id</th>
                        <th>Nickname</th>
                        <th>Correo eléctronico</th>
                        <th>Tipo</th>
                        <th>Opciones</th>
                    </tr>
                    <tbody>
                        <tr>
                        <?php foreach($osito as $usuario){
                            
                            echo '<tr>';
                            echo '<td><img class="float-left img-fluid avatar flexible" src="'.base_url().'/upload/'.$usuario['imagen'].'"/>';
                            echo '<td>'.$usuario['idUsuario'];
                            echo '<td>'.$usuario['nickname'];
                            echo '<td>'.$usuario['correoElectronico'];
                            echo '<td>'.$usuario['tipo'];
                            echo '<td>';
                            echo '<div class="flexor">';
                              
                            ?>
                            <a class="botonSinBorde" href="<?php echo base_url();?>/index.php/ProyectoA/borrar?id=<?php echo $usuario['idUsuario']; ?>" role="button"><i class="fas fa-trash-alt"></i></a>
                            
                            <a class="botonSinBorde" href="<?php echo base_url();?>/index.php/ProyectoA/editar?id=<?php echo $usuario['idUsuario']; ?>" role="button"><i class="fa fa-edit"></i></a> 
                                <?php
                                
                                   echo ' </form>';     
                                   echo '</div>';
                                   echo '</td>';
                                
                            echo '</tr>';
                        }?>
                    </tbody>
                </thead>
                
            </table>
                
            



            
        </div>
