<?php

include("BaseDatos.php");


//1. Crear el objeto de la BD
$transaccion=new BaseDatos();



//2. rECIBIR DATOS
if(isset($_POST["botonEditar"])){

    //3.Recibir el id que quiero editar
    $id=$_GET["id"];
   
    $nombre=$_POST['nombreEditar'];
    $descripcion=$_POST['descEditar'];

//4. Consulta para editar un registro

$consultaSQL="UPDATE usuarios SET nombre='$nombre',descripcion='$descripcion' WHERE idUsuario='$id'";


//5. Utilizar el metodo Editar

$transaccion->editarDatos($consultaSQL);

}






?>