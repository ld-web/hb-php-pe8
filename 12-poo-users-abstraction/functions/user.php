<?php

/**
 * @param User[] $users
 * @return void
 */
function describeUsers(array $users): void
{
    foreach ($users as $user) {
        echo $user->getDescription() . "<br />";
    }
}
