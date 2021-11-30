<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
    <?php
    include 'common/css.php';
    ?>
    <!-- <link rel="stylesheet" href="estilos.css"> -->
    <link rel="stylesheet" href="estilos2.css">
</head>

<body class="body">


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
                                    List
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="list_states.php">List states</a></li>
                                    
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
    <?php
    $a= 'ADMINISTRACION';
    $z = 'RETURN';
    $p = 'PRINT';
    ?>
    <!-- Barra RETURN ----->
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-lg-12">
                <div class="alert alert-info" role="alert">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2><?php echo $a; ?></h2>
                        </div>

                        <div class="col-lg-6">
                            <a href="index.php" class="btn btn-danger float-right"><?php echo $z; ?></a>
                            <!-- 0nclick=window.print() es para imprimir-->
                            <a onclick="window.print()" href="#" class="btn btn-primary float-right mr-2"><?php echo $p; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!----------------------------------------------------------------->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3">
                <div class="row mt-2">

                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-warning" href="en_peliculas.php">PELICULAS</a>
                    </div>
                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-warning" href="en_salas.php">SALAS</a>
                    </div>
                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-warning" href="en_mapas.php">MAPAS SALAS</a>
                    </div>
                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-warning" href="en_precios.php">PRECIOS</a>
                    </div>
                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-warning" href="en_cartelera.php">CARTELERA</a>
                    </div>
                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-warning" href="en_espectadores.php">ESPECTADORES</a>
                    </div>
                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-warning" href="listado_espectadores.php">LISTADO ESPECTADORES</a>
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