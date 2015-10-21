<?php
/**
 * en un variable
 * que permite almacenar mas de un dato
 * podemos almacenar cualquier tipo de dato
 * vectores arreglos unidimensionales
 * arreglos de tipo de matriz o multidimensionales
 * */
 
 $arreglos = array("chile","Mexico",34,true,false,"peru",23,"Canada");
 //echo sizeof($arreglo);
 //echo count($arreglo);
 for($i=0; $i<count($arreglos);$i++)
 {
    echo $i;
    echo "-";
    echo $arreglos[$i];
    echo "<br />";
 }
echo "<hr />";

foreach( $arreglos as $key => $arreglo )
{
    echo $key;
    echo "-";
    echo $arreglo;
    echo "<br />";
}
 ?>
 
