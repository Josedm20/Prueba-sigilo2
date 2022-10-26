<?php
 $volantes = $_POST['volantes'];
 $posters = $_POST['posters'];
 $tj = $_POST['tj'];
 
 $volantess = 2000;
 $posterss = 5000;
 $tjs = 500;
 
  $volantesss = $volantess *  $volantes ;
  $postersss = $posterss *  $posters ;
  $tjss = $tjs * $tj ;

 $suma = $volantesss + $postersss + $tjss;

 echo "Volantes = " .$volantesss. " posters = " .$postersss. " tarjeta de presentacion = " .$tjss. " El valor total a pagar es " .$suma. " pesos";
?>