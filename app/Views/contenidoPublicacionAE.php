<?php
        if(isset($publicacion)){

            $id=$publicacion[0]['idPublicacion'];
            $titulo=$publicacion[0]['titulo'];
            $fecha=$publicacion[0]['fecha'];
            $tipo=$publicacion[0]['tipo'];
            $categoria=$publicacion[0]['categoria'];
            $contenido=$publicacion[0]['contenido'];
            $idUsuario=$publicacion[0]['idUsuario'];
            $sinopsis=$publicacion[0]['sinopsis'];
            $imagen=$publicacion[0]['imagen'];

           
             }else{
                $id="";
                $titulo="";
                $fecha="";
                $tipo="";
                $categoria="";
                $contenido="";
                $idUsuario="";
                $sinopsis="";
                $imagen="";
               
             }

            ?>



 <form method="POST" action="<?php echo base_url();?>/index.php/ProyectoA/modificar" role="form" onsubmit="return seguridadPublicacion();" enctype="multipart/form-data">
            <h3 class="text-center huno pt-5">Editar publicación</h3>

            <?php 


                echo '<div class="form-group pt-3">';
                    echo '<input type="text" class="form-control" rows="9" placeholder="idPublicacion" name="idPublicacion" id="idPublicacion" value='.$id.' required="">';
                echo '</div>';

                echo '<div class="form-group pt-3">';
                    echo '<input type="text" class="form-control" placeholder="Autor" name="autor" id="autor" value='.$idUsuario.' required="">';
                echo '</div>';


                echo '<div class="form-group pt-3">';
                    echo '<input type="text" class="form-control" placeholder="Título" name="titulo" id="titulo" value='.$titulo.' required="">';
                echo '</div>';


                echo '<div class="form-group pt-3">';
                    echo '<input type="text" class="form-control" placeholder="Sinopsis" name="sinopsis" id="sinopsis" value='.$sinopsis.' required="">';
                echo '</div>';


                echo '<div class="form-group pt-1">';
                    echo '<label for="tipo" class="col-2 col-form-label">Tipo</label>';
                    echo '<select class="form-control" name="tipo" id="tipo" value='.$tipo.'>';
                        echo '<option>Noticias</option>';
                        echo '<option>Resenias</option>';
                        echo '<option>Articulos</option>';
                    echo '</select> ';
                echo '</div>';


                echo '<div class="form-group pt-1">';
                    echo '<label for="categoria" class="col-2 col-form-label">Categoría</label>';
                    echo '<select class="form-control" name="categoria" id="categoria" value='.$categoria.'>';
                        echo '<option>Videojuegos</option>';
                        echo '<option>Tecnologia</option>';
                        echo '<option>Comics</option>';
                        echo '<option>Peliculas</option>';
                        echo '<option>Series</option>';
                        echo '<option>Anime</option>';
                    echo '</select>';
                echo '</div>';


                echo '<div class="form-group row">';
                    echo '<label for="fecha" class="col-2 col-form-label">Fecha</label>';
                    echo '<div class="col-10">';
                        echo '<input class="form-control" type="date" value="2020-12-05" id="fecha" name="fecha" value='.$fecha.' required="">';
                    echo '</div>';
                echo '</div>';


                echo '<div class="form-group pt-3">';
                    echo '<input type="text" class="form-control" rows="9" placeholder="Contenido" name="contenido" id="contenido" value='.$contenido.' required="">';
                echo '</div>';

                echo '<div class="custom-file">';
                    echo '<input type="file" class="custom-file-input" name="imagen" id="imagen" value='.$imagen.'>';
                    echo '<label class="custom-file-label" for="customFile">Choose file</label>';
                echo '</div>';

            ?>
                           
            <div class="form-group mx-sm-4 pt-4 center">
                <input type="submit" class="publicar publicar-block" value="Guardar" name="">
            </div>

            </form>
        </div>