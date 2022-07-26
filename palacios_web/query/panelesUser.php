<?php
    include '../query/connect.php';
    $opt = $_GET['opt'] ? : "0";

    switch($opt){
      case "0":
        echo '
            <div class="row">
                <div class="col-lg-9">
                    <h1 class="mb-2">Tu agenda</h1>
                    <h4 class="text-secondary mb-3">Aquí puedes ver y agendar consultas.</h4>
                </div>
                <div class="col-lg-3 align-items-bottom align-self-end">
                    <button class="btn btn-primary float-right" onclick="cambiarPanel(1)">
                        Agendar ahora
                    </button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="mb-3 col-lg-4 col-md-6 col-12">
                    <div class="card bg-light">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">                       
                                <p class="mb-0">Consulta Pendiente</p>                        
                                <div class="float-right">
                                    <button type="submit" class="btn btn-outline-dark" id="btnAdd">
                                        <i class="fa fa-times"></i>                                
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
                                Doctor: Dr. Palacios Quiñones
                            </p>
                            <p class="card-text mb-1">
                                Paciente: Misael Vázquez Ortega<br>                                
                            </p>
                            <p class="card-text mb-1">                                
                                Hora y Fecha: 24/05/2021 14:00-14:30
                            </p>                            
                        </div>
                    </div>            
                </div>
                <div class="mb-3 col-lg-4 col-md-6 col-12">
                    <div class="card bg-light">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">                       
                                <p class="mb-0">Consulta Confirmada</p>                        
                                <div class="float-right">
                                    <button type="submit" class="btn btn-outline-dark" id="btnAdd">
                                        <i class="fa fa-times"></i>                                
                                    </button>                        
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="text-center">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-success"></i>
                                    <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                                </span>
                            </h1>
                            <h5 class="card-title text-center mb-1">Consulta</h5>
                            <h5 class="card-title text-center text-secondary">Confirmada, te esperamos</h5>  
                            <hr>
                            <p class="card-text mb-1">
                                Doctor: Dr. Palacios Quiñones
                            </p>
                            <p class="card-text mb-1">
                                Paciente: Misael Vázquez Ortega<br>                                
                            </p>
                            <p class="card-text mb-1">                                
                                Hora y Fecha: 24/05/2021 14:00-14:30
                            </p>                            
                        </div>
                    </div>            
                </div>
                <div class="mb-3 col-lg-4 col-md-6 col-12">
                    <div class="card bg-light">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">                       
                                <p class="mb-0">Consulta Cancelada</p>                        
                                <div class="float-right">
                                    <button type="submit" class="btn btn-outline-dark" id="btnAdd">
                                        <i class="fa fa-times"></i>                                
                                    </button>                        
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="text-center">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                    <i class="fa fa-times fa-stack-1x fa-inverse"></i>
                                </span>
                            </h1>
                            <h5 class="card-title text-center mb-1">Consulta</h5>
                            <h5 class="card-title text-center text-secondary">Esperando confirmación</h5>  
                            <hr>
                            <p class="card-text mb-1">
                                Doctor: Dr. Palacios Quiñones
                            </p>
                            <p class="card-text mb-1">
                                Paciente: Misael Vázquez Ortega<br>                                
                            </p>
                            <p class="card-text mb-1">                                
                                Hora y Fecha: 24/05/2021 14:00-14:30
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
                <div class="col-lg-9">
                    <h1 class="mb-2">Agendar una consulta</h1>
                    <h4 class="text-secondary mb-3">Selecciona un familiar</h4>
                </div>
                <div class="col-lg-3 align-items-bottom align-self-end mb-3">
                    <button class="btn btn-danger float-right" onclick="cambiarPanel(0)">
                        Cancelar consulta
                    </button>
                </div>
            </div>
            
            <div class="row">
                <div class="mb-3 col-lg-4 col-6">
                    <div class="card bg-light">
                        <div class="card-header"> 
                            <div class="d-flex align-items-center justify-content-between">                       
                                <p class="mb-0">Familiar 1</p>                        
                                <div class="float-right">
                                    <button class="btn btn-outline-dark rounded-circle square-btn" onclick="selectPacient">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="text-center">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-dark"></i>
                                    <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                </span>
                            </h1>
                            <h5 class="card-title text-center mb-1">Alexis</h5>
                            <h5 class="card-title text-center text-secondary">Juanes Loera</h5>                        
                        </div>
                    </div>            
                </div>
                <div class="mb-3 col-lg-4 col-6">
                    <div class="card bg-light shadow">
                        <div class="card-header"> 
                            <div class="d-flex align-items-center justify-content-between">                       
                                <p class="mb-0">Familiar 2</p>                        
                                <div class="float-right">
                                    <button class="btn btn-success rounded-circle square-btn">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="text-center">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-dark"></i>
                                    <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                </span>
                            </h1>
                            <h5 class="card-title text-center mb-1">Juan Carlos</h5> 
                            <h5 class="card-title text-center text-secondary">Palacios Quiñones</h5>                                               
                        </div>
                    </div>            
                </div>
                <div class="mb-3 col-lg-4 col-6">
                    <div class="card bg-light">
                        <div class="card-header"> 
                            <div class="d-flex align-items-center justify-content-between">                       
                                <p class="mb-0">Familiar 3</p>                        
                                <div class="float-right">
                                    <button class="btn btn-outline-dark rounded-circle square-btn">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="text-center">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-dark"></i>
                                    <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                </span>
                            </h1>
                            <h5 class="card-title text-center mb-1">Isaac Alejandro</h5> 
                            <h5 class="card-title text-center text-secondary">Galindo Zaldivar</h5>                       
                        </div>
                    </div>            
                </div>
                <div class="mb-3 col-lg-4 col-6">
                    <div class="card bg-light">
                        <div class="card-header"> 
                            <div class="d-flex align-items-center justify-content-between">                       
                                <p class="mb-0">Familiar 4</p>                        
                                <div class="float-right">
                                    <button class="btn btn-outline-dark rounded-circle square-btn">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="text-center">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-dark"></i>
                                    <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                </span>
                            </h1>
                            <h5 class="card-title text-center mb-1">Misael</h5>  
                            <h5 class="card-title text-center text-secondary">Vázquez Ortega</h5>                                             
                        </div>
                    </div>            
                </div>                
            </div>
            
            <hr>
            <h4 class="text-secondary mb-3">Selecciona un doctor</h4>
            <div class="row">
                <div class="mb-3 col-lg-4 col-6">
                    <div class="card bg-light shadow">
                        <div class="card-header"> 
                            <div class="d-flex align-items-center justify-content-between">                       
                                <p class="mb-0">Doctor 1</p>                        
                                <div class="float-right">
                                    <button class="btn btn-success rounded-circle square-btn" onclick="selectPacient">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="text-center">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-dark"></i>
                                    <i class="fa fa-user-md fa-stack-1x fa-inverse"></i>
                                </span>
                            </h1>
                            <h5 class="card-title text-center mb-1">Dr. Juan Carlos</h5>
                            <h5 class="card-title text-center text-secondary">Palacios Mata</h5>                        
                        </div>
                    </div>            
                </div>
            </div>

            <hr>
            <h4 class="text-secondary mb-3">Selecciona una fecha y hora</h4>
            <div class="row">
                <div class="col-lg-6 col-12 mb-3">                
                        <label for="start">Fecha:</label>
                        <input type="date" id="start" class="form-control" name="fecha-cita"
                            value="2021-05-24"
                            min="2021-05-24" max="2021-06-01"
                            aria-describedby="fechaHelpBlock">
                        <small id="fechaHelpBlock" class="form-text text-muted">
                            **Tenemos consultas todos los días.
                        </small>                   
                </div>
                <div class="col-lg-6 col-12 mb-5">                
                    <label for="start">Hora:</label>
                    <input type="time" id="start" class="form-control" name="hora-cita"
                        step="900"
                        min="09:00" max="18:00"
                        value="12:00" aria-describedby="horaHelpBlock">
                        <small id="horaHelpBlock" class="form-text text-muted">
                          **El horario para consultas es de 12:00 p.m. a 11:00p.m. <br>
                          **La hora seleccionada esta sujeta a cambios.
                        </small>                  
                </div>
                <div class="col-lg-4 offset-lg-4 col-12 mb-3">
                    <button type="button" class="btn btn-success btn-block">Agendar Cita</button>
                </div>
            </div>
        ';
        break;
      case "2":
        echo '
        <div class="row">
            <div class="col-lg-9">
                <h1 class="mb-2">Tu familia</h1>
                <h4 class="text-secondary mb-3">Aquí puedes administrar a las personas de tu familia.</h4>
            </div>
            <div class="col-lg-3 align-items-bottom align-self-end">
                <button class="btn btn-primary float-right" type="button" data-toggle="modal" data-target="#addModal">
                    <i class="fa fa-plus mr-2"></i>
                    Agregar Familiar
                </button>
            </div>
        </div>

        <hr>
        
        <div class="row">            
            <div class="mb-3 col-lg-4 col-6">
                <div class="card bg-light">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">                       
                            <p class="mb-0">Familiar 1</p>                        
                            <div class="float-right">
                                <button type="submit" class="btn btn-outline-dark mr-2" id="btnAdd">
                                    <i class="fa fa-trash"></i>                                
                                </button>                        
                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#addModal">
                                    <i class="fa fa-pencil"></i>                                
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x text-dark"></i>
                                <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                            </span>
                        </h1>
                        <h5 class="card-title text-center mb-1">Alexis</h5>
                        <h5 class="card-title text-center text-secondary">Juanes Loera</h5>  
                        <hr>
                        <p class="card-text">
                            Télefono: 618 123 4545 <br>
                            Edad: 21
                        </p>                        
                    </div>
                </div>            
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
                            <div class="col-lg-6 col-12 mb-3">
                                <label for="inputState">Sexo</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Seleccionar...</option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-3">
                                <label for="start">Fecha de Nacimiento:</label>
                                <input type="date" id="start" class="form-control" name="trip-start"
                                    value="2021-05-23"
                                    min="1920-01-01" max="2021-05-01">
                            </div>
                            <div class="col-lg-6 col-12 mb-3">
                                <label for="nombre">Teléfono:</label>
                                <input type="text" class="form-control" placeholder="Teléfono" name="telefono" id="telefono">
                            </div>
                        </div>                                
                    </form>
            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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
                <img class="rounded mx-auto d-block square-img-profile mb-3" src="https://spoiler.bolavip.com/__export/1617910833459/sites/bolavip/img/2021/04/08/crean_una_lista_de_spotify_para_llorar_por_henry_cavill_y_su_nueva_novia_crop1617910832505.jpg_423682103.jpg">
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
                        <div class="col-lg-6 col-12 mb-3">
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