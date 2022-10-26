<?php
 $vp = $_POST['vp'];

 $descuento = $vp * 0.2;
 $vt = $vp - $descuento;

 if($vp > 20000){
    echo "El valor de su producto es " .$vp. " con un descuento de " .$descuento;
    echo '<br>';
    echo "Valor a pagar " .$vt;
 }else{
    echo "El valor de su producto es " .$vp;
    echo '<br>';
    echo "Valor a pagar " .$vp;
 }
?>