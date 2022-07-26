<?php
    echo '
    <div class="col-md-12 col-lg-6 mb-4">
        <div class="card shadow">
            <div class="card-body">
                <h1 class="text-center text-primary"><i class="fa '.$item['icono'].'"></i></h1>
                <h2 class="text-center card-title">'.$item['titulo'].'</h2>
                <p class="card-text text-center">'
                    .$item['descripcion'].
                '</p>
                <a href="'.$item['link'].'" class="btn btn-primary btn-block">Ir a la seccion...</a>
            </div>
        </div>
    </div>
    '
?>