            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/aa1.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">¡Eren, Mikasa y Armin son homenajeados en el hogar natal del creador de Attack on Titan!<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Anime</span><br>
                            <br>
                            <p class="fecha">9 de Noviembre del 2020, 12:21</p>
                            <p>
                            Attack on Titan (Shingeki no Kyojin) es una de las series manga y anime más influyentes de los últimos 10 años, alcanzando una popularidad alrededor de todo el mundo que muchas mentes creativas ansían alcanzar algún día...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/a1A">Ver más</a>

                        </div>

                    </div>

                </div>

            </div>


            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/aa2.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Ghost in the Shell: 25 años del nacimiento de una leyenda<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Anime</span><br>
                            <br>
                            <p class="fecha">18 de Noviembre del 2020, 16:21</p>
                            <p>
                            Hoy es un día muy especial para rendir un merecido homenaje a una de las obras más influyentes para toda la comunidad. Así que coged fuerzas y acompañadnos en este viaje a través de un futuro distópico, al devenir de Japón después de la IV Guerra Mundial...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/a2A">Ver más</a>

                        </div>

                    </div>
                </div>
            </div>

            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/aa3.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Carole&Tuesday: La verdadera familia<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Anime</span><br>
                            <br>
                            <p class="fecha">14 de Noviembre del 2020, 08:35</p>
                            <p>
                            Hoy venimos a hablar de Carole&Tuesday y de cómo se interpreta dentro de este anime lo que es realmente la familia. Este artículo contiene spoilers, por lo que para no destriparos la trama de este anime ir a verlo si no lo hicieron ya (disponible en Netflix)...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/a3A">Ver más</a>

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