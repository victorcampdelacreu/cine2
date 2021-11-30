<!DOCTYPE html>
<html lang="en">

<?PHP
require 'funciones.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuarios</title>
    <?php
    include 'common/css.php';
    ?>
</head>

<body>
    <!-- inicio input-->
    


    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-lg-12">
                <div class="alert alert-info" role="alert">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2>INPUT USUARIOS</h2>
                        </div>
                        <div class="col-lg-8">
                            <a href="index.php" class="btn btn-danger float-right">RETURN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Formulario entrada  ------------------------------------->
        <div class="container">

            <?php
            if (isset($_GET['mensaje'])) {
            ?>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="alert alert-warning">
                            <?php echo $_GET['mensaje']; ?>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="row mt-4">
                <div class="col-lg-6 offset-lg-3">

                    <form action="registrar_usuario.php" method="POST">
                        <div class="row mt-4">
                            <div class="col-lg-12 mb-3">
                                <label for="nombre" class="form-label">NOMBRE</label>
                                <input name="nombre" type="text" class="form-control">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label for="email" class="form-label">EMAIL</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                            <div class="col-lg-12">
                                <label for="pass" class="form-label">CLAVE</label>
                                <input name="pass" type="password" class="form-control">
                            </div>
                            <div class="col-lg-12">
                                <label for="rol" class="form-label">ROL</label>
                                <input name="rol" type="TEXT" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn btn-primary">ACEPTAR</button>
                            </div>
                        </div>
                        
                    </form>

                </div>
            </div>
        </div>


        <!--------------------------------------------------------------->

</body>

</html>