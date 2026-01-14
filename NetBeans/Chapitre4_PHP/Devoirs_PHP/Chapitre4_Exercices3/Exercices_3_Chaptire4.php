<?php

// Ce code est crée par ROBBE Maxime BTS SIO1 le 18/09/2025 v1.2


// Demande à l'utilisateur de saisir un signe pour l'opération
    echo "Saisir un signe +, -, *, / : ";
        $signe = trim(fgets(STDIN));


// Demande à l'utilisateur de saisir deux nombres
        
    echo "Entrez 2 nombres : ";
        $nb1 = trim(fgets(STDIN));
        $nb2 = trim(fgets(STDIN));

        
// Vérifie si le signe est "+" pour effectuer une addition
        
            if ($signe == "+") {
    echo "Somme = " . ($nb1 + $nb2) . "\n";
    
// Vérifie si le signe est "-" pour effectuer une soustraction

            } elseif ($signe == "-") {
    echo "Soustraction = " . ($nb1 - $nb2) . "\n";
    
// Vérifie si le signe est "*" pour effectuer une multiplication

                } elseif ($signe == "*") {
    echo "Multiplication = " . ($nb1 * $nb2) . "\n";
    
// Vérifie si le signe est "/" pour effectuer une division

                    } elseif ($signe == "/") {

    // Si le deuxième nombre est 0, on empêche la division

            if ($nb2 == 0) {
        echo "Division par 0 impossible\n";

        // Sinon, on effectue la division

            } else {
        echo "Division = " . ($nb1 / $nb2) . "\n";
    }

// Si aucun signe valide n'est saisi, on affiche un message d'erreur

                } else {
    echo "Signe invalide\n";
}

?>


