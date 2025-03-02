<?php
   $valor = 1;

   while ($valor <= 10) {
       if ($valor % 2 == 0) {
           $valor++;
           continue;
       } else {
           echo $valor;
       }
       $valor++;
   }
?>
