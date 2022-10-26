<?php
 $ed = $_POST['ed'];
 $sx = $_POST['sx'];
  
 $f = 54;
 $m = 63;

 if( ($sx == "mujer" or $sx=="f") && ($ed > 54)){
   echo "Te puedes jubilar ";
}elseif(($sx == "hombre" or $sx=="m") && ($ed >= 63)){
  echo "Te puedes jubilar ";
}else{
  echo "No te puedes jubilar ";
}
?>