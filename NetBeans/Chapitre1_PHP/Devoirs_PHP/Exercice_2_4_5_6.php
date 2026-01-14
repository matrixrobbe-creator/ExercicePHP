
<!--#Exercice 1 -->


<?php

    $PremierNombre = 12;
    $DeuxiemeNombre = 31;
    
    echo " $PremierNombre";
    echo " $DeuxiemeNombre";


?>

<?php


#Exercice 1 question 3 


    $x = 10;
    $y = 5;
    
    echo " Notre première valeur est "  . $x . "\n" ;
    echo  "Notre deuxième valeur est " . $y . "\n" ; 
    
    $Somme = $x + $y;
    $Difference = $x - $y;
    $Produit = $x * $y;
    
    if ($y > 0) {
        $Quotient = $x / $y ;
    } else { 
        $Quotient = " Impossible car on ne peut pas diviser par 0";
    }
    
    echo 'Somme : ' . $Somme . "\n";
    echo 'Différence : ' . $Difference . "\n";
    echo 'Produit : ' . $Produit . "\n";
    echo 'Quotient : ' . $Quotient . "\n"; 
?>

 

<!--#Ce script va nous afficher : PremierNombre DeuxiemeNombre. Il s'agit d'une chaîne de caractère.

#Il s'agit simplement de rajouter '$' devant "PremierNombre" ainsi que "$DeuxiemeNombre".

#Exercice 4-->
 
 
 <?php
 
    $nom = "bond";
    $prenom = "james";
    
   strtoupper("james , bond") ;
    
    
    echo strtoupper ("james bond");
    
    echo "\r";
    
    
    
    echo strtoupper ("j");
    
    echo strtolower ("ames ");
    
    echo strtoupper ("bond");
 
 ?>



<!--#Exercice 5-->
<?php



     echo " Veuillez nous renseigner votre nom.";
     
        $nom = trim(fgets(STDIN))  ;
        $nom = strtoupper($nom);
      
    echo " Veuillez nous renseigner votre prénom.";
        
        $prenom = trim(fgets(STDIN));
        $prenom = ucfirst(strtolower($prenom));
        
    echo $nom ." ". $prenom ;
        
?>

<!--#Exercice 6-->

<?php

    define ("nb_bouteille_pack", 6);        //ici on va définir nos constantes, des valeurs qui ne sont pas amenées à changer
    define ("bouteille_offerte_pack", 1);
    define ("nb_pack_palette", 50);
    define("pack_offert_palette", 5);
    define ("capacite_bouteille", 3);
    
    echo "Quel est le prix d une bouteille de 3L ?";
        $prix_bouteille = trim(fgets(STDIN));
    
        $prix_litre = $prix_bouteille / capacite_bouteille;
   
        $bouteille_payante = nb_bouteille_pack - bouteille_offerte_pack;
   
        $prix_pack = $bouteille_payante * $prix_bouteille;
   
        $pack_payant = nb_pack_palette - pack_offert_palette;
   
        $prix_palette = $pack_payant * $prix_pack;
   
    echo " Prix au litre : $prix_litre € \n";
    echo "Prix d un pack : $prix_pack € \n";
    echo "Prix d une palette : $prix_palette € \n";
    

?>
