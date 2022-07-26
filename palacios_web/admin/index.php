<?php

$titulo = 'Administrador - Dashboard';
$categorias = array(
  array('titulo' => 'Doctores', 'descripcion' => 'Ve y administra a los doctores.', 'icono' => 'fa-user-md', 'link' => './doctores.php'),
  array('titulo' => 'Consultorios', 'descripcion' => 'Ve y administra los consultorios', 'icono' => 'fa-location-arrow', 'link' => './consultorios.php'),
  array('titulo' => 'Medicamentos', 'descripcion' => 'Ve y administra el catálogo de medicamentos', 'icono' => 'fa-archive', 'link' => './medicamentos.php'),
  array('titulo' => 'Usuarios', 'descripcion' => 'Ve y administra los usuarios', 'icono' => 'fa-users', 'link' => './usuarios.php'),
);

include "./components/header.php";
  echo '
    <div class="container-fluid p-0 bg-gradient-secondary">
      <div class="container bg-white pt-5">
        <div class="rounded bg-gray-purple p-4 h-100 shadow">
          <h1 id="tablaNombre">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-medkit fa-stack-1x fa-inverse"></i>
            </span>
            Dashboard    
          </h1>   
          <p class="ml-2"> Bienvenido "Nombre de Usuario", a continuación se muestran algunas secciones para administrar el contenido de tu pagina web.</p>
          <hr>
          <div class="row">
                ';
                
          foreach ($categorias as $item){
            include "./components/dashitem.php";
          }
                  
    echo          '
          </div>
        </div>
      </div>
    </div>
  ';
include "./components/footer.php";

?>