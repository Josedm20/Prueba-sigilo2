<?php
 $equipo = $_POST['equipo'];
 $g= $_POST['g'];
 $e = $_POST['e'];
 $p = $_POST['p'];

 $g2 = 3;
 $empata2 = 1;
 $perdi2 = 0;

 $ganadosr = $g * $g2;
 $empatadosr = $e * $empata2;
 $perdidosr = $p * $perdi2;

 $operacion = $ganadosr + $empatadosr + $perdidosr;

 echo "El esquipo " .$equipo. " tiene un total de " .$operacion. " puntos";
?>