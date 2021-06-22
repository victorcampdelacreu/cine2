<?php

require('funciones.php');
/*
$tabla = '

    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Victor</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Javier</td>
            </tr>
            <tr>
                <td>3</td>
                <td>María</td>
            </tr>            
        </tbody>    
    </table>
';

insertar_tabla(htmlspecialchars($tabla));
*/

$victor = listar_tabla();

while($row = mysqli_fetch_array($victor)){
    echo html_entity_decode($row['tabla']);
}