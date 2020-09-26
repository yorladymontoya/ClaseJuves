<?php

$producto1="arroz";
$producto2="atun";
$producto3="apio";
$producto4="pollo";

// Arreglo indexado (los nombres de cada elemento son idices o numeros);
$productos = array('arroz','atun','apio','pollo');

print_r($productos); //Muestra todos los valores del arreglo.
echo($productos[1]);// La funcion echo solo muestra 1 valor del arreglo.
// Tengo un formulario 

$productosFormulario=array($_POST['producto1'], ['producto2']);

//arreglos asociativos
echo('<br>');

$productosAsociados=array('producto1'=>"arroz", 'producto2'=>"atun",'producto3'=>"apio",'producto4'=>"pollo");
echo($productosAsociados['producto4']);


//Arreglo de numeros
echo('<br>');

$numeros=array(1,2,3,4,5,3,7,8,3,10);

for ($i=0; $i <10 ; $i++) { 
    echo($numeros[$i]);
    echo('<br>');
}

foreach ($numeros as $key => $valor) {
   
   if ($valor == 3){
    echo("yorla");
    echo('<br>');
   }    
}

foreach ($productosAsociados as $key => $valor){
    echo($valor);
    echo('<br>');

}

?>