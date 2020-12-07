         <i onclick="myFunction(this)" class="fa fa-thumbs-up botonLike"></i>


                    <h5 class="htres"><br>Comentarios</h5>
                    <hr>
                    
                    <div class="input-group mb-3">
                             <form class="barra" method="POST" action="<?php echo base_url();?>/index.php/ProyectoA/comentar" role="form" onsubmit="return comentario();">

                                  <img class="float-left img-fluid avatar flexible" src="<?php echo base_url(); ?>/upload/<?php echo session('imagen') ?>">
                                <input type="text" class="form-control" placeholder="Type something.." value="" required="" id="contenido" name="contenido">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">+</button>
                                    </div>
                            <?php foreach($osito as $publicacion){
                                echo '<input type="hidden" name="idPublicacion" value='.$publicacion['idPublicacion'].'>';
                            }?>
                             </form>   
                               
                    </div>
                    
                    

            
                </div>    
            </div>



