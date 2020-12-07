    <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/rc1.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">RESEÑA – Joker: 80 años del Príncipe Payaso del Crimen<br></h3>
                            <span class="badge badge-primary">Reseñas</span>
                            <span class="badge badge-primary">Cómics</span><br>
                            <br>
                            <p class="fecha">26 de Octubre del 2020, 16:23</p>
                            <p>
                                ¡Celebramos el 80 aniversario de El Joker hablando sobre su especial en cómic que repasa su historia y lo mejor del personaje en las viñetas! Si estabas buscando un cómic que repasara toda la historia del gran villano de Batman y DC Comics...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/r1C">Ver más</a>

                        </div>

                    </div>

                </div>

            </div>


            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/rc2.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">RESEÑA - Superman Corazones Perdidos<br></h3>
                            <span class="badge badge-primary">Reseñas</span>
                            <span class="badge badge-primary">Cómics</span><br>
                            <br>
                            <p class="fecha">25 de Octubre del 2020, 10:55</p>
                            <p>
                            Superman: Corazones Perdidos no es la típica historia del kryptoniano. En sus páginas no hay poderosos villanos ni invasiones alienígenas, no salva al mundo de una conspiración mundial, ni evita el apocalipsis...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/r2C">Ver más</a>

                        </div>

                    </div>
                </div>
            </div>

            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/rc3.jpeg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">RESEÑA - The Last God<br></h3>
                            <span class="badge badge-primary">Reseñas</span>
                            <span class="badge badge-primary">Cómics</span><br>
                            <br>
                            <p class="fecha">25 de Octubre del 2020, 14:09</p>
                            <p>
                            Una obra muy atractiva visualmente, con un Federici muy talentoso y un equipo creativo capaz de traer a la manifestación las ideas de Johnson de manera espectacular. Sin embargo, lo atractivo de la obra, si cabe reside en una lectura bajo sus capas...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/r3C">Ver más</a>

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