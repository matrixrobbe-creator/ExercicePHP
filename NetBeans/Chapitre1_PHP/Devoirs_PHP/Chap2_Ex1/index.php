<?php

    echo "Veuillez entrer une valeur : ";
    $x =  trim(fgets(STDIN)) ; 
    $y = sqrt(pow($x,2)-2*$x+6);
    
   
   echo  " \r L'entier immédiatement supérieur  à \$y est : " ;
   echo ceil($y);
  
   echo " \n la valeur immédiatement inférieur à \$fx est : " ;
   echo floor($y);
   
   echo " \n La valeur approchée de \$y = 10^-3 est : ";
   echo round($y,3)
   
  


?>

