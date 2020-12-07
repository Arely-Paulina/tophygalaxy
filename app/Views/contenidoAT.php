
            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/at1.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">El Coronavirus puede permanecer activo en tu smartphone durante 28 días<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Tecnología</span><br>
                            <br>
                            <p class="fecha">12 de Octubre del 2020, 18:10</p>
                            <p>
                            En el mes de marzo cuando se supo por primera vez acerca del Virus SARS-CoV-2 mejor conocido como COVID-19 se sabían pocos detalles sobre las formas en las que se podía contagiar y como se podría combatir...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/a1T">Ver más</a>

                        </div>

                    </div>

                </div>

            </div>


            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/at2.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">NVIDIA presenta su mayor salto generacional con la serie GeForce RTX 30 de GPUs<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Tecnología</span><br>
                            <br>
                            <p class="fecha">1 de Septiembre del 2020, 15:45</p>
                            <p>
                            NVIDIA develó hoy su serie GeForce RTX 30 de GPUs, impulsada por la arquitectura Ampere, lo que significa el mayor salto generacional en la historia de GeForce. Rompiendo récords de desempeño, las GPU GeForce RTX 3090...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/a2T">Ver más</a>

                        </div>

                    </div>
                </div>
            </div>

            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/at3.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Houseparty presenta [Marcos]<br></h3>
                            <span class="badge badge-primary">Artículos</span>
                            <span class="badge badge-primary">Tecnología</span><br>
                            <br>
                            <p class="fecha">21 de Agosto del 2020, 08:45</p>
                            <p>
                            Houseparty lleva el videochat al siguiente nivel con [Marcos], una nueva función que te permite hacer más atractivo tu fondo con arte seleccionado de artistas indie. Cada cierto tiempo...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/a3T">Ver más</a>

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