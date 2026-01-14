<?php
    
    // Question 1
    function saisie_entier($n){
        if ($n<5 or $n != floor($n)):
            echo "Veuillez relancer le programme car le nombre n'est pas supérieur a 5.";
        else:
            remplir_tableau($n);
        endif;
    }
    
    // Question 2
    function remplir_tableau($n){
        $liste = [];
        for ($i = 0; $i < $n; $i++)
        {
            $a = rand(0,20);
            array_push($liste, $a);
            $t = $t + $a;
        }
        foreach ($liste as $nb) 
        {
            echo $nb . "\n";
        }
        echo "--------------------------------------------------\n";
        echo "La moyenne des nombres se trouvant dans le tableau : ". $t/$n . "\n";
        echo "--------------------------------------------------\n";
        echo "La 3ème valeur est : $liste[2]\n";
        echo "La 5ème valeur est : $liste[4]\n";
        echo "La 5ème valeur est : ".end($liste)."\n";
        
    }
    
    
    // Début du programme
    echo "veuillez entrée un nombre compris entre 0 et 5 : ";
    $n = trim(fgets(STDIN));
    echo "--------------------------------------------------\n";
    saisie_entier($n);
    
?>