<?php

require_once __DIR__ . '/Email.php';

class SpamChecker
{
    // Les constantes de classe sont statiques par défaut
    public const SPAM_DOMAINS = ["test.com", "vu.mq"];

    public function isSpam(Email $email): bool
    {
        // Vérifier si le domaine de l'email passé
        // en paramètre se trouve dans le tableau SPAM_DOMAINS
        $domain = $email->getDomain();
        $isSpam = in_array($domain, self::SPAM_DOMAINS);
        return $isSpam;
    }
}
