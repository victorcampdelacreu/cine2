<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
    include 'common/css.php';
    require('funciones.php');
    $a= 'LOGIN';
    $return = 'index.php';
    barra($a,$return);
    ?>
</head>

<body>
    <!-- inicio input-->
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

                    <form action="inicio_usuario.php" method="POST">
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <label for="email" class="form-label">email</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label for="pass" class="form-label">clave</label>
                                <input name="pass" type="password" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>


        <!--------------------------------------------------------------->

</body>

</html>