<?php    
    $query = $_POST['query'];

    switch($query){
        case "cUser": createUser(); break;
        case "rUser": readUsers(); break;
        case "uUser": updateUser(); break;
        case "dUser": deleteUser(); break;
        case "uModal": getUpdateModal(); break; 
    }

    function createUser(){
        include '../../query/connect.php';

        $rootImage = "img/usuarios/";

        $username = $_POST['usernameAdd'];
        $password = $_POST['passwordAdd'];
        $nombre = $_POST['nombreAdd'];
        $apellidop = $_POST['apellidopAdd'];
        $apellidom = $_POST['apellidomAdd'];
        $sexo = $_POST['sexoAdd'];
        $fecha = $_POST['fechaAdd'];
        $telefono = $_POST['telefonoAdd'] != "" ? $_POST['telefonoAdd'] : "S/N";
        $tipo = $_POST['tipo'];
        $destino = "";

        $foto=$_FILES["imagenAdd"]["name"];
        $ruta=$_FILES["imagenAdd"]["tmp_name"];
        
        if($foto != ""){
            $destino=$rootImage.$foto;
            copy($ruta,"../../".$destino);        
        }else{
            $destino="img/noImageUser.png";
        }

        $sentencia = $mbd->prepare("INSERT INTO Usuarios (Username, Password, Nombre, ApellidoPaterno, ApellidoMaterno, Sexo, FechaNacimiento, Telefono, Tipo, Image) VALUES (:user, :pas, :nom, :ap, :am, :sex, :fn, :tel, :tip, :img)");
        $sentencia->bindParam(":user", $username);
        $sentencia->bindParam(":pas", $password);
        $sentencia->bindParam(":nom", $nombre);
        $sentencia->bindParam(":ap", $apellidop);
        $sentencia->bindParam(":am", $apellidom);
        $sentencia->bindParam(":sex", $sexo);
        $sentencia->bindParam(":fn", $fecha);
        $sentencia->bindParam(":tel", $telefono);
        $sentencia->bindParam(":tip", $tipo);
        $sentencia->bindParam(":img", $destino);

        $array = null;
        
        $sentencia->execute($array) or die(print_r($sentencia->errorInfo(), true));

        $mbd = null;
    }

    function readUsers()
    {
        include '../../query/connect.php';

        $tipo = $_POST["tipo"];
        $nombre = $_POST["searchText"] ?? "";        
        $sentencia = null;

        if($nombre == ""){
            $sentencia = $mbd->prepare("SELECT * FROM usuarios u WHERE u.Tipo = ?");
            $sentencia->bindValue(1, $tipo, PDO::PARAM_STR);
        }else{
            $nombre = strtolower("" .$nombre. "%");
            $sentencia = $mbd->prepare("SELECT * FROM usuarios u WHERE u.Tipo = ? and LOWER(u.Username) like ?");
            $sentencia->bindValue(1, $tipo, PDO::PARAM_STR);
            $sentencia->bindValue(2, $nombre, PDO::PARAM_STR);
        }
        
        
        $array = null;
        $sentencia->execute($array) or die(print_r($sentencia->errorInfo(), true));        
            
        echo '
            <table class="table bg-white">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col" width="150px">Opciones</th>
                    </tr>
                </thead>
                <tbody>
        ';
        $i = 1;
        while ($row = $sentencia->fetch())
        {
            echo '
                <tr>
                    <th scope="row">'.$i.'</th>
                    <td>'.$row['Username'].'</td>
                    <td>'.$row['Nombre'].'</td>
                    <td>'.$row['Telefono'].'</td>
                    <td>
                        <div class="d-flex justify-content-around mb-1">                    
                            <button id="prevPage" class="btn btn-primary px-3 mr-1 rounded" onclick="setDeleteUser('.$row['IdUsuario'].', '."'".$row['Username']."'".')">
                                <i class="fa fa-trash-o"></i>
                            </button>
                            <button id="prevPage" class="btn btn-secondary px-3 rounded" onclick="setUpdateUser('.$row['IdUsuario'].')">
                                <i class="fa fa-pencil-square-o "></i>
                            </button>
                        </div>
                    </td>
                </tr> 
            ';
            $i += 1;
        }
        echo '
                </tbody>
            </table>
        ';
        $sentencia = null;
    }    

    function updateUser()
    {
        include '../../query/connect.php';

        $rootImage = "img/usuarios/";

        $idUsuario = $_POST['IdUsuario'];
        $username = $_POST['usernameUpdate'];
        $password = $_POST['passwordUpdate'];
        $nombre = $_POST['nombreUpdate'];
        $apellidop = $_POST['apellidopUpdate'];
        $apellidom = $_POST['apellidomUpdate'];
        $sexo = $_POST['sexoUpdate'];
        $fecha = $_POST['fechaUpdate'];
        $telefono = $_POST['telefonoUpdate'] != "" ? $_POST['telefonoUpdate'] : "S/N";
        $destino = "";

        $foto=$_FILES["imagenUpdate"]["name"];
        $ruta=$_FILES["imagenUpdate"]["tmp_name"];
        
        $sentencia = "";
        if($foto != "")
        {
            $destino=$rootImage.$foto;
            copy($ruta,"../../".$destino);                                
            $sentencia = $mbd->prepare("UPDATE Usuarios SET Username = :user, Password = :pas, Nombre = :nom, ApellidoPaterno = :ap, ApellidoMaterno = :am, "
            . "Sexo = :sex, FechaNacimiento = :fn, Telefono = :tel, Image = :img "
            . "WHERE IdUsuario = :id");
            $sentencia->bindParam(":img", $destino);
        }
        else{
            $sentencia = $mbd->prepare("UPDATE Usuarios SET Username = :user, Password = :pas, Nombre = :nom, ApellidoPaterno = :ap, ApellidoMaterno = :am, "
            . "Sexo = :sex, FechaNacimiento = :fn, Telefono = :tel "
            . "WHERE IdUsuario = :id");
        }

        $sentencia->bindParam(":user", $username);
        $sentencia->bindParam(":pas", $password);
        $sentencia->bindParam(":nom", $nombre);
        $sentencia->bindParam(":ap", $apellidop);
        $sentencia->bindParam(":am", $apellidom);
        $sentencia->bindParam(":sex", $sexo);
        $sentencia->bindParam(":fn", $fecha);
        $sentencia->bindParam(":tel", $telefono);
        $sentencia->bindParam(":id", $idUsuario);
        
        $array = null;
        $sentencia->execute($array) or die(print_r($sentencia->errorInfo(), true));

        $mbd = null;

    }

    function getUpdateModal(){
        include '../../query/connect.php';
        $idUsuario = $_POST['IdUsuario'];
        $sentencia = $mbd->prepare('SELECT * FROM usuarios u WHERE IdUsuario = :id');
        $sentencia->bindParam(":id", $idUsuario);
        $sentencia->execute();

        $row = $sentencia->fetch();
        echo 
        '
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Actualizar usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="UpdateUser" enctype="multipart/form-data">
                        <div class="form-group pt-2">
                            <label for="usernameUpdate">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="usernameUpdate" name="usernameUpdate" placeholder="Nombre de Usuario" value="'.$row["Username"].'">
                        </div>    

                        <div class="form-group">
                            <label for="passwordUpdate">Contraseña</label>
                            <input type="password" class="form-control" id="passwordUpdate" name="passwordUpdate" placeholder="Contraseña" autocomplete="on" value="'.$row["Password"].'">
                        </div>

                        <div class="form-group">
                            <label for="nombreUpdate">Nombre</label>
                            <input type="text" class="form-control" id="nombreUpdate" name="nombreUpdate" placeholder="Nombre" value="'.$row["Nombre"].'">
                        </div>

                        <div class="form-group">
                            <label for="apellidopUpdate">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apellidopUpdate" name="apellidopUpdate" placeholder="Apellido Paterno" value="'.$row["ApellidoPaterno"].'">
                        </div>

                        <div class="form-group">
                            <label for="apellidomUpdate">Apellido Materno</label>
                            <input type="text" class="form-control" id="apellidomUpdate" name="apellidomUpdate" placeholder="Apellido Materno" value="'.$row["ApellidoMaterno"].'">
                        </div>                                    
                        
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-4">
                                <label for="sexoUpdate">Sexo</label>
                                <select id="sexoUpdate" name="sexoUpdate" class="form-control" value="'.$row["Sexo"].'">                                    
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    <option>Otro</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-12 mb-4">
                                <label for="fechaUpdate">Fecha de Nacimiento:</label>
                                <input type="date" id="fechaUpdate" class="form-control" name="fechaUpdate"
                                    value="'.$row["FechaNacimiento"].'"
                                    min="1920-01-01" max="2021-05-01">
                            </div>
                        </div>  

                        <div class="form-group">
                            <label for="telefonoUpdate">Teléfono</label>
                            <input type="text" class="form-control" id="telefonoUpdate" name="telefonoUpdate" placeholder="Teléfono" value="'.$row["Telefono"].'">
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label>Imagen Actual</label>
                            </div>
                            <div class="col-8 offset-2 mb-2">
                                
                                <img src="'."../".$row["Image"].'" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="imagenUpdate">Actualizar Imagen</label>
                            <input type="file" class="form-control" id="imagenUpdate" name="imagenUpdate" placeholder="Imagen de Categoria">
                        </div>
                        
                        <hr>
                        <div class="form-group float-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" onclick="updateUser()">Guardar Cambios</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        ';
    }

    function deleteUser()
    {
        include '../../query/connect.php';

        $idUsuario = $_POST['IdUsuario'];

        $sentencia = $mbd->prepare("DELETE FROM Usuarios WHERE IdUsuario = :id");
        $sentencia->bindParam(":id", $idUsuario);

        $sentencia->execute();

        $mbd = null;
    }

?>