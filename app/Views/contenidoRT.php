    <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/rt1.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">RESEÑA – VivoY70<br></h3>
                            <span class="badge badge-primary">Reseñas</span>
                            <span class="badge badge-primary">Tecnología</span><br>
                            <br>
                            <p class="fecha">12 de Noviembre del 2020, 22:57</p>
                            <p>
                                Ha llegado de la mano de terminales de gama media-alta como el Vivo X51, pero su catálogo también brinda espacio a móviles más económicos y accesibles. Es el caso del Vivo Y70 que hoy nos ocupa, un interesante gama media que apuesta...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/r1T">Ver más</a>

                        </div>

                    </div>

                </div>

            </div>


            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/rt2.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">RESEÑA - Samsung Galaxy M51<br></h3>
                            <span class="badge badge-primary">Reseñas</span>
                            <span class="badge badge-primary">Tecnología</span><br>
                            <br>
                            <p class="fecha">10 de Noviembre del 2020, 16:05</p>
                            <p>
                            Durante algún tiempo, el catálogo de Samsung era bastante confuso. Las gamas se sucedían unas a otras y no parecía existir un encaje lógico más allá del precio pero el fabricante coreano quiso poner orden...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/r2T">Ver más</a>

                        </div>

                    </div>
                </div>
            </div>

            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/rt3.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">RESEÑA - ¡Phone 12<br></h3>
                            <span class="badge badge-primary">Reseñas</span>
                            <span class="badge badge-primary">Tecnología</span><br>
                            <br>
                            <p class="fecha">28 de Octubre del 2020, 12:26</p>
                            <p>
                            De cuatro en cuatro, así ha pasado Apple a presentar sus iPhone tras años con un solo lanzamiento anual. 2020 ha sido el año de los iPhone 12 mini, iPhone 12, iPhone 12 Pro y iPhone 12 Pro Max, siendo los iPhone 12 y su versión Pro los primeros en salir a la venta...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/r3T">Ver más</a>

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

                                ?>
                                <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/ver?id=<?php echo $publicacion['idPublicacion']; ?>" role="button">Ver más</a>
                                <?php
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';

            }?>
            
                
            </div>

            
        </div>