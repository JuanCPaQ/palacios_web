<?php

include './components/header.php';

echo '
    <div class="container-fluid px-0 pb-0 pt-5">
        <div class="container p-5 bg-gray-purple shadow">           
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h1 class="mb-2">Registro</h1>
                    <h4 class="text-secondary mb-3">Ingresa los datos solicitados para registrarte.</h4>
                </div>
            </div>
            
            <hr>
            
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <form class="px-3">                
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="username">Nombre de Usuario:</label>
                                <input type="text" class="form-control" placeholder="Nombre de Usuario" name="username" id="username">
                            </div>   
                            <div class="col-12 mb-3">
                                <label for="username">Contraseña:</label>
                                <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password">
                            </div>                    
                        </div>
                        
                        <hr>

                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
                            </div>                    
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-3">
                                <label for="nombre">Apellido Paterno:</label>
                                <input type="text" class="form-control" placeholder="Apellido Paterno" name="apellidop" id="apellidop">
                            </div>
                            <div class="col-lg-6 col-12 mb-3">
                                <label for="nombre">Apellido Materno:</label>
                                <input type="text" class="form-control" placeholder="Apellido Materno" name="apellidom" id="apellidom">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-4">
                                <label for="inputState">Sexo</label>
                                <select id="inputState" class="form-control">                                    
                                    <option selected>Masculino</option>
                                    <option>Femenino</option>
                                    <option>Otro</option>
                                </select>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-4">
                                <label for="start">Fecha de Nacimiento:</label>
                                <input type="date" id="start" class="form-control" name="trip-start"
                                    value="2021-05-23"
                                    min="1920-01-01" max="2021-05-01">
                            </div>
                            <div class="col-lg-6 col-12 mb-4">
                                <label for="nombre">Teléfono:</label>
                                <input type="text" class="form-control" placeholder="Teléfono" name="telefono" id="telefono">
                            </div>
                        </div>                                                                           
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="d-flex flex-row-reverse">
                                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                                    <a type="button" class="btn btn-danger mr-3" href="./">Cancelar</a>
                                </div>
                            </div>                    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
';

include './components/footer.php';

?>