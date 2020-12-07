            <div class="espacio">
                <div class="container">
                    <div class="contenedorBoton">
                        <div class="plus">
                            <a href="<?php echo base_url();?>/index.php/ProyectoA/publicacionA" ><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/na1.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">La temporada 2 de The Promised Neverland se estrenará en Japón el 7 de enero del 2021<br></h3>
                            <span class="badge badge-primary">Noticias</span>
                            <span class="badge badge-primary">Anime</span><br>
                            <br>
                            <p class="fecha">06 de Noviembre del 2020, 09:08</p>
                            <p>
                            La cuenta oficial de Twitter del bloque de anime Noitama anuncio que la segunda temporada de la serie The Promised Neverland se estrenará el 7 de enero en Fuji TV. Junto al anuncio se reveló un nuevo teaser tráiler que nos mantiene al borde de nuestras...
                            </p>
                            <div class="flexor">
                                <button class="botonSinBorde"><i class="fas fa-trash-alt"></i></button>
                                <form class="bajar" action="publicacionA">
                                    <button class="botonSinBorde"><i class="fa fa-edit"></i></button>
                                </form>
                                <a class="botonMorado5" href="<?php echo base_url();?>/index.php/ProyectoA/n1AA">Ver más</a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/na2.jpeg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">¡El director de Your Name habló sobre el éxito de Demon Slayer: Mugen Train en Japón!<br></h3>
                            <span class="badge badge-primary">Noticias</span>
                            <span class="badge badge-primary">Anime</span><br>
                            <br>
                            <p class="fecha">20 de Octubre del 2020, 14:09</p>
                            <p>
                            Cuando la película Kimetsu no Yaiba: Mugen Train estrenó el 16 de octubre en Japón, nadie esperaba el nivel de éxito que sorprendió a los cinemas. El éxito no solo sorprendió a la gente común y corriente, sino al exitoso...
                            </p>
                            <div class="flexor">
                                <button class="botonSinBorde"><i class="fas fa-trash-alt"></i></button>
                                <form class="bajar" action="publicacionA">
                                    <button class="botonSinBorde"><i class="fa fa-edit"></i></button>
                                </form>
                                <a class="botonMorado5" href="<?php echo base_url();?>/index.php/ProyectoA/n2AA">Ver más</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/na3.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Xbox Game Pass ahora incluye anime gracias a colaboración con Funimation<br></h3>
                            <span class="badge badge-primary">Noticias</span>
                            <span class="badge badge-primary">Anime</span><br>
                            <br>
                            <p class="fecha">2 de Octubre del 2020, 13:54</p>
                            <p>
                                A pesar de lo que puedan pensar algunos gamers de las consolas de nueva generación o servicios videojueguiles, no hay duda que Xbox Game Pass Ultimate ofrece un gran servicio por un precio accesible. Aunque juegos gratuitos...
                            </p>
                            <div class="flexor">
                                <button class="botonSinBorde"><i class="fas fa-trash-alt"></i></button>
                                <form class="bajar" action="publicacionA">
                                    <button class="botonSinBorde"><i class="fa fa-edit"></i></button>
                                </form>
                                <a class="botonMorado5" href="<?php echo base_url();?>/index.php/ProyectoA/n3AA">Ver más</a>
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
