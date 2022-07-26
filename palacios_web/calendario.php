<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Calendario</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="fonts/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/ionicons.min.css">
        <link rel="stylesheet" href="fonts/simple-line-icons.min.css">
        <link rel="stylesheet" href="fonts/fontawesome5-overrides.min.css">
        <link rel="stylesheet" href="css/Bootstrap-Calendar.css">
        <link rel="stylesheet" href="css/Footer-Basic-1.css">
        <link rel="stylesheet" href="css/Footer-Basic.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="css/Ludens---3-Edit.css">
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/moment.min.js"></script>

        <!--Full Calendar-->
        <link rel="stylesheet" href="css/fullcalendar.min.css">
        <script src="js/fullcalendar.min.js"></script>
        <script src="js/es.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">LOGO Consultorio Palacios</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link">Sitio del Doctor<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./dashDoctor.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./calendario.php">Calendario</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button type="button" class="btn btn-danger mr-2 my-1 px-3 rounded" data-toggle="modal" data-target="#modalIniciarSesion">
                        <i class="fa fa-times"></i> Cerrar Sesión
                    </button>
                </form>
            </div>
        </nav>
<?php

echo '
    <div class="container-fluid px-0 pb-0 pt-5">
        <div class="container p-5 bg-gray-purple shadow">
            <div class="d-flex align-items-center">
                <h1 class="mr-2">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                    </span>
                </h1>
                <div>
                    <h2>Calendario</h2>            
                    <h6 class="text-secondary">Agenda de "Nombre de Usuario"</h6>
                </div>
            </div>
            
            <hr>
';

?>

            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12"> <div id="Calendarioweb"></div></div>                
            </div>
            <script>
                $(document).ready(function(){
                    $('#Calendarioweb').fullCalendar({
                        header:{
                            left:'today,prev,next',
                            center:'title',
                            right:'month,basicWeek,basicDay,agendaWeek,agendaDay'
                        },
                        customButtons:{
                            
                        },
                        dayClick:function(date,jsEvent,view){
                            alert("Valor seleccionado: "+date.format());
                            alert("Vista actual"+view.name);
                            $(this).css('background-color','red');
                            $("#exampleModal").modal();
                        },
                        events:[
                            {
                                title:'Evento 1',
                                start:'2021-05-21',
                                end:'2021-05-21',
                            },
                            {
                                title:'Evento 2',
                                start:'2021-05-22T12:30:00',
                                allDay:false
                            }
                        ]
                    });
                });
            </script>
<?php

echo '        </div>
    </div>
';


include './components/footer.php';
?>