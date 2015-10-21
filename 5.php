<?php
$arreglos[0][0]="Chile";
$arreglos[0][1]="Perú";
$arreglos[0][2]="México";
$arreglos[0][3]="Venezuela";
$arreglos[0][4]="Colombia";

$arreglos[1][0]="Ecuador";
$arreglos[1][1]="Argentina";
$arreglos[1][2]="Paraguay";
$arreglos[1][3]="Uruguay";
$arreglos[1][4]="Costa Rica";


for($i=0;$i<sizeof($arreglos);$i++)
{
    for($j=0;$j<sizeof($arreglos[$i]);$j++)
    {
        echo "fila =".$i." columna ".$j." ".$arreglos[$i][$j]."<br/>";
    }
}
echo "<hr/>";
foreach($arreglos as  $key1=>$arreglo)
{
    for($i=0;$i<sizeof($arreglo);$i++)
    {
        echo "Dato=".$arreglo[$i];
        echo "<br/>";
    }
}



