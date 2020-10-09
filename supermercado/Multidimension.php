<?php
/*
//Arreglo de una sola dimension:
$precios=array(1600,4600,1000);
print_r($precios);
echo("<br>");
print_r($precios[0]);
echo("<br>");

foreach ($precios as $value) {
   echo ($value);
   echo("<br>");
}
*/
// Arreglo de varias dimenciones:

$productos=array(

    "producto1"=>array("arroz", 1600, "caribe" ),
    "producto2"=>array("aceite", 5600, "premier"),
    "producto3"=>array("sal", 1000, "refisal")


);

print_r($productos);
echo("<br>");
echo($productos[0][2]);
echo("<br>");
echo("<br>");
//REcorrer el arreglo

foreach ($productos as $value) {
    
    echo($value[0]);
    echo("<br>");
}

?>