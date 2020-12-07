              <div class="espacio">
                <div class="container">
                  
                    <div class="contenedorBoton">
                        <div class="plus">
                            <a href="<?php echo base_url();?>/index.php/ProyectoA/publicacionA" ><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/nC1.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">Terrible racha de despidos de veteranos en DC Comics<br></h3>
                            <span class="badge badge-primary">Noticias</span>
                            <span class="badge badge-primary">Cómics</span><br>
                            <br>
                            <p class="fecha">12 de Noviembre del 2020, 10:18</p>
                            <p>
                            Parece que las cosas no andan bien en DC Comics y desde la editorial se están ejecutando despidos masivos a veteranos de la empresa.Está claro que la pandemia del Coronavirus ha afectado a multitud de empresas que, en mayor y menor medida, se...
                            </p>
                            <div class="flexor">
                                <button class="botonSinBorde"><i class="fas fa-trash-alt"></i></button>
                                <form class="bajar" action="publicacionA">
                                    <button class="botonSinBorde"><i class="fa fa-edit"></i></button>
                                </form>
                                <a class="botonMorado5" href="<?php echo base_url();?>/index.php/ProyectoA/n1CA">Ver más</a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/nC2.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">DC Comics ya está trabajando en una secuela de Batman: Three Jokers<br></h3>
                            <span class="badge badge-primary">Noticias</span>
                            <span class="badge badge-primary">Cómics</span><br>
                            <br>
                            <p class="fecha">11 de Noviembre del 2020, 16:48</p>
                            <p>
                            En vista del enorme éxito que está generando el evento de Batman: Three Jokers, desde DC Comics ya se está trabajando en una secuela.La editorial DC Comics ha encontrado una mina de oro en Batman: Three Jokers, la nueva serie de cómics...
                            </p>
                            <div class="flexor">
                                <button class="botonSinBorde"><i class="fas fa-trash-alt"></i></button>
                                <form class="bajar" action="publicacionA">
                                    <button class="botonSinBorde"><i class="fa fa-edit"></i></button>
                                </form>
                                <a class="botonMorado5" href="<?php echo base_url();?>/index.php/ProyectoA/n2CA">Ver más</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/nc3.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">DC presenta a The Batman Who Frags, la fusión de Batman y Lobo en el Multiverso Oscuro<br></h3>
                            <span class="badge badge-primary">Noticias</span>
                            <span class="badge badge-primary">Cómics</span><br>
                            <br>
                            <p class="fecha">9 de Noviembre del 2020, 18:14</p>
                            <p>
                            Así de imponente luce The Batman Who Frags, la fusión del Caballero Oscuro con Lobo en el Multiverso Oscuro de DC.La nueva serie de cómics de DC Dark Nights: Death Metal nos ha brindado unas fusiones un tanto curiosas de Batman...
                            </p>
                            <div class="flexor">
                                <button class="botonSinBorde"><i class="fas fa-trash-alt"></i></button>
                                <form class="bajar" action="publicacionA">
                                    <button class="botonSinBorde"><i class="fa fa-edit"></i></button>
                                </form>
                                <a class="botonMorado5" href="<?php echo base_url();?>/index.php/ProyectoA/n3CA">Ver más</a>
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