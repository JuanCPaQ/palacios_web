<?php

$nombreTabla = 'Usuarios';
$titulo = 'Administrador - '.$nombreTabla;
include './components/header2.php';

echo '
    <div class="container-fluid mt-5 p-0 bg-white">
        <div class="container p-5 bg-gray-purple shadow">  
            <div class="row mb-1">
                <div class="col-lg-4 col-12">          
                    <h1 id="tablaNombre">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-users fa-stack-1x fa-inverse"></i>
                        </span>
                        '.$nombreTabla.'
                    </h1>                    
                </div>
                <div class="col-lg-6 offset-lg-2 col-12 align-self-end">
                    <form method="POST" id="search" enctype="multipart/form-data" class="form-inline float-right">
                        <div class="form-group mb-2 mr-2">
                            <input type="text" class="form-control" id="searchText" name="searchText" placeholder="Buscar...">
                        </div>                        
                        <button type="button" class="btn btn-outline-primary mr-2 mb-2" onclick="searchUser()">
                            <i class="fa fa-search mr-2"></i>
                            Buscar
                        </button>                        
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addModal">
                            <i class="fa fa-plus mr-2"></i>
                            Agregar
                        </button>
                    </form>
                </div>
            </div>
            
            <hr>

            <div class="row mb-3">
                <div class="col-12 rounded" id="gridUsers">                    
                    
                </div>
            </div>
            

            <div class="row">
                <div class="col-12">
                    <p id="countRegister">Registros encontrados 0.</p>
                </div>
            </div>

        </div>
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Agregar un usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="AltaUser" enctype="multipart/form-data">
                        <div class="form-group pt-2">
                            <label for="usernameAdd">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="usernameAdd" name="usernameAdd" placeholder="Nombre de Usuario">
                        </div>    

                        <div class="form-group">
                            <label for="passwordAdd">Contraseña</label>
                            <input type="password" class="form-control" id="passwordAdd" name="passwordAdd" placeholder="Contraseña" autocomplete="on">
                        </div>

                        <div class="form-group">
                            <label for="nombreAdd">Nombre</label>
                            <input type="text" class="form-control" id="nombreAdd" name="nombreAdd" placeholder="Nombre">
                        </div>

                        <div class="form-group">
                            <label for="apellidopAdd">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apellidopAdd" name="apellidopAdd" placeholder="Apellido Paterno">
                        </div>

                        <div class="form-group">
                            <label for="apellidomAdd">Apellido Materno</label>
                            <input type="text" class="form-control" id="apellidomAdd" name="apellidomAdd" placeholder="Apellido Materno">
                        </div>                                    
                        
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-4">
                                <label for="sexoAdd">Sexo</label>
                                <select id="sexoAdd" name="sexoAdd" class="form-control">                                    
                                    <option selected>Masculino</option>
                                    <option>Femenino</option>
                                    <option>Otro</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-12 mb-4">
                                <label for="fechaAdd">Fecha de Nacimiento:</label>
                                <input type="date" id="fechaAdd" class="form-control" name="fechaAdd"
                                    value="2021-05-23"
                                    min="1920-01-01" max="2021-05-01">
                            </div>
                        </div>  

                        <div class="form-group">
                            <label for="telefonoAdd">Teléfono</label>
                            <input type="text" class="form-control" id="telefonoAdd" name="telefonoAdd" placeholder="Teléfono">
                        </div>

                        <div class="form-group">
                            <label for="imagenAdd">Imagen</label>
                            <input type="file" class="form-control" id="imagenAdd" name="imagenAdd" placeholder="Imagen de Categoria">
                        </div>
                        
                        <hr>
                        <div class="form-group float-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" onclick="createUser()">Agregar </button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        </div>

        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Seguro que deseas eliminar este usuario?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-danger" onclick="deleteUser()">Eliminar</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/handler_users.js"></script> 
';

include './components/footer.php';

?>