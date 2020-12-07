          <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/av1.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Retro: Axiom Verge<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Videojuegos</span><br>
                            <br>
                            <p class="fecha">12 de Noviembre del 2020, 21:00</p>
                            <p>
                            Jugar títulos de antaño, como ya sabrás, es casi casi un deporte para mí, pero también disfruto mucho de las entregas actuales que rinden homenaje a esas joyas del pasado que tanto nos gustan...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/a1V">Ver más</a>

                        </div>

                    </div>

                </div>

            </div>


            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/av2.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Retro: Yoshi's Island<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Videojuegos</span><br>
                            <br>
                            <p class="fecha">5 de Noviembre del 2020, 17:05</p>
                            <p>
                            Super Mario World causó revuelo por varias razones: se trató del título principal de lanzamiento del Super Nintendo, fue el sucesor del que para muchos es el mejor juego de Mario de todos los tiempos y nos presentó a...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/a2V">Ver más</a>

                        </div>

                    </div>
                </div>
            </div>

            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/av3.jpeg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Retro: Super Castlevania IV<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Videojuegos</span><br>
                            <br>
                            <p class="fecha">29 de Octubre del 2020, 11:00</p>
                            <p>
                            Super Castlevania IV es uno de los mejores ejemplos de una excelente transición de una generación de consolas a la siguiente. Konami nos deleitó con una gran trilogía en el NES, a pesar de...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/a3V">Ver más</a>

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
