<?php

function redirect(string $target): void
{
    header('Location: ' . $target);
    exit;
}
