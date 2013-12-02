<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

PHP_SAPI === 'cli' ?: exit('CLI Mandatory !');

$entityManager = require __DIR__."/../bootstrap.php";

$userRepository = $entityManager->getRepository('User');
$users = $userRepository->findAll();

foreach ($users as $user) {
    echo sprintf("%d- %s\n", $user->getId(), $user->getName());
}