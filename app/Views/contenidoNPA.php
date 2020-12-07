           <div class="espacio">
                <div class="container">
                    <div class="contenedorBoton">
                        <div class="plus">
                            <a href="<?php echo base_url();?>/index.php/ProyectoA/publicacionA" ><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/np1.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Nuevo tráiler Zack Snyder's Justice League<br></h3>
                            <span class="badge badge-primary">Noticias</span>
                            <span class="badge badge-primary">Películas</span><br>
                            <br>
                            <p class="fecha">17 de Noviembre del 2020, 13:20</p>
                            <p>
                            El director Zack Snyder revela un nuevo tráiler a blanco y negro del nuevo corte fílmico de Justice League, mostrando segundos de contenido adicional.El tráiler fue lanzado hoy tanto en la cuenta Vero de Snyder como en su Twitter, con el fin de celebrar el tercer aniversario del estreno teatral del filme...
                            </p>
                            <div class="flexor">
                                <button class="botonSinBorde"><i class="fas fa-trash-alt"></i></button>
                                <form class="bajar" action="publicacionA">
                                    <button class="botonSinBorde"><i class="fa fa-edit"></i></button>
                                </form>
                                <a class="botonMorado5" href="<?php echo base_url();?>/index.php/ProyectoA/n1PA">Ver más</a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/np2.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Finalmente revelan a Tom Holland como Nathan Drake en la película de Uncharted<br></h3>
                            <span class="badge badge-primary">Noticias</span>
                            <span class="badge badge-primary">Películas</span><br>
                            <br>
                            <p class="fecha">22 de Octubre del 2020, 14:28</p>
                            <p>
                            Cuando una productora de cine consigue los derechos de algún videojuego, la preocupación de los gamers se hace notar. Tal es el caso de la producción fílmica live-action de Uncharted, protagonizada por Tom Holland. Afortunadamente, el popular actor reveló...
                            </p>
                            <div class="flexor">
                                <button class="botonSinBorde"><i class="fas fa-trash-alt"></i></button>
                                <form class="bajar" action="publicacionA">
                                    <button class="botonSinBorde"><i class="fa fa-edit"></i></button>
                                </form>
                                <a class="botonMorado5" href="<?php echo base_url();?>/index.php/ProyectoA/n2PA">Ver más</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/np3.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Jared Leto volverá como Joker para ser incluido en Zack Snyder’s Justice League<br></h3>
                            <span class="badge badge-primary">Noticias</span>
                            <span class="badge badge-primary">Películas</span><br>
                            <br>
                            <p class="fecha">21 de Octubre del 2020, 15:54</p>
                            <p>
                            A pesar de haber recibido críticas por su interpretación del popular villano Joker en la película Suicide Squad, el actor Jared Leto regresará a interpretarlo en la nueva versión de Justice League para HBO Max, dirigida por el aclamado cineasta Zack Snyder...
                            </p>
                            
                            <div class="flexor">
                                <button class="botonSinBorde"><i class="fas fa-trash-alt"></i></button>
                                <form class="bajar" action="publicacionA">
                                    <button class="botonSinBorde"><i class="fa fa-edit"></i></button>
                                </form>
                                <a class="botonMorado5" href="<?php echo base_url();?>/index.php/ProyectoA/n3PA">Ver más</a>
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