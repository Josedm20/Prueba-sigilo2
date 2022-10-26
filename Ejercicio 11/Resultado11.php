<?php
 $va = $_POST['va'];

 $vt = $va * 0.15;
 $vp = $va + $vt;

 if($va > 0){
    echo "El valor del producto es " .$va. " y su 15% es " .$vt;
    echo '<br>';
    echo "Para ganar el 15% el producto debe ser vendido en " .$vp;
 }else{
    echo "Ingrese el valor del producto ";
 }
?>