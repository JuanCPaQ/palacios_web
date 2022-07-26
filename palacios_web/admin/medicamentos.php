<?php

$nombreTabla = 'Medicamentos';
$titulo = 'Administrador - '.$nombreTabla;
include './components/header2.php';

echo '
    <div class="container-fluid mt-5 p-0 bg-white">
        <div class="container p-5 bg-gray-purple shadow">  
            <div class="row mb-1">
                <div class="col-lg-6 col-12">          
                    <h1 id="tablaNombre">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-archive fa-stack-1x fa-inverse"></i>
                        </span>
                        '.$nombreTabla.'
                    </h1>                    
                </div>
                <div class="col-lg-6 col-12 align-self-end">
                    <form method="POST" id="search" enctype="multipart/form-data" class="form-inline float-right">
                        <div class="form-group mb-2 mr-2">
                            <input type="text" class="form-control" id="searchText" name="searchText" placeholder="Buscar...">
                        </div>                        
                        <button type="submit" class="btn btn-outline-primary mr-2 mb-2" id="btnAdd">
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
                <div class="col-12 rounded">
                    <table class="table bg-white">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Categoría</th>
                            <th scope="col" width="150px">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
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
                    <h5 class="modal-title" id="addModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="altaForm" enctype="multipart/form-data">
                        <div class="form-group pt-2">
                            <label for="categoriaAdd">Nombre</label>
                            <input type="text" class="form-control" id="categoriaAdd" name="categoriaAdd" placeholder="Nombre">
                        </div>

                        <div class="form-group">
                            <label for="imagenAdd">Descripción</label>
                            <input type="text" class="form-control" id="imagenAdd" name="imagenAdd" placeholder="Descripción">
                        </div>

                        <div class="form-group">
                            <label for="imagenAdd">Categoría</label>
                            <input type="text" class="form-control" id="imagenAdd" name="imagenAdd" placeholder="Categoría">
                        </div>

                        <hr>
                        <div class="form-group float-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" id="btnAddCat">Agregar </button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
';

include './components/footer.php';

?>