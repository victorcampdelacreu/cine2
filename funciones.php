<?php

use function PHPSTORM_META\map;

require('config.php');

//define las funciones del proyecto */

function insertar_pelicula($nombre, $link)
{
    $query = "INSERT INTO peliculas(nombre, link) VALUES ('$nombre', '$link')";
    $result = mysqli_query(OpenCon(), $query);
    return true;
}

function listar_peliculas()
{
    $sql = "SELECT * FROM peliculas";
    $result = mysqli_query(OpenCon(), $sql);
    return $result;
}


function eliminar_pelicula($id)
{
    $query = "DELETE FROM peliculas WHERE id = '$id'";
    $result = mysqli_query(OpenCon(), $query);
    return true;
}

function buscar_pelicula($id)
{
    $query = "select nombre FROM peliculas where id =$id";
    $result = mysqli_query(OpenCon(), $query);
    $res = mysqli_fetch_array($result);
    return $res;
}
//************************************************************************** */
function insertar_sala($nombre, $direccion, $poblacion, $numFilas, $numColumnas)
{
    $query = "INSERT INTO salas(nombre, direccion, poblacion, numFilas, numColumnas) VALUES ('$nombre', '$direccion', '$poblacion','$numFilas','$numColumnas')";
    $result = mysqli_query(OpenCon(), $query);
    return true;
}

function listar_salas()
{
    $sql = "SELECT * FROM salas";
    $result = mysqli_query(OpenCon(), $sql);
    return $result;
}


function eliminar_sala($id)
{
    $query = "DELETE FROM salas WHERE id = '$id'";
    $result = mysqli_query(OpenCon(), $query);
    return true;
}

function buscar_sala($sala_id)
{
    $query = "select * FROM salas where id ='$sala_id'";
    $result = mysqli_query(OpenCon(), $query);
    return $result;
}
//************************************************************************ */

function insertar_mapa($sala_id, $fila, $columna, $butaca, $zona)
{
    $query = "INSERT INTO mapas(sala_id, fila, columna, butaca, zona) VALUES ('$sala_id', '$fila', '$columna', '$butaca','$zona')";
    $result = mysqli_query(OpenCon(), $query);
    return true;
}

function listar_mapas()
{
    $sql = "SELECT * FROM mapas";
    $result = mysqli_query(OpenCon(), $sql);
    return $result;
}


function eliminar_mapa($id)
{
    $query = "DELETE FROM mapas WHERE id = '$id'";
    $result = mysqli_query(OpenCon(), $query);
    return true;
}
//*************************************************************** */

function insertar_precio($sala_id, $zona, $sesion, $precioButaca)
{
    $query = "INSERT INTO precios(sala_id, zona, sesion, precioButaca) VALUES ('$sala_id', '$zona', '$sesion','$precioButaca')";
    $result = mysqli_query(OpenCon(), $query);
    return true;
}

function listar_precios()
{
    $sql = "SELECT * FROM precios";
    $result = mysqli_query(OpenCon(), $sql);
    return $result;
}

function eliminar_precio($id)
{
    $query = "DELETE FROM precios WHERE id = '$id'";
    $result = mysqli_query(OpenCon(), $query);
    return true;
}

//************************************************************************** */
function insertar_cartelera($fechaInicio, $fechaFinal, $sala_id, $sesion, $horaInicio, $pelicula_id)
{
    $query = "INSERT INTO cartelera(fechaInicio,fechaFinal,sala_id,sesion,horaInicio,pelicula_id) VALUES ('$fechaInicio', '$fechaFinal','$sala_id', '$sesion','$horaInicio','$pelicula_id')";
    $result = mysqli_query(OpenCon(), $query);
    return true;
}

function listar_cartelera()
{
    $sql = "SELECT * FROM cartelera";
    $result = mysqli_query(OpenCon(), $sql);
    return $result;
}


function eliminar_cartelera($id)
{
    $query = "DELETE FROM cartelera WHERE id = '$id'";
    $result = mysqli_query(OpenCon(), $query);
    return true;
}

//******************************************************************* */

function insertar_espectador($nombre, $DNI, $tarjeta)
{
    $query = "INSERT INTO espectadores(nombre, DNI, tarjeta) VALUES ('$nombre','$DNI', '$tarjeta')";
    $result = mysqli_query(OpenCon(), $query);
    return true;
}

function registrar_espectador($nombre, $DNI, $tarjeta)
{
    $query = "INSERT INTO espectadores(nombre, DNI, tarjeta) VALUES ('$nombre', '$DNI', '$tarjeta')";
    $result = mysqli_query(OpenCon(), $query);
    return true;
}

function listar_espectadores()
{
    $sql = "SELECT * FROM espectadores";
    $result = mysqli_query(OpenCon(), $sql);
    return $result;
}


function eliminar_espectador($id)
{
    $query = "DELETE FROM espectadores WHERE id = '$id'";
    $result = mysqli_query(OpenCon(), $query);
    return true;

}

function comprobar_espectador($DNI){
    $sql = "SELECT * FROM espectadores WHERE DNI = '$DNI' ";
    $result = mysqli_query(OpenCon(), $sql);   
    return $result->num_rows; // pasa el resultado a num_rows
}
//***************************************************************** */

function buscar_tarjetaEspectador($DNI)
{
    $query = "select tarjeta FROM espectadores where DNI ='$DNI'";
    $result = mysqli_query(OpenCon(), $query);
    $res = mysqli_fetch_array($result);
    return $res;
}



//******************************************************************** */

function calculo_zona($f, $c, $n, $m)
{

    if ($c > 3 && $c <= $m - 3 && $f < $n - 3) {
        $zona = 1;
    } else {
        if ($f >= $n - 3) {
            $zona = 3;
        } else {
            $zona = 2;
        }
    }
    $result = $zona;
    return $result;
}

function calculo_butaca($c, $m)
{
    if ($c <= $m / 2) {
        $butaca = (($m / 2) - $c) * 2 + 1;
    } else {
        $butaca = (($m / 2) - $c) * (-2);
    }
    $result = $butaca;
    return $result;
}

// ******************************************************** */
function comprobar_compra($fecha, $sala_id,$sesion,$fila,$butaca){
    $sql = "SELECT * FROM compras WHERE fecha = '$fecha' and sala_id = $sala_id and sesion= $sesion and fila = $fila and butaca = $butaca ";
    $result = mysqli_query(OpenCon(), $sql);   
    return $result->num_rows; // pasa el resultado a num_rows
}

function insertar_compra($fecha,$sala_id,$pelicula_id,$sesion,$fila,$butaca,$precio,$cartelera_id)
{
    $query = "INSERT INTO compras(fecha,sala_id,sesion,fila,butaca,precio,cartelera_id) VALUES ('$fecha','$sala_id','$pelicula_id','$sesion','$fila','$butaca','$precio','$cartelera_id)";
    $result = mysqli_query(OpenCon(), $query);
    return true;
}
//********************************************************* */
function insertar_tabla($tabla){
    $sql = "INSERT INTO javier (tabla) VALUES ('$tabla')";
    $result = mysqli_query(OpenCon(), $sql);
    return true;
}

function listar_tabla()
{
    $query = "select * FROM javier";
    $result = mysqli_query(OpenCon(), $query);
    return $result;
    
}
//******************************************************** */
function buscar_precio($sala_id, $zona, $sesion){
    $query="SELECT precioButaca FROM precios WHERE sala_id = $sala_id AND zona= $zona AND sesion = $sesion ";
    $result = mysqli_query(OpenCon(), $query);
    $res = mysqli_fetch_array($result);
    return $res;
}

