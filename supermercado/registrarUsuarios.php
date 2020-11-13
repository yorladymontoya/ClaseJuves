<?php

include("BaseDatos.php");

if(isset($_POST["botonEnvio"]))
{

//Recibo los datos del formulario
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$descripcion=$_POST['descripcion'];
$genero=$_POST['genero'];
$foto=$_POST['foto'];


//copia u objeto de la clase BD
$transaccion= new BaseDatos();
$transaccion->conectarBD();

//crear consulta

$consultasSQL="INSERT INTO usuarios(nombre,apellido,descripcion,genero,foto) VALUES ('$nombre','$apellido','$descripcion','$genero','$foto')";

//llamo al metodo de la clase DB agregarDatos
$transaccion->agregarDatos($consultasSQL);

//REdireccionar al formulario

header("Location:formulario.php");

}
?>