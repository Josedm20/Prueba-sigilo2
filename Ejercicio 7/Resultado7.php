<?php
 $na = $_POST['na'];
 $as = $_POST['as'];
 $cf = $_POST['cf'];
  
 if($cf >= 7){
    echo "Su calificacion final es " .$cf. " APROBADO ";
 }else{
    echo "Su calificacion final es " .$cf. " REPROBADO ";
 }
?>