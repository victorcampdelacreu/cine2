<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TDR CLIMA</title>
    <?php
    include 'common/css.php';
    ?>
</head>

<body>
    <!-- rutina para navbar (navegador)-->
    <div class="row">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Create
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="create_states.php">Create state</a></li>
                                    <li><a class="dropdown-item" href="create_events.php">Create events</a></li>
                                    <li><a class="dropdown-item" href="create_global.php">Creaate global 0</a></li>
                                    <li><a class="dropdown-item" href="create_no_states.php">Create no states = 0</a></li>
                                    <li><a class="dropdown-item" href="no_state.php">No state</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    List
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="list_states.php">List states</a></li>
                                    <li><a class="dropdown-item" href="list_no_estados.php">List state & no states</a></li>
                                    <li><a class="dropdown-item" href="list_global.php">List Global</a></li>
                                    <li><a class="dropdown-item" href="leer_excel_transporte.php">Transport</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!----------------------------------------------------------------->
    <!-- inicio definicion cajas de index-->

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3">
                <div class="row mt-2">

                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-warning" href="guardar_global.php">Update global</a>
                    </div>
                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-warning" href="guardar_rain_temp.php">Update Rain & temp</a>
                    </div>
                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-success" href="list_states.php">List states</a>
                    </div>
                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-success" href="list_no_estados.php">List states & no states</a>
                    </div>
                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-success" href="list_global.php">List Global</a>
                    </div>
                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-success" href="list_averages_global.php">List Averages Global</a>
                    </div>
                    
                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-primary" href="paso_a_excel_global.php">Transform gobal to excel </a>
                    </div>
                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-primary" href="paso_averages_excel.php">Transform averages to excel </a>
                    </div>
                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-primary" href="paso_a_excel_global_no_0.php">Transform gobal to excel without 0 </a>
                    </div>
                    
                </div>

                <!-- Imagen (mapa USA)-->
            </div>

            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-12">
                        <img class="img-fluid img-responsive imagen" src="img/precipitations.png" />
                    </div>
                    <div class="col-lg-12 mt-2">
                        <img class="img-fluid img-responsive imagen" src="img/temperatures.gif" />
                    </div>
                </div>
            </div>



        </div>

    </div>

    <?php
    include 'common/js.php';
    ?>
</body>

</html>