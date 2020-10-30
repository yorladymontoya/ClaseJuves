<?php

include("BaseDatos.php");


if (isset($_POST['botonEnvio']))
{
    //Recibo los datos del formulario
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $descripcion=$_POST['descripcion'];
    $genero=$_POST['genero'];


// copio u objeto  de la clase BD - instancio la clase
    $transaccion= new BaseDatos();
// Crear la consulta
    $consultaSQL="INSERT INTO usuarios(nombre, apellido, descripcion, genero) VALUES ('$nombre','$apellido', '$descripcion', '$genero')";
// Llamo al metodo de la clase BD agregarDatos()
    $transaccion->agregarDatos($consultaSQL);


}



?>