     <?php foreach($osito as $publicacion){
          echo '<div class="espacio">';
               echo '<div class="container">';
                    echo '<h1 class="huno">'.$publicacion['titulo'].'</h1>';
                    echo '<p class="fecha">'.$publicacion['fecha'].'</p>';
                    echo '<span class="badge badge-primary">'.$publicacion['tipo'].'</span>';
                    echo '<span class="badge badge-primary">'.$publicacion['categoria'].'</span><br><br>';
                    echo '<img src="'.base_url().'/upload/'.$publicacion['imagen'].'"class="rounded img-fluid mx-auto d-block" width="650" height="300"/>';
                    echo '<br>';
                    echo '<p>'.$publicacion['contenido'].'</p>';
                    echo '<br><br>';


     }?>          