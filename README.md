# Human Booster - PHP - PE8

## [Bases](01-bases/)

- [Variables, echo, var_dump, commentaires](01-bases/index.php)
- [Constantes](01-bases/const.php)
- [string](01-bases/string.php)

## [Tableaux](02-arrays/)

- Déclaration, affichage (`var_dump`), accès à un élément, ajout (en fin de tableau), modification : [index.php](02-arrays/index.php)

- Boucles : [loops](02-arrays/loops.php) & [do...while](02-arrays/do-while.php)

### Atelier produits - tableaux & boucles

Dossier [03-arrays-products](03-arrays-products/).

Définition d'un tableau de produits puis utilisation d'une boucle `foreach` pour afficher les produits en liste dans la page `index.php`.

## Inclusion de fichiers

Dans [l'atelier de produits](03-arrays-products/) :

- Séparation des données de produits dans [data/products.php](03-arrays-products/data/products.php)
- Séparation des différentes parties du layout dans un dossier [layout/](03-arrays-products/layout/)
- Création d'un template pour un élément de liste de produits dans le dossier [templates/](03-arrays-products/templates/)

## Fonctions

- Introduction : signature, paramètres, paramètres facultatifs ([commit](https://github.com/ld-web/hb-php-pe8/commit/1f23daf5cc0463243d881b18f3b8531b874763aa))
- Exercices :

  - [`getAsParagraph`](04-functions/functions/text.php) pour renvoyer un texte entouré de balises `p`
  - [Somme](04-functions/exos/arraySum.php), [moyenne](04-functions/exos/arrayAvg.php) des éléments d'un tableau
  - [`intPart`](04-functions/exos/intPart.php) : partie entière d'un réel positif
  - [`min3`](04-functions/exos/min3.php) : le plus petit parmi 3

- Fonction `insertIntoArray` pour insérer un élément au sein d'un tableau :

  - [v1](04-functions/exos/insertIntoArray_v1.php) : sans fonctions de la SPL (à part `count`)
  - [v2](04-functions/exos/insertIntoArray_v2.php) : Modification du tableau original au sein de la fonction (pas de valeur de retour, style impératif)
  - [v3](04-functions/exos/insertIntoArray_v3.php) : Création d'un nouveau tableau avec le nouvel élément inséré, gestion d'un indice en-dehors des bornes, on remplit avec la valeur `0` jusqu'à l'indice voulu puis on ajoute l'élément

- [`plusPetit`](04-functions/exos/plusPetit.php) : élément le plus petit d'un tableau
- [`verificationPassword`](04-functions/exos/verificationPassword.php) : vérifier si un mot de passe contient bien 8 caractères minimum
- [`verificationPasswordRegex`](04-functions/exos/verificationPasswordRegex.php) : vérifier si un mot de passe a bien une majuscule minimum, une minuscule minimum, un chiffre minimum, et fait bien 8 caractères au minimum
- [`remplacerLettres`](04-functions/exos/remplacerLesLettres.php) : pour remplacer les lettres d'un texte donné par d'autres lettres (ou chiffres)
