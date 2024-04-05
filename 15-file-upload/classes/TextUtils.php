<?php

class TextUtils
{
    public static function randomString(int $length): string
    {
        //             0                                                            61
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Longueur totale de la chaîne contenant les caractères qui peuvent apparaître dans le résultat
        $charactersLength = strlen($characters);

        // Boucle le nombre de fois correspondant à $length (la longueur voulue)
        // $length est le paramètre qu'on a donné à la fonction
        for ($i = 0, $randomString = ''; $i < $length; $i++) {
            // À chaque itération, on rajoute un nouveau caractère aléatoire dans le résultat
            // Les crochets avec une chaîne de caractères sont ce qu'on appelle du "sucre syntaxique"
            // https://en.wikipedia.org/wiki/Syntactic_sugar
            // Pour sélectionner un caractère aléatoire parmi tous les caractères possibles dans $characters,
            // on prend donc un caractère à une position ENTRE 0 et la longueur - 1 (comme si on était dans un tableau)
            // Donc ici, on aura par exemple :
            // 1 - $randomString .= $characters[10] => "a"
            // 2 - $randomString .= $characters[61] => "aZ"
            // ... jusqu'à la longueur passée en paramètre
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }

        // Le résultat est une chaîne aléatoire de la longueur voulue ($length, le paramètre)
        // On peut donc le return à l'appelant
        return $randomString;
    }
}
