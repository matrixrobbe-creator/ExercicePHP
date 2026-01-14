<?php
    // Ce code a était crée le 21/09/2025 v1.0
    // Ce code à était crée par ROBBE Maxime BTS SIO1


    // On fixe notre prix de base à 300€
    $prix=300;
    
    
    // On demande à l'utilisateur de renseigner son $age dans notre code et on va enregistrer son âge dans notre varaible $âge
    echo 'Veuillez renseigner votre âge';
    $age = trim(fgets(STDIN));
    
        
    
    //     
    if ($age >= 1 && $age <= 10) {
        $prix = 300*0.5;
        // On applique notre réduction de 30%
        echo " Vu que vous avez $age ans vous profitez d'une offre promotionnelle avec un tarif réduit de 50% ! Votre tarif est de $prix €. ";
    }        
    elseif (($age >= 11 && $age <= 18) || $age > 60) {
        $prix =300 * 0.7;
        //On applique notre réduction de 30%
        echo " Vu que vous avez $age ans vous profitez d'une offre promotionnelle avec un tarif réduit de 30% ! Votre tarif est de $prix €. ";
    }
    else {
        $prix = $prix;
        echo " Nous ne possédons pas de réduction pour vous, désolé.";
    }
    

?>