<?php
// Ce code a était crée par ROBBE Maxime le 26/09/2025 v1.0
// Exercices 11 Chapitre 4 PHP

    echo " Veuillez entrer le nombre d'étages à gravir : ";
    $nbEtages = trim(fgets(STDIN)); // On viens définir notre nombre d'étages à gravir dans notre variable $nbEtages
    $nbTotalMarches = 0; // On viens définir notre nombre total de marches qu'on aura gravi dans notre variable $nbTotalMarches qui vaut pour le moment 0 car on à rien gravie.
    
        for ($i = 0 ; $i < $nbEtages ; $i++) { // $i vaut 0, tant que $i est inférieur à $nbEtages alors on rajoute +1 à $i
            $nbMarchesEtages = rand(4,8); // On crée la variable $nbMarchesEtages et elle aura une valeur aléatoire entre 4 et 8
            $nbTotalMarches = $nbTotalmarches + $nbMarchesEtages; 
        }
        
            for ( $j = 0; $j < $nbMarchesEtages ; $j++) {
                echo " Je monte la marche numéro $j de l'escalier qui monte à l'étage numéro $i \r";
            }
            
    echo " A l'étage " . $i . " il y a $nbMarchesEtages marches à gravir. \r";
    echo " au total il y a $nbTotalMarches marches pour arriver à l'étages numéro $nbEtages";
?>