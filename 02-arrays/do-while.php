<?php

// On aura tout le temps des catégories
$categories = ["eySLkRDURPynhViwRz", "dbSuotUkIP", "bwIKjuZKYawiM", "adnVOs", "LAVpnytVfjxORiMABet", "NeYoVsiDPvcFucdim", "WFLParofXiZstbPsacQJ", "cQkci"];

$search = "Aimen";

$i = 0;
$found = false;

do {
    $category = $categories[$i];
    $found = ($category === $search);
    $i++;
} while(!$found && $i < count($categories));

// trouvé ou pas
echo $found ? "Trouvé" : "Pas trouvé";
