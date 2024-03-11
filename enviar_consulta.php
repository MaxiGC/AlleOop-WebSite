<?php
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$edad_form = $_POST['edad'];
$correo_form = $_POST['correo'];
$direccion_form = $_POST['direccion'];

//CONECTAR A LA BASE DE DATOS --> 
//trabaja con 4 parametros: el host, el root,
//la contraseña y el nombre de la base de datos

/*$conexion =mysqli_connect("localhost", "root","","prueba1");*/

$conexion =mysqli_connect("localhost", "id21764750_maxgc","Mac15690213?","id21764750_alleyoopstore_bd");

$query = "INSERT INTO clientes VALUES (DEFAULT, '$nombre_form', '$apellido_form','$edad_form','$correo_form','$direccion_form')";

$resultado = mysqli_query($conexion, $query);

if ($resultado){
    header("Location:clientes.php?ok");
}
else {
    echo "Error en la inserción". mysqli_error($conexion);
}

mysqli_close($conexion);
