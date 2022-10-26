<?php
 $vc = $_POST['vc'];

 $i2 = 0.02;
 $i4 = 0.045;
 $i7 = 0.07;

 $r = $vc * $i2;
 $r2 = $vc * $i4;
 $r3 = $vc * $i7;

 $suma = $vc + $r;
 $suma2 = $vc + $r2;
 $suma3 = $vc + $r3;

 echo "Valor del capital" .$vc;
 echo "<br>";

 if($vc < 500){
    echo "Interes " .$suma;
 }elseif(($vc >= 500) && ($vc < 1500)){
    echo "Interes " .$suma2;
 }else{
    echo "Interes " .$suma3;
 }
?>