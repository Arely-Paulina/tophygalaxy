            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/ns1.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">WandaVision llega a Disney Plus el 15/1<br></h3>
                            <span class="badge badge-primary">Noticias</span>
                            <span class="badge badge-primary">Series</span><br>
                            <br>
                            <p class="fecha">12 de Noviembre del 2020, 12:28</p>
                            <p>
                            A través de un tweet Disney+ ha confirmado de manera oficial la fecha de estreno de una de las series que más hemos estado esperando WandaVision que llega a la plataforma de streaming el próximo 15 de Enero...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/n1S">Ver más</a>

                        </div>

                    </div>

                </div>

            </div>


            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/ns2.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Resident Evil: Infinite Darkness será canon para la franquicia de videojuegos<br></h3>
                            <span class="badge badge-primary">Noticias</span>
                            <span class="badge badge-primary">Series</span><br>
                            <br>
                            <p class="fecha">27 de Octubre del 2020, 15:29</p>
                            <p>
                            Luego de haber anunciado una nueva serie basada en la aclamada franquicia videojueguil de zombies, Netflix revela los primeros detalles entorno a la historia de Resident Evil: Infinite Darkness. A través de Twitter, el servicio de streaming...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/n2S">Ver más</a>

                        </div>

                    </div>
                </div>
            </div>

            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/ns3.jpeg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Live-action de Assassin’s Creed llegará a Netflix<br></h3>
                            <span class="badge badge-primary">Noticias</span>
                            <span class="badge badge-primary">Series</span><br>
                            <br>
                            <p class="fecha">27 de Octubre del 2020, 14:24</p>
                            <p>
                           Si hablamos de adaptaciones de videojuegos a series, Netflix es el primero en hacerse presente. Hoy, la plataforma de streaming anuncia otro proyecto más, involucrando a la franquicia Assassin’s Creed.La colaboración entre Netflix y Ubisoft...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/n3S">Ver más</a>

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