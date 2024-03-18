<?php

const LETTERS = ["e", "i", "o"];
const NUMBERS = ["3", "1", "0"];

function remplacerLesLettres(string $input): string
{
    // return str_replace(LETTERS, NUMBERS, $input);
    $letters = [
      "e" => "3",
      "i" => "1",
      "o" => "0"
    ];

    $txtReplaced = strtr($input, $letters);
    return $txtReplaced;
}

var_dump(remplacerLesLettres("Younes"));
var_dump(remplacerLesLettres("Amélie"));
var_dump(remplacerLesLettres("Lionel"));
var_dump(remplacerLesLettres("Nabil"));
var_dump(remplacerLesLettres("Bonjour les amis"));
var_dump(remplacerLesLettres("Les cours de programmation Web sont trop cools"));
