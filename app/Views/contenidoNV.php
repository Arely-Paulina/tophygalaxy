<div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/n1.jpeg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">God of War Ragnarok podría no ser exclusivo de PS5<br></h3>
                            <span class="badge badge-primary">Noticias</span>
                            <span class="badge badge-primary">Videojuegos</span><br>
                            <br>
                            <p class="fecha">18 de Noviembre del 2020, 20:00</p>
                            <p>
                            De acuerdo con una reciente entrevista a Jim Ryan, CEO de PlayStation, el juego God of War Ragnarok podría llegar a otra plataforma a parte de la PlayStation 5...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/n1V">Ver más</a>

                        </div>

                    </div>

                </div>

            </div>


            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/nv2.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Tiendas sugieren que Persona 5 Scramble debutará pronto en Occidente<br></h3>
                            <span class="badge badge-primary">Noticias</span>
                            <span class="badge badge-primary">Videojuegos</span><br>
                            <br>
                            <p class="fecha">18 de Noviembre del 2020, 17:00</p>
                            <p>
                            Sabemos que los títulos de desarrollo oriental normalmente llegan a Occidente más tarde debido a temas de localización. ATLUS es reconocida por ofrecer varios juegos buenos que...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/n2V">Ver más</a>

                        </div>

                    </div>
                </div>
            </div>

            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/nv3.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Silent Hill se vuelve tendencia en Twitter por un partido de fútbol de México<br></h3>
                            <span class="badge badge-primary">Noticias</span>
                            <span class="badge badge-primary">Videojuegos</span><br>
                            <br>
                            <p class="fecha">17 de Noviembre del 2020, 21:00</p>
                            <p>
                            Llevamos muchos años sin una nueva entrega de Silent Hill, pero eso no quiere decir que la gente lo haya olvidado. De hecho, sigue siendo parte de la mente colectiva...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/n3V">Ver más</a>

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
