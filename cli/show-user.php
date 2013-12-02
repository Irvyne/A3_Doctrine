<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

PHP_SAPI === 'cli' ?: exit('CLI Mandatory !');

$entityManager = require __DIR__."/../bootstrap.php";

$id = $argv[1];
$user = $entityManager->find('User', $id);

if ($user === null) {
    echo "No user found.\n";
    exit(1);
}

echo sprintf("%d- %s\n", $user->getId(), $user->getName());