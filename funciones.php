<?php

use function PHPSTORM_META\map;

require('config.php');

//define las funciones del proyecto */

function insertar_language($idioma, $active)
{
    $query = "INSERT INTO language(idioma, active) VALUES ('$idioma', $active)";
    $result = mysqli_query(OpenCon(), $query);
    return true;
}

function listar_language()
{
    $sql = "SELECT * FROM language";
    $result = mysqli_query(OpenCon(), $sql);
    return $result;
}

function buscar_text($id)
{
    $query = "select nombre FROM texts where id =$id";
    $result = mysqli_query(OpenCon(), $query);
    $res = mysqli_fetch_array($result);
    return $res;
}
function listar_texts()
{
    $sql = "SELECT * FROM texts";
    $result = mysqli_query(OpenCon(), $sql);
    return $result;
}

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
function insertar_sala($nombre, $direccion, $poblacion, $numFilas, $numColumnas, $lateral, $fondo)
{
    $query = "INSERT INTO salas(nombre, direccion, poblacion, numFilas, numColumnas, lateral, fondo) VALUES ('$nombre', '$direccion', '$poblacion',$numFilas,$numColumnas, $lateral, $fondo)";
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
    $res = mysqli_fetch_array($result);
    return $res;
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
    $query = "SELECT tarjeta FROM espectadores where DNI ='$DNI'LIMIT 1";
    $result = mysqli_query(OpenCon(), $query);
    $res = mysqli_fetch_array($result);
    return $res['tarjeta'];
}

//******************************************************************** */

function calculo_zona($f, $c, $n, $m, $lat, $fon)
{

    if ($c > $lat && $c <= $m - $lat && $f <= $n - $fon) {
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

function insertar_compra($fecha,$sala_id,$pelicula_id,$sesion,$horaInicio,$fila,$butaca,$precio,$cartelera_id)
{
    $query = "INSERT INTO compras(fecha,sala_id,pelicula_id,sesion,horaInicio,fila,butaca,precio,cartelera_id) VALUES ('$fecha',$sala_id,$pelicula_id,$sesion,'$horaInicio',$fila,$butaca,$precio,$cartelera_id)";
    $result = mysqli_query(OpenCon(), $query);
    return true;
}

function eliminar_compra($id)
{
    $query = "DELETE FROM compras WHERE id = '$id'";
    $result = mysqli_query(OpenCon(), $query);
    return true;
}

function buscar_compra($id)
{
    $query = "select * FROM compras where id ='$id'";
    $result = mysqli_query(OpenCon(), $query);
    $res = mysqli_fetch_array($result);
    return $res;
}

function listar_compras()
{
    $query = "select * FROM compras";
    $result = mysqli_query(OpenCon(), $query);
    return $result;
}

function modificar_compra($compras_id,$fecha,$sala_id,$pelicula_id,$sesion,$horaInicio,$fila,$butaca,$precio,$cartelera_id){
    $sql = "UPDATE compras SET fecha='$fecha', sala_id='$sala_id',pelicula_id='$pelicula_id', sesion='$sesion', horaInicio='$horaInicio',fila='$fila',butaca='$butaca',precio='$precio',cartelera_id='$cartelera_id' WHERE id= $compras_id";
    mysqli_query(OpenCon(), $sql);
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

function entradas(){
    $query = "SELECT * FROM compras WHERE cartelera_id = 0";
}
// ----------------------------------------------------------------//
function insertar_usuario($nombre,$email,$pass,$rol){
    $query = "INSERT INTO usuarios(nombre,email,pass,rol) VALUES ('$nombre','$email','$pass',$rol)";
    mysqli_query(OpenCon(), $query);
    return true;
}
function list_users()
{
    $sql = "SELECT * FROM usuarios";
    $result = mysqli_query(OpenCon(), $sql);
    return $result;
}

function verificar_usuario($email){
    $sql = "SELECT * FROM usuarios where email = '$email' LIMIT 1";
    $result = mysqli_query(OpenCon(), $sql);
    return $result;
}

function buscar_usuario($email)
{
    $query = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";    
    $result = mysqli_query(OpenCon(), $query);
    $res = mysqli_fetch_array($result);
    return $res;


}
 //-----------------------------------------------------------//