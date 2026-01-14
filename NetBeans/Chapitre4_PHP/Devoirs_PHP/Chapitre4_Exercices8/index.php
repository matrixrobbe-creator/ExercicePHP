<?php

// Ce code est crée par ROBBE Maxime BTS SIO1 le 25/09/2025 v1.0
// Il s'agit de l'exercice 8 du chapitre 4
        
        echo " Veuillez saisir votre premier chiffre entier :";
        $a = trim(fgets(STDIN));
        
        echo " Veuillez saisir votre second chiffre entier : ";
        $b = trim(fgets(STDIN));
        
        echo " Veuillez saisir votre troisième chiffre entier : ";
        $c = trim(fgets(STDIN));
        
        //$n = $a . " " . $b . " " . $c ; // Cela regroupe nos 3 variables dans une seule chaîne de caractère
        $n = [$a,$b,$c]; // On regroupe nos 3 valeurs dans une variables qu'on concaténe ensemble dans un tableau
        
        rsort ($n); // On trie nos 3 valeurs de la plus grande à la plus petite 
        
        // Ici on viens afficher notre liste triée sous une chaîne de caractère avec la commande .implode
        echo " Notre liste des chiffres des plus grands au plus petits sont :" .implode (" ",$n) ."\n"; 
        
        ?>
        
       
?>    
        