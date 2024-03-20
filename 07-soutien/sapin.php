<?php

// 1er étage : 4 espaces, 2*0+1 (1) étoile HAUTEUR - 1 - $i (0)
// 2è  étage : 3 espaces, 2*1+1 (3) étoiles HAUTEUR - 1 - $i (1)
// 3è  étage : 2 espaces, 2*2+1 (5) étoiles

function sapin(int $hauteur): void
{
    for ($i = 0; $i < $hauteur; $i++) {
        $nbEspaces = $hauteur - 1 - $i;
        echo str_repeat(" ", $nbEspaces);

        $nbEtoiles = 2 * $i + 1;
        echo str_repeat("*", $nbEtoiles);

        if ($i < $hauteur - 1) {
            echo "\n";
        }
    }
}

sapin(4);
echo "\n";
sapin(7);
echo "\n";
sapin(16);
