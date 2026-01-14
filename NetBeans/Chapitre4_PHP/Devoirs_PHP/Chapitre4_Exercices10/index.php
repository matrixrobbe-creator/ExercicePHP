<?php

// Ce code est crée par ROBBE Maxime BTS SIO1 le 25/09/2025 v1.0
// Il s'agit de l'exercice 10 du chaptire 4 en PHP

        echo "Veuillez renseigner le nombre de fois que vous souhaitez répéter l'opération";
        $i = trim(fgets(STDIN)); // On renseigne le nombre de fois qu'on souhaite répéter la phrase et on viendra stocker dans $i
       for ( $x = 1 ; $x <= $i ; $x ++) { // On défini notre valeur à 1 et tabt qu'elle est inférieur ou égale à $i alors on répète puis on ajoute +1 à $x
            echo " $x J'aime le PHP \n";
       }

?>

<?php 

        echo "Veuillez renseigner le nombre de fois que vous souhaitez répéter l'opération";
       $p = trim(fgets(STDIN)); // On renseigne le nombre de fois qu'on souhaite répéter la phrase et on viendra stocker dans $p
       $o = 1; // on défini notre variable $o à 1
       while ($o <= $p) { // Tant que notre $ô est inférieur ou égale à $p alors on répète
           echo "$o J'aime le PHP \n";
           $o++; // On rajoute +1 à $o
       } 
       
?>