<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Texts</title>
    <!-- CREA LA TABLA TEXTS PARTIENDO DE UNA TABLA EXCEL-->
    <?php
    include 'common/css.php';
    ?>
</head>

<body>

    <?php

    require('funciones.php');
    $contador = verificar_text();
    $mensaje = "";

    $idioma = mostrar_idioma();
    $idioma = $idioma['lang'];

    if($contador > 0){
        switch($idioma){
            case 1:
                $mensaje = "Ya se han insertado los valores";
                break;
            case 2: 
                $mensaje = "Ja s'han insertat el valors";
                break;
            case 3:
                $mensaje = "Texts already been inserted";
                break;
        }
    }else{
        switch($idioma){
            case 1:
                $mensaje = "Insertando valores";
                break;
            case 2: 
                $mensaje = "Insertant valors";
                break;
            case 3:
                $mensaje = "Inserting values";
                break;
        }
    }
    ?>

    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-lg-12">
                <div class="alert alert-info" role="alert">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2>Create Texts - <?php echo $mensaje; ?></h2>
                        </div>
                        <div class="col-lg-4">
                            <a href="index.php" class="btn btn-danger float-right">Volver atrás</a>
                            <!-- 0nclick=window.print() es para imprimir-->
                            <a onclick="window.print()" href="#" class="btn btn-primary float-right mr-2">Imprimir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        require_once 'PHPExcel/Classes/PHPExcel.php';

        if ($contador == 0) {
            $archivo = "files/texts.xlsx";

            $inputFileType = PHPExcel_IOFactory::identify($archivo);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($archivo);
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();

            /* La fila 1 es el encabezado del fichero, por eso cokmienzo en fila 2 */
            /* $flag indicara las filas a pasar. Si hay muchas se puede dividir entre varias pasadas */

            $flag = $highestRow

            //************************************* */


        ?>

            <table border="1" class="table table-bordered table-striped myTable">
                <?php
                for ($row = 2; $row <= $flag; $row++) {
                    $a = $sheet->getCell("A" . $row)->getValue();
                    $b = $sheet->getCell("B" . $row)->getValue();
                    $c = $sheet->getCell("C" . $row)->getValue();
                    $d = $sheet->getCell("D" . $row)->getValue();
                    $e = $sheet->getCell("E" . $row)->getValue();

                    $lang = (int)$a;
                    $program = (int)$b;
                    $num = (int)$c;
                    $code = $lang * 100000 + $program * 100 + $c;
                    $texto = $e;
                    
                    insertar_texts($lang, $program, $num, $code, $texto);

                ?>
                    <tr>
                        <td><?php echo $lang; ?></td>
                        <td><?php echo $program; ?></td>
                        <td><?php echo $num; ?></td>
                        <td><?php echo $code; ?></td>
                        <td><?php echo $texto; ?></td>


                <?php
                }
            }
                ?>

    </div>
</body>

</html>