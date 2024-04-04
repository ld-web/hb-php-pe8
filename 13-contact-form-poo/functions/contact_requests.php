<?php

require_once __DIR__ . '/db.php';

/**
 * Récupère toutes les demandes de contact
 * présentes en base de données
 *
 * @return array
 */
function getContactRequests(): array
{
    $pdo = getConnection();
    $stmt = $pdo->query("SELECT * FROM contact_requests");
    return $stmt->fetchAll();
}
