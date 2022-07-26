<?php
    echo '
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>'.$titulo.'</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="../fonts/font-awesome.min.css">
        <link rel="stylesheet" href="../fonts/ionicons.min.css">
        <link rel="stylesheet" href="../fonts/simple-line-icons.min.css">
        <link rel="stylesheet" href="../fonts/fontawesome5-overrides.min.css">
        <link rel="stylesheet" href="../css/Bootstrap-Calendar.css">
        <link rel="stylesheet" href="../css/Footer-Basic-1.css">
        <link rel="stylesheet" href="../css/Footer-Basic.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../css/Ludens---3-Edit.css">
        <link rel="stylesheet" href="../css/styles.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="./">LOGO Consultorio Palacios</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">                   
                    <li class="nav-item active">
                        <a class="nav-link" href="./">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./doctores.php">Doctores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./consultorios.php">Consultorios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./medicamentos.php">Medicamentos</a>
                    </li>               
                    <li class="nav-item">
                        <a class="nav-link" href="./usuarios.php">Usuarios</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a type="button" class="btn btn-primary mr-2 my-1 rounded" href="../index.php">
                        <i class="fa fa-pencil-square-o"></i> Ir a la página principal
                    </a>
                </form>
            </div>
        </nav>
    ';
?>