<?php

const NEWSLETTER_FILE_PATH = __DIR__ . '/../data/emails.txt';

function isDuplicate(string $email): bool
{
    // Si on n'est pas sûr que le fichier existe déjà,
    // on peut vérifier son existence avant d'aller charger son contenu
    if (!file_exists(NEWSLETTER_FILE_PATH)) {
        return false;
    }

    $emails = file(NEWSLETTER_FILE_PATH, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);

    return in_array($email, $emails);
}

function addEmailToNewsletter(string $email): void
{
    $emailsFile = fopen(NEWSLETTER_FILE_PATH, 'a+');
    fwrite($emailsFile, $email . PHP_EOL);
    fclose($emailsFile);
}
