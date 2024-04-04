<?php

require_once __DIR__ . '/RequiredFieldsException.php';
require_once __DIR__ . '/InvalidEmailException.php';
require_once __DIR__ . '/Email.php';

class ContactForm
{
    private const REQUIRED_FIELDS = ['name', 'firstname', 'email', 'object', 'message'];
    // Données du formulaire
    private array $data;

    /**
     * @param array $data Données du formulaire (tableau associatif)
     * @throws RequiredFieldsException Si les champs requis ne sont pas fournis
     * @throws InvalidEmailException Si l'email fourni dans les données est invalide
     */
    public function __construct(array $data)
    {
        $this->data = $data;

        // Je vérifie d'abord la présence des champs requis
        if (!$this->hasRequiredFields()) {
            throw new RequiredFieldsException();
        }

        // Une fois que je me suis assuré que les champs requis étaient présents,
        // je vérifie l'email
        if(!Email::isValid($data['email'])) {
            throw new InvalidEmailException();
        }
    }

    /**
     * Utiliser cette fonction afin de vérifier
     * que les champs requis sont bien présents
     * Je fournis la capacité à ContactForm de
     * vérifier et indiquer que les données sont valides
     *
     * @return boolean
     */
    private function hasRequiredFields(): bool
    {
        foreach (self::REQUIRED_FIELDS as $field) {
            // Si non défini, ou bien défini mais vide
            if (!isset($this->data[$field]) || empty($this->data[$field])) {
                return false;
            }
        }

        return true;
    }
}
