           <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/ap1.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Las mejores curiosidades de Desafío total, que se reestrena con motivo de su 30 aniversario<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Películas</span><br>
                            <br>
                            <p class="fecha">20 de Noviembre del 2020, 10:11</p>
                            <p>
                            Hoy, 20 de noviembre de 2020, regresa a los cines restaurada Desafío total, conocida también en Latinoamérica como El vengador del futuro y en su versión original como Total Recall. En su día os hablamos largo y tendido de ella a propósito del remake de 2012...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/a1P">Ver más</a>

                        </div>

                    </div>

                </div>

            </div>


            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/ap2.png" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Joyas desconocidas de Disney: Pedro y el dragón Elliot<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Películas</span><br>
                            <br>
                            <p class="fecha">15 de Noviembre del 2020, 14:45</p>
                            <p>
                            Si hablamos de Disney y toda su extensa filmografía normalmente se nos viene a la cabeza los grandes clásicos, en especial de animación, como pueden ser Blancanieves o La Bella y la Bestia, pero entre todos sus títulos hay algunos que han pasado...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/ProyectoA/a2P">Ver más</a>

                        </div>

                    </div>
                </div>
            </div>

            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/ap3.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Las 8 mejores películas de terror basadas en hechos reales<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Películas</span><br>
                            <br>
                            <p class="fecha">15 de Noviembre del 2020, 12:55</p>
                            <p>
                            Solemos decir con demasiada frecuencia que, en muchas ocasiones, la realidad supera la ficción. De hecho, es habitual que la ficción se apoye en la realidad. Algo que se vuelve bastante perturbador cuando nos toca hablar de películas de terror...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/ProyectoA/a3P">Ver más</a>

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