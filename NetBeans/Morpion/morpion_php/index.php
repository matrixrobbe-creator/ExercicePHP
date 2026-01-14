<?php
// Jeu du morpion en PHP (Version corrigée)

define('joueur_1', '1');
define('joueur_2', '2');
define('case_vide','-'); // Simplifié pour la cohérence
define('croix','X');
define('rond','O');

/**
 * Affiche la grille de Morpion
 */
function afficher_grille($plateau) {
    echo "\n";
    echo " " . $plateau[7] . " | " . $plateau[8] . " | " . $plateau[9] . "      7 | 8 | 9 \n";
    echo "---|---|---      ---|---|---\n";
    echo " " . $plateau[4] . " | " . $plateau[5] . " | " . $plateau[6] . "  =>  4 | 5 | 6 (Numérotation des cases)\n";
    echo "---|---|---      ---|---|---\n";
    echo " " . $plateau[1] . " | " . $plateau[2] . " | " . $plateau[3] . "      1 | 2 | 3 \n";
    echo "\n";
}

/**
 * Vérifie si un joueur a gagné
 */
function verifier_victoire($plateau) {
    $v = case_vide; // Valeur de case vide
    $p = $plateau; // Alias pour raccourcir
    
    // Lignes
    if ($p[7] != $v && $p[7] == $p[8] && $p[8] == $p[9]) return true;
    if ($p[4] != $v && $p[4] == $p[5] && $p[5] == $p[6]) return true;
    if ($p[1] != $v && $p[1] == $p[2] && $p[2] == $p[3]) return true;

    // Colonnes
    if ($p[7] != $v && $p[7] == $p[4] && $p[4] == $p[1]) return true;
    if ($p[8] != $v && $p[8] == $p[5] && $p[5] == $p[2]) return true;
    if ($p[9] != $v && $p[9] == $p[6] && $p[6] == $p[3]) return true;

    // Diagonales
    if ($p[7] != $v && $p[7] == $p[5] && $p[5] == $p[3]) return true;
    if ($p[9] != $v && $p[9] == $p[5] && $p[5] == $p[1]) return true;

    return false;
}

// --- Initialisation du Jeu ---

$plateau = [
    7 => case_vide, 8 => case_vide, 9 => case_vide,
    4 => case_vide, 5 => case_vide, 6 => case_vide,
    1 => case_vide, 2 => case_vide, 3 => case_vide
];

echo "Joueur 1 sélectionnez votre symbole : (X ou O) : ";
$choix_symboles = strtoupper(trim(fgets(STDIN)));

if ($choix_symboles == croix) {
    echo "Le joueur 1 a sélectionné les croix (X). Le joueur 2 aura les ronds (O).\n";
    $symboles_joueur1 = croix;
    $symboles_joueur2 = rond;
} elseif ($choix_symboles == rond) {
    echo "Le joueur 1 a sélectionné les ronds (O). Le joueur 2 aura les croix (X).\n";
    $symboles_joueur1 = rond;
    $symboles_joueur2 = croix;
} else {
    $symboles_joueur1 = croix;
    $symboles_joueur2 = rond;
    echo "Entrée invalide, attribution automatique. Le joueur 1 jouera avec les croix (X) et le joueur 2 jouera avec les ronds (O).\n";
}

$tour = 0;
$partie_en_cours = true;

// --- Boucle de Jeu ---

while ($partie_en_cours && $tour < 9) {
    $tour++;

    // Déterminer le joueur et le symbole actuel
    if ($tour % 2 !== 0) {
        $joueur_actuel = joueur_1;
        $symbole_actuel = $symboles_joueur1;
    } else {
        $joueur_actuel = joueur_2;
        $symbole_actuel = $symboles_joueur2;
    }

    afficher_grille($plateau);
    
    // Lecture de l'entrée utilisateur
    do {
        echo "Joueur " . $joueur_actuel . " (" . $symbole_actuel . ") c'est votre tour. Entrez le numéro de la case de 1 à 9 : ";
        $choix_case = trim(fgets(STDIN));
        $choix_case = (int)$choix_case;

        // Validation de l'entrée
        if ($choix_case < 1 || $choix_case > 9) {
            echo "Erreur : Entrez un nombre entre 1 et 9.\n";
            $valide = false;
        } elseif ($plateau[$choix_case] != case_vide) {
            echo "Erreur : Cette case est déjà jouée. Choisissez-en une autre.\n";
            $valide = false;
        } else {
            $valide = true;
        }
    } while (!$valide);

    // Mettre à jour le plateau
    $plateau[$choix_case] = $symbole_actuel;

    // Vérification de la victoire après le coup
    if (verifier_victoire($plateau)) {
        afficher_grille($plateau);
        echo "Félicitations! Le **Joueur " . $joueur_actuel . "** a gagné avec les **" . $symbole_actuel . "** en " . $tour . " tours!\n";
        $partie_en_cours = false; // Fin de partie
    }
}

// Vérification de match nul
if ($partie_en_cours) {
    afficher_grille($plateau);
    echo "Match nul! Toutes les cases sont remplies.\n";
}

?>