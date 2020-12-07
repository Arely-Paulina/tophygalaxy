           <div class="espacio">
                <div class="container">
                    <div class="contenedorBoton">
                        <div class="plus">
                            <a href="<?php echo base_url();?>/index.php/ProyectoA/publicacionA" ><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/ra1.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">RESEÑA – Hakata Tonkkotsu Ramens<br></h3>
                            <span class="badge badge-primary">Reseñas</span>
                            <span class="badge badge-primary">Anime</span><br>
                            <br>
                            <p class="fecha">20 de Noviembre del 2020, 13:43</p>
                            <p>
                                Después de batallas memorables llenas de poderes alucinantes y fuerza extrahumana, o bien de historias simples que nos cuenta un poco del día a día de las personas, el anime también es una buen forma de contarnos buenas historias...
                            </p>
                            <div class="flexor">
                                <button class="botonSinBorde"><i class="fas fa-trash-alt"></i></button>
                                <form class="bajar" action="publicacionA">
                                    <button class="botonSinBorde"><i class="fa fa-edit"></i></button>
                                </form>
                                <a class="botonMorado5" href="<?php echo base_url();?>/index.php/ProyectoA/r1AA">Ver más</a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/ra2.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">RESEÑA - Obsolete<br></h3>
                            <span class="badge badge-primary">Reseñas</span>
                            <span class="badge badge-primary">Anime</span><br>
                            <br>
                            <p class="fecha">19 de Noviembre del 2020, 14:28</p>
                            <p>
                            Es cierto que los amantes del anime tenían que descargar todas sus series favoritas en varios sitios ‘dudosos’ de internet. Sin embargo, hay servicios de Streaming quienes apuestan por ofrecer todo tipo de contenido digital...
                            </p>
                            <div class="flexor">
                                <button class="botonSinBorde"><i class="fas fa-trash-alt"></i></button>
                                <form class="bajar" action="publicacionA">
                                    <button class="botonSinBorde"><i class="fa fa-edit"></i></button>
                                </form>
                                <a class="botonMorado5" href="<?php echo base_url();?>/index.php/ProyectoA/r2AA">Ver más</a>
                            </div>
                            

                        </div>

                    </div>
                </div>
            </div>

            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/ra3.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">RESEÑA - Nagi No Asukara<br></h3>
                            <span class="badge badge-primary">Reseñas</span>
                            <span class="badge badge-primary">Anime</span><br>
                            <br>
                            <p class="fecha">18 de Noviembre del 2020, 15:29</p>
                            <p>
                            Hace mucho tiempo, todos los humanos vivían bajo el mar. Sin embargo, algunas personas prefirieron la superficie y abandonaron la vida bajo el agua de forma permanente. Como consecuencia, fueron despojados de su protección dada...
                            </p>
                            <div class="flexor">
                                <button class="botonSinBorde"><i class="fas fa-trash-alt"></i></button>
                                <form class="bajar" action="publicacionA">
                                    <button class="botonSinBorde"><i class="fa fa-edit"></i></button>
                                </form>
                                <a class="botonMorado5" href="<?php echo base_url();?>/index.php/ProyectoA/r3AA">Ver más</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
             <?php foreach($osito as $publicacion){

                echo ' <div class="espacio">';
                    echo '<div class="container">';
                        echo '<div class="row">';
                            echo '<div class="col-sm-4">';
                                echo '<img src="'.base_url().'/upload/'.$publicacion['imagen'].'"class="rounded img-fluid mx-auto d-block" width="350" height="300"/>';
                            echo '</div>';
                            echo '<div class="col-sm-8">';
                                echo '<br>';
                                echo '<h3 class="htres">'.$publicacion['titulo'].'<br></h3>';
                                echo '<span class="badge badge-primary">'.$publicacion['tipo'].'</span>';
                                echo '<span class="badge badge-primary">'.$publicacion['categoria'].'</span><br>';
                                echo '<br>';
                                echo '<p class="fecha">'.$publicacion['fecha'].'</p>';
                                echo '<p>'.$publicacion['sinopsis'].'</p>';
                                echo '<div class="flexor">';

                                ?>
                                <a class="botonSinBorde" href="<?php echo base_url();?>/index.php/ProyectoA/eliminar?id=<?php echo $publicacion['idPublicacion']; ?>"><i class="fas fa-trash-alt"></i></a>
                                <a class="botonSinBorde" href="<?php echo base_url();?>/index.php/ProyectoA/editarP?id=<?php echo $publicacion['idPublicacion']; ?>"><i class="fa fa-edit"></i></a>
                                <a class="botonMorado5" href="<?php echo base_url();?>/index.php/ProyectoA/ver?id=<?php echo $publicacion['idPublicacion']; ?>" role="button">Ver más</a>
                                <?php
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';

            }?>
                
                
            
                
            </div>



            
        </div>
