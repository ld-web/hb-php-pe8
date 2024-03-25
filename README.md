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

## Superglobales

Reprise de l'atelier produits dans [ce dossier](05-products-superglobals/).

Création d'une page `product.php` chargée de récupérer un paramètre GET : un paramètre dans l'URL.

À partir de ce paramètre, on va chercher le produit correspondant dans les datas.

Création d'une fonction `getProduct`, placée dans un fichier [`functions/product.php`](05-products-superglobals/functions/product.php).

## Soutien

Écriture de différentes fonctions et algorithmes pour réviser un peu :

- [`construireCarre`](07-soutien/afficherCarre.php) pour générer un carré d'étoiles à partir d'une taille donnée
- [`nombresPairs`](07-soutien/nombresPairs.php), affiche les nombres pairs jusqu'à une limite donnée, en partant de 2
- [`sapin`](07-soutien/sapin.php), génère un sapin d'étoiles sur une hauteur donnée

## Atelier MyCorp (Superglobales & formulaires)

Disponible dans le dossier [`06-atelier-my-corp`](06-atelier-my-corp/).

Vous allez démarrer un nouveau projet présentant votre entreprise :

- Créez une page d'accueil présentant les membres de votre entreprise
- La page d'accueil sera une liste des membres, chargée depuis un tableau PHP
  Pour un membre, on retrouvera les informations suivantes :

| Propriété                                                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------------------------------------- |
| name                                                                                                                                                 |
| firstname                                                                                                                                            |
| birthDate (format string "JJ/MM/AAAA")                                                                                                               |
| abilities : tableau de compétences, par exemple "dev", "backend", "frontend", "dba", "devops", "sysadmin", etc...s'il s'agit d'une entreprise de dev |
| quote : une citation préférée, format string                                                                                                         |
| picture : une URL vers une image de portrait (sur le web, chemin absolu)                                                                             |

Chaque membre sur la page d'accueil sera cliquable pour accéder à une seconde page "member.php" affichant un membre de l'entreprise en particulier.

Enfin, créez une page "contact.php" sur laquelle vous écrirez un formulaire contenant les champs suivants :

- nom complet
- Email
- Objet (liste déroulante avec 2 éléments : "demande d'informations", "demande de devis")
- Message (textarea)

### Page membre (paramètre GET)

Dans [`member.php`](06-atelier-my-corp/member.php), utilisation de `$_GET` pour récupérer l'ID d'un membre, le chercher dans la liste des membres puis l'afficher (comme fait précédemment avec les produits).

### Formulaire de newsletter (méthode POST)

Réalisation d'un formulaire de newsletter dans [`index.php`](06-atelier-my-corp/index.php). Le but est de pouvoir saisir une adresse email, puis qu'elle aille s'enregistrer dans un fichier d'emails côté serveur.

![Newsletter MyCorp](docs/screenshot_newsletter_mycorp.png "Newsletter MyCorp")

Exploration du fonctionnement de la méthode `GET` (champs envoyés dans les paramètres d'URL) et la méthode `POST` (champs envoyés dans le corps de la requête, sous forme de `FormData`).

Utilisation de la méthode `POST` pour notre newsletter, ainsi qu'une cible vers une autre page [`newsletter_process.php`](06-atelier-my-corp/newsletter_process.php) : on qualifie cette page de "page rebond" : elle ne fait que des traitements puis une redirection suivant la situation.

Dans `newsletter_process.php`, on manipule la superglobale `$_POST` pour récupérer notre email.

### Refactorisation avec des fonctions

Dans [`newsletter_process.php`](06-atelier-my-corp/newsletter_process.php), isolation de certaines parties du code : on définit ce qu'on appelle des "portes" ou des "guards", qui vont nous permettre de valider différentes situations : l'email est bien présent, non vide, au bon format, n'est pas un spam, etc...

Création de plusieurs fonctions :

- [`redirect`](06-atelier-my-corp/functions/common.php), fonction généraliste pour rediriger l'utilisateur sur une autre page
- [`error.php`](06-atelier-my-corp/functions/error.php) contient à la fois des constantes définissant des codes d'erreur et une fonction associant un code d'erreur à un message donné
- [`email.php`](06-atelier-my-corp/functions/email.php) pour disposer de fonctions généralistes mais concernant les emails (ici savoir si un email est un spam)
- [`newsletter.php`](06-atelier-my-corp/functions/email.php), pour ce qui concerne la newsletter elle-même : est-ce qu'un email existe déjà dans la newsletter, ajouter un email à la newsletter
