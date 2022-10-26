<?php
 $nb = $_POST['nb'];
 $as = $_POST['as'];
 $n1 = $_POST['n1'];
 $n2 = $_POST['n2'];
 $n3 = $_POST['n3'];
  
 $nota1 = $n1 * 0.3;
 $nota2 = $n2 * 0.3;
 $nota3 = $n3 * 0.4;

 $r = $nota1 + $nota2 + $nota3;

 if($r>= 4.0){
    echo $nb. ", Su nota final en " .$as. " es " .$r. " APROBADO ";
 }else{
    echo $nb. ",Su nota final en " .$as. " es " .$r. " REPROBADO ";
 }
?>