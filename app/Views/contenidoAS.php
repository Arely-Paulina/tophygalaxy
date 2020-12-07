            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/as1.png" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">La aparición de Quentin Tarantino en Los Simpson que el director aprobó... Pero en la que no participó<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Series</span><br>
                            <br>
                            <p class="fecha">17 de Noviembre del 2020, 18:21</p>
                            <p>
                            No cabe duda que Los Simpson es una de las series que más cameos y participaciones de estrellas invitadas ha albergado a lo largo de sus más de 30 temporadas emitidas. Sin embargo, no todo el mundo está dispuesto a participar en la serie...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/a1S">Ver más</a>

                        </div>

                    </div>

                </div>

            </div>


            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/as2.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">El origen de Cobra Kai y su relación con Cómo conocí a tu mamá<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Series</span><br>
                            <br>
                            <p class="fecha">15 de Noviembre del 2020, 11:11</p>
                            <p>
                            Ahora que Netflix ha disparado la popularidad de Cobra Kai, es muy habitual que hablemos de la serie que nació en 2018 en YouTube Red (Ahora YouTube Premium) y que se ha convertido en todo un fenómeno entre los fans de Karate Kid de varias generaciones...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/a2S">Ver más</a>

                        </div>

                    </div>
                </div>
            </div>

            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/as3.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Actores que fueron muy populares y cuya vida se fue a pique<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Series</span><br>
                            <br>
                            <p class="fecha">15 de Noviembre del 2020, 10:35</p>
                            <p>
                            Como diría el tío Ben a Peter Parker en Spider-Man, "un gran poder conlleva una gran responsabilidad". El mundo de la interpretación es un arma de doble filo cuando la cosa le va bien a la gente. El glamour y el éxito que acompañan a la fama hacen que muchas veces los focos no dejen ver lo que en realidad sucede entre bastidores...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/a3S">Ver más</a>

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