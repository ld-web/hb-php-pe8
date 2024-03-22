<?php

function isSpam(string $email): bool
{
    // - Extraire le domaine de l'email
    // Pour pouvoir vérifier s'il s'agit d'un spam
    $emailParts = explode('@', $email);
    $emailDomain = $emailParts[1];
    // - Une fois que j'ai le domaine,
    // je vérifie s'il est considéré comme un spam
    $spamDomains = file(__DIR__ . '/../data/spam_domains.txt', FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
    return in_array($emailDomain, $spamDomains);
}
