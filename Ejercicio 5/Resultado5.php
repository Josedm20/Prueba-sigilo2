<?php
$h1 = $_POST['h1'];
$h2 = $_POST['h2'];

$dif1 = $h1 - $h2;
$dif2 = $h2 - $h1;

 /* Operadores comparacion 
  == Igualdad
  > Mayor que 
  >= Mayor o igual que 
  < Menor que 
  <= Menor o igual que 
 */

  if ($h1>=$h2) {
    echo "El hermano mayor tiene " .$h1. " con una diferencia de " .$dif1. " años de edad ";
  }else{
    if($h1<=$h2){
        echo "El hermano mayor tiene " .$h1. " con una diferencia de " .$dif2. " años de edad ";
    }
  }