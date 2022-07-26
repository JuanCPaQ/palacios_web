<?php
    include '../query/connect.php';
    $opt = $_GET['opt'] ? : "0";

    switch($opt){
      case "0":
        echo '
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h1 class="mb-2">Solicitudes de Consulta</h1>
                    <h4 class="text-secondary mb-3">Administra las solicitudes de consulta.</h4>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="mb-3 col-lg-4 col-md-6 col-12">
                    <div class="card bg-light">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">                       
                                <p class="mb-0">Solicitud de Consulta</p>                        
                                <div class="float-right">
                                    <button type="submit" class="btn btn-outline-danger" id="btnAdd">
                                        <i class="fa fa-times"></i>                                
                                    </button>
                                    <button type="submit" class="btn btn-outline-success" id="btnAdd">
                                        <i class="fa fa-check"></i>                                
                                    </button>                        
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="text-center">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-warning"></i>
                                    <i class="fa fa-hourglass-o fa-stack-1x fa-inverse"></i>
                                </span>
                            </h1>
                            <h5 class="card-title text-center mb-1">Consulta</h5>
                            <h5 class="card-title text-center text-secondary">Esperando confirmación</h5>  
                            <hr>
                            <p class="card-text mb-1">
                                Paciente: Misael Vázquez Ortega<br>                                
                            </p>
                            <p class="card-text mb-1">                                
                            Fecha y Hora: 24/05/2021 14:00
                            </p>                            
                        </div>
                    </div>            
                </div>
                <div class="mb-3 col-lg-4 col-md-6 col-12">
                    <div class="card bg-light">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">                       
                                <p class="mb-0">Solicitud de Consulta</p>                        
                                <div class="float-right">
                                    <button type="submit" class="btn btn-outline-danger" id="btnAdd">
                                        <i class="fa fa-times"></i>                                
                                    </button>
                                    <button type="submit" class="btn btn-outline-success" id="btnAdd">
                                        <i class="fa fa-check"></i>                                
                                    </button>                        
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="text-center">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-warning"></i>
                                    <i class="fa fa-hourglass-o fa-stack-1x fa-inverse"></i>
                                </span>
                            </h1>
                            <h5 class="card-title text-center mb-1">Consulta</h5>
                            <h5 class="card-title text-center text-secondary">Esperando confirmación</h5>  
                            <hr>
                            <p class="card-text mb-1">
                                Paciente: Misael Vázquez Ortega<br>                                
                            </p>
                            <p class="card-text mb-1">                                
                            Fecha y Hora: 24/05/2021 14:00
                            </p>                            
                        </div>
                    </div>            
                </div>
                <div class="mb-3 col-lg-4 col-md-6 col-12">
                    <div class="card bg-light">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">                       
                                <p class="mb-0">Solicitud de Consulta</p>                        
                                <div class="float-right">
                                    <button type="submit" class="btn btn-outline-danger" id="btnAdd">
                                        <i class="fa fa-times"></i>                                
                                    </button>
                                    <button type="submit" class="btn btn-outline-success" id="btnAdd">
                                        <i class="fa fa-check"></i>                                
                                    </button>                        
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="text-center">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-warning"></i>
                                    <i class="fa fa-hourglass-o fa-stack-1x fa-inverse"></i>
                                </span>
                            </h1>
                            <h5 class="card-title text-center mb-1">Consulta</h5>
                            <h5 class="card-title text-center text-secondary">Esperando confirmación</h5>  
                            <hr>
                            <p class="card-text mb-1">
                                Paciente: Misael Vázquez Ortega<br>                                
                            </p>
                            <p class="card-text mb-1">                                
                            Fecha y Hora: 24/05/2021 14:00
                            </p>                            
                        </div>
                    </div>            
                </div>                
            </div>
        ';
        break;      
      case "1":
        echo '
        <div class="row">
            <div class="col-lg-8">
                <h1 class="mb-2">Cedúlas Profesionales</h1>
                <h4 class="text-secondary mb-3">Aquí puedes administrar tus cedúlas profesionales.</h4>
            </div>
            <div class="col-lg-4 align-items-bottom align-self-end">
                <button class="btn btn-primary float-right" type="button" data-toggle="modal" data-target="#addModal">
                    <i class="fa fa-plus mr-2"></i>
                    Agregar Cedula Profesional
                </button>
            </div>
        </div>

        <hr>
        
        <div class="row mb-3">
            <div class="col-12 rounded">
                <table class="table bg-white">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th scope="col" width="150px">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                            <div class="d-flex justify-content-around mb-1">                    
                                <button id="prevPage" class="btn btn-primary px-3 mr-1 rounded">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <button id="prevPage" class="btn btn-secondary px-3 rounded">
                                    <i class="fa fa-pencil-square-o "></i>
                                </button>
                            </div>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>
                            <div class="d-flex justify-content-around mb-1">                    
                                <button id="prevPage" class="btn btn-primary px-3 mr-1 rounded">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <button id="prevPage" class="btn btn-secondary px-3 rounded">
                                    <i class="fa fa-pencil-square-o "></i>
                                </button>
                            </div>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>
                            <div class="d-flex justify-content-around mb-1">                    
                                <button id="prevPage" class="btn btn-primary px-3 mr-1 rounded">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <button id="prevPage" class="btn btn-secondary px-3 rounded">
                                    <i class="fa fa-pencil-square-o "></i>
                                </button>
                            </div>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Agregar Familiar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">                
                    <h6 class="mb-4">Ingresa los datos solicitados.</h6>
                    <form class="px-3">                
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="nombre">Título:</label>
                                <input type="text" class="form-control" placeholder="Título" name="nombre" id="nombre">
                            </div>
                            <div class="col-12 mb-3">                            
                                <label for="exampleFormControlTextarea1">Descripción</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripción"></textarea>
                            </div>                    
                        </div>                                                        
                    </form>
            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
                </div>
            </div>
        </div>        
        ';
        break;
      default:
      echo '
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h1 class="mb-2">Tu perfil</h1>
                <h4 class="text-secondary mb-3">Aquí puedes administrar la información de tu perfil.</h4>
            </div>
        </div>
        <hr>
        
        <div class="row">
            <div class="col-lg-4 col-12">
                <img class="rounded mx-auto d-block square-img-profile mb-3" src="https://ath2.unileverservices.com/wp-content/uploads/sites/13/2020/03/Peinados-de-Rosal%C3%ADa-5-1024x1024.jpg">
                <div class="btn-group w-100 px-3 mb-3" role="group">
                    <button type="button" class="btn btn-secondary">Eliminar</button>
                    <button type="button" class="btn btn-primary">Cambiar</button>
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <form class="px-3">                
                    <div class="row">
                        <div class="col-12">
                            <label for="username">Nombre de Usuario:</label>
                            <input type="text" class="form-control" placeholder="Nombre de Usuario" name="username" id="username" disabled value="sample1">
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
                                <option selected>Seleccionar...</option>
                                <option>Masculino</option>
                                <option>Femenino</option>
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
                                <button type="button" class="btn btn-secondary mr-3" data-toggle="modal" data-target="#changePassModal">Cambiar Contraseña</button>
                            </div>
                        </div>                    
                    </div>
                    <div class="modal fade" id="changePassModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="changePassModal">Cambiar Contraseña</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">                
                                <h6 class="mb-4">Ingresa los datos solicitados.</h6>
                                
                                <form class="px-3">                
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="oldPass">Contraseña Anterior:</label>
                                            <input type="password" class="form-control" placeholder="Contraseña Anterior" name="oldPass" id="oldPass">
                                        </div>                    
                                    </div>     
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="newPass">Nueva Contraseña:</label>
                                            <input type="password" class="form-control" placeholder="Nueva Contraseña" name="newPass" id="newPass">
                                        </div>                    
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="repPass">Repetir Contraseña:</label>
                                            <input type="password" class="form-control" placeholder="Repetir Contraseña" name="repPass" id="repPass">
                                        </div>                    
                                    </div>                                                     
                                </form>
                        
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary">Guardar Contraseña</button>
                            </div>
                            </div>
                        </div>
                    </div> 
                </form>
            </div>
        </div>
        ';
        break;

    }

    $mbd = null;
?>