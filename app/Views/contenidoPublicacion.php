
 <form method="POST" action="<?php echo base_url();?>/index.php/Proyecto/publicar" role="form" onsubmit="return seguridadPublicacion();" enctype="multipart/form-data">
            
            <div class="form-group pt-3">
                <input type="text" class="form-control" placeholder="Autor" name="autor" id="autor" value="<?php echo session('idUsuario')?>" required="">
            </div>

            <div class="form-group pt-3">
                <input type="text" class="form-control" placeholder="Título" name="titulo" id="titulo" value="" required="">
            </div>
            <div class="form-group pt-3">
                <input type="text" class="form-control" placeholder="Sinopsis" name="sinopsis" id="sinopsis" value="" required="">
                
            </div>
            <div class="form-group pt-1">
                <label for="tipo" class="col-2 col-form-label">Tipo</label>
                <select class="form-control" name="tipo" id="tipo" value="">
                    <option>Noticias</option>
                    <option selected="true">Resenias</option>
                    <option>Articulos</option>
                </select> 
            </div>

            <div class="form-group pt-1">
                <label for="categoria" class="col-2 col-form-label">Categoría</label>
                <select class="form-control" name="categoria" id="categoria" value="">
                    <option>Videojuegos</option>
                    <option>Tecnologia</option>
                    <option>Comics</option>
                    <option>Peliculas</option>
                    <option>Series</option>
                    <option>Anime</option>
                </select> 
            </div>

            <div class="form-group row">
            <label for="fecha" class="col-2 col-form-label">Fecha y hora</label>
                <div class="col-10">
                    <input class="form-control" type="date" value="2020-12-05" id="fecha" name="fecha" value="" required="">
                  </div>
                </div>

            <div class="form-group pt-3">
                <textarea class="form-control" rows="9" placeholder="Contenido" name="contenido" id="contenido" value="" required=""></textarea>
            </div>
        
                            <div class="custom-file">
                    <input type="file" class="custom-file-input" name="imagen" id="imagen">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
           

            <div class="form-group mx-sm-4 pt-4 center">
                <input type="submit" class="publicar publicar-block" value="Publicar" name="">
            </div>

            </form>
        </div>