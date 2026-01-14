<?php
    
    // Ce code est crée par ROBBE Maxime le 22/09/2025 v1.0
    

    // On viens rentrer nos forfaits horraires dans des variables
    $tarif_heure = 52;
    $tarif_minute = 1.1;

    
    echo " Veuillez renseigner votre nombre de minutes travaillée ce mois-ci :";
    $travail_minute = trim(fgets(STDIN));
    
    $travail_heure = $travail_minute/60;
    ceil($travail_heure);
    
    $facturation = $travail_minute * $tarif_minute;
    
    echo " Vous avez travaillé $travail_heure heures ce mois, ce qui représente $travail_minute minutes.\n";
    echo " Vous êtes censé avoir fait facturé $facturation € à nos clients pour vos services";




?>
