<?php

$titulo = 'Administrador - Iniciar Sesion';
include "./components/header.php";
  echo '
    <div class="container-fluid p-0 bg-gradient-secondary">
        <div class="container bg-white pt-5">
            <div class="rounded bg-gray-purple py-4 h-100 shadow">
                <div class="row pb-5 px-5">                    
                    <div class="col-lg-8 col-lg-6 offset-sm-2 bg-white rounded pt-3 px-4 pb-4 mt-4 shadow">
                        <h1 class="text-center"><i class="fa fa-user-circle-o"></i></h1>
                        <h1 class="text-center">¡Bienvenido!</h1>
                        <p class="text-center pb-4">Ingresa tu usuario y contraseña para iniciar sesión.</p>
                        <form>
                            <div class="form-group">
                                <label for="user">Usuario</label>
                                <input type="text" class="form-control" id="user" aria-describedby="emailHelp" placeholder="Ingresa tu usuario">                            
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" placeholder="Contraseña">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  ';
include "./components/footer.php";

?>