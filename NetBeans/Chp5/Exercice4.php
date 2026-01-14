<?php
    
    function maxl($liste)
    {
        $g = $liste[0];
        
        for ($i = 1; $i < (count($liste)); $i++)
        {
            if ($liste[$i] > $g)
            {
                $g = $liste[$i];
            }
        }
        return $g;
    }
    
    function indice_max($liste, $g)
    {
        
        for ($i = 0; $i < (count($liste)); $i++)
        {    
            if ($liste[$i] == $g)
            {
               return $i;
            }
        }
    }
    
    function inverser_liste($liste)
    {
        $inver = [];
        
        for ($i = (count($liste)-1); $i >= 0; $i--)
        {    
            $inver[] = $liste[$i];
        }
        return $inver;
    }

    function afficher_liste($inver)
    {
        for ($i = 0; $i < count($inver); $i++)
        {    
            echo "$inver[$i] ";
        }
    }

    function tri_croissant($liste)
    {
        $liste2 = $liste;
        
        for ($i = 0; $i < count($liste2)-1; $i++)
        {
            for ($j = $i+1; $j < count($liste2); $j++)
            {
                if ($liste2[$i] > $liste2[$j])
                {
                    $temp = $liste2[$j];
                    $liste2[$j] = $liste2[$i];
                    $liste2[$i] = $temp;
                }
            }
        }
        return $liste2;
    }


    //$liste = [2,4,7,-1,12,5,17];
    echo "Entrée une liste (en séparant avec des ',') : ";
    $input = trim(fgets(STDIN)); 
    $liste = array_map('intval', explode(',', $input));
    echo "La valeur max est : ".$g = maxl($liste)."\n";
    echo "L'index de la valeur max est : ".indice_max($liste, $g)."\n";
    echo "--------------\n";
    echo "La liste inverser est : ";
    afficher_liste(inverser_liste($liste));
    echo "\rLa liste trier par ordre croissant est : ";
    afficher_liste(tri_croissant($liste));
    

?>