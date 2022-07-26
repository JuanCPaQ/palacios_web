<?php

include './components/header2.php';

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
                    <h2>Dashboard Usuario</h2>            
                    <h6 class="text-secondary">Bienvenido "Nombre de Usuario"</h6>
                </div>
            </div>          
            <div class="mt-4 mb-2">
                <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                    <label class="btn btn-primary active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="option2" autocomplete="off"> Radio
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="option3" autocomplete="off"> Radio
                    </label>
                </div>
            </div>

            <hr>

            <div id="mainContent">

            </div>

        </div>
    </div>
';

include './components/footer.php';

?>