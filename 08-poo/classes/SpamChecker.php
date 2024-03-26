<?php

require_once __DIR__ . '/Email.php';

class SpamChecker
{
    private const SPAM_DOMAINS = ["test.com", "vu.mq"];

    public function isSpam(Email $email): bool
    {

    }
}
