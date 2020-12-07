
            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/ac1.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Los mejores Marvel Must Have. Miles Morales: Spiderman. Origen<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Cómics</span><br>
                            <br>
                            <p class="fecha">14 de Noviembre del 2020, 17:11</p>
                            <p>
                            En el año 2000, Marvel vivía un periodo de cambio y se buscaban, como siempre, nuevos lectores. Llegaba entonces la línea Ultimate, auspiciada por el entonces vicepresidente de la editorial, Bill Jemas, y el editor, Joe Quesada...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/a1C">Ver más</a>

                        </div>

                    </div>

                </div>

            </div>


            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/ac2.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Diez cómics de terror para leer en Halloween<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Cómics</span><br>
                            <br>
                            <p class="fecha">30 de Octubre del 2020, 10:25</p>
                            <p>
                            Un año más se acerca Halloween, la noche en la que monstruos, fantasmas y vampiros campan a sus anchas. Sin embargo, debido a las especiales circunstancias sanitarias de este año, no podremos disfrutar de las tradicionales fiestas y disfraces...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/a2C">Ver más</a>

                        </div>

                    </div>
                </div>
            </div>

            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/ac3.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">La Crisis del Cómic de los 90: Marvel Comics<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Cómics</span><br>
                            <br>
                            <p class="fecha">28 de Octubre del 2020, 23:35</p>
                            <p>
                            Todo el que lleve cierto tiempo comprando o leyendo cómic americano ha oído hablar de la crisis del cómic de los 90.  Del año 96, para ser más exactos.Fue una crisis brutal, como pocas veces se ha conocido en el sector, quizá la más fuerte desde la provocada por el Dr. Werthan...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/a3C">Ver más</a>

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