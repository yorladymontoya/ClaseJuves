<?php 

include('Sopa.php');

//Crear un objeto de la class (Los Objetos son VARIABLES)
$ajiaco= new Sopa();

//Acceder a un atributo
$ajiaco->cantidadAgua="2 litros";
echo($ajiaco->cantidadAgua);


//Acceder a metodos
$ajiaco->disfrutarSopa();

include('Personas.php');

$nombre= new personas();

$nombre->saludar();


?>