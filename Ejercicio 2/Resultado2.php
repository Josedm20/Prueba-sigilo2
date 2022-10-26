<?php
 $Nombre = $_POST['nombre'];
 $Materia = $_POST['materia'];
 $Nota1 = $_POST['num1'];
 $Nota2 = $_POST['num2'];
 $Nota3 = $_POST['num3'];
 $divisor = 3;
 $operacion = ($Nota1 + $Nota2 + $Nota3) / $divisor;

 echo "El promedio de " .$Nombre. " en " .$Materia. " es " .$operacion;
?>