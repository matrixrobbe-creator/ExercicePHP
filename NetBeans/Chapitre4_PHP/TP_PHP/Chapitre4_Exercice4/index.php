<?php
// Ce code a était crée par ROBBE Maxime le 22/09/2025v1.0

// On va définir le salaire de base dans une variable

    $salaire = 1200;

// On défini ici nos premier objectif de CA dans des variables
    $lim1 = 2000;
    $lim2 = 10000;
    $lim3 = 16000;
    
// Maintenant on va définir nos taux en pourcentages dans des variables
    
    $Tx1 = 0.02;
    $Tx2 = 0.05;
    $Tx3 = 0.07;
    
    echo " Veuillez renseigner votre CA réalisé dans le dernier mois : ";
    $CA = trim(fgets(STDIN));
            
    if ( $CA <= $lim1 ) {
       echo "Votre CA n'est pas suffisant pour vous donner droit à toucher des primes. TRAVAILLER MIEUX !";
    }
   
    elseif ($CA > $lim1) {
        $CA = $CA * $Tx1 ;
        $salaire = $salaire + $CA;
        echo " Bravo vous avez bien travaillé, pour vous remercier nous vous offrons une prime qu'on rajoute à votre paye. Votre paye est de $salaire ce mois-ci.";
        
    }
    
   elseif ($CA > $lim2) {
       $CA = $CA * $Tx2;
       $salaire = $salaire + $CA;
       echo " Bravo vous avez bien travaillé, pour vous remercier nous vous offrons une prime qu'on rajoute à votre paye. Votre paye est de $salaire ce mois-ci.";

   }
   
   elseif ( $CA > $lim3) {
       $CA = $CA * $Tx3;
       $salaire = $salaire + $CA;
       echo " Bravo vous avez bien travaillé, pour vous remercier nous vous offrons une prime qu'on rajoute à votre paye. Votre paye est de $salaire ce mois-ci.";

   }      

?>