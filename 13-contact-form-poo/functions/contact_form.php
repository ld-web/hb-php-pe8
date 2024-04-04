<?php

// Champs requis dans mon formulaire de contact
const REQUIRED_FIELDS = ['name', 'firstname', 'email', 'object', 'message'];

/**
 * Utiliser cette fonction en lui passant $_POST
 * afin de vérifier que les champs requis sont bien
 * présents
 *
 * @param array $data
 * @return boolean
 */
function isContactFormValid(array $data): bool
{
    foreach (REQUIRED_FIELDS as $field) {
        // Si non défini, ou bien défini mais vide
        if (!isset($data[$field]) || empty($data[$field])) {
            return false;
        }
    }

    return true;
}
