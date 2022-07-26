<?php

include './components/header3.php';

echo '
    <div class="container-fluid px-0 pb-0 pt-5">
        <div class="container p-5 bg-gray-purple shadow">           
            <div class="d-flex align-items-center">
                <h1 class="mr-2">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
                    </span>
                </h1>
                <div>
                    <h3 class="mb-2">Historia Clínica</h3>
                    <h5 class="text-secondary mb-3">Aquí puedes anotar los datos relacionados con la consulta.</h5>
                </div>
            </div>
            
            <hr>
            
            <div class="row">
                <div class="col-lg-5 col-12">
                    <form class="px-3">  
                        <div class="row">              
                            <div class="col-12 mb-2">
                                <h5 class="m-0">
                                    <span class="fa-stack mr-2">
                                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                        <i class="fa fa-user-o fa-stack-1x fa-inverse"></i>
                                    </span>
                                    Datos del Paciente
                                </h5>                               
                            </div> 
                        </div>
                        <hr class="mt-0 mb-2">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" value="Juan Carlos" disabled>
                            </div>                    
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-3">
                                <label for="nombre">Apellido Paterno:</label>
                                <input type="text" class="form-control" placeholder="Apellido Paterno" name="apellidop" id="apellidop" value="Palacios" disabled>
                            </div>
                            <div class="col-lg-6 col-12 mb-3">
                                <label for="nombre">Apellido Materno:</label>
                                <input type="text" class="form-control" placeholder="Apellido Materno" name="apellidom" id="apellidom" value="Quiñones" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-4">
                                <label for="inputState">Sexo</label>
                                <select id="inputState" class="form-control" disabled>
                                    <option>Seleccionar...</option>
                                    <option selected>Masculino</option>
                                    <option>Femenino</option>
                                </select>
                            </div>                        
                            <div class="col-lg-6 col-12 mb-4">
                                <label for="start">Edad:</label>
                                <input type="number" id="start" class="form-control" name="trip-start"
                                    value="21" disabled>
                            </div>                                                     
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-3">
                                <label for="altura">Altura:</label>
                                <input type="number" class="form-control" placeholder="Altura" name="altura" id="altura" value="1.79">
                            </div>
                            <div class="col-lg-6 col-12 mb-3">
                                <label for="peso">Peso:</label>
                                <input type="number" class="form-control" placeholder="Peso" name="peso" id="peso" value="69">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-5">                            
                                <label for="exampleFormControlTextarea1">Anotaciones</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Anotaciones"></textarea>
                            </div>  
                        </div>                                                                                                                           
                    </form>
                </div>
                <div class="col-lg-6 offset-lg-1 col-12">
                    <form class="px-3">
                        <div class="row">              
                            <div class="col-12 mb-2">
                                <h5 class="m-0">
                                    <span class="fa-stack mr-2">
                                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                        <i class="fa fa-heart-o fa-stack-1x fa-inverse"></i>
                                    </span>
                                    Datos de la Consulta
                                </h5>                               
                            </div> 
                        </div>
                        <hr class="mt-0 mb-2">
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-3">                
                                <label for="start">Fecha:</label>
                                <input type="date" id="start" class="form-control" name="fecha-cita"
                                    value="2021-05-24"
                                    min="2021-05-24" max="2021-06-01"
                                    aria-describedby="fechaHelpBlock" disabled>                 
                            </div>
                            <div class="col-lg-6 col-12 mb-3">                
                                <label for="start">Hora:</label>
                                <input type="time" id="start" class="form-control" name="hora-cita"
                                    step="900"
                                    min="09:00" max="18:00"
                                    value="12:00" aria-describedby="horaHelpBlock" disabled>                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-3">                            
                                <label for="exampleFormControlTextarea1">Síntomas</label>
                                <textarea style="height:153px;" class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Describe los síntomas"></textarea>
                            </div>  
                        </div> 
                        <div class="row">
                            <div class="col-12 mb-3">                            
                                <label for="exampleFormControlTextarea1">Diagnóstico</label>
                                <textarea style="height:153px;" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Diagnóstico"></textarea>
                            </div>  
                            <div class="col-lg-6 offset-lg-6 col-12 mb-3">
                                <button type="button" class="btn btn-success btn-block">Finalizar Consulta</button>
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