<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/vendor/autoload.php';

$config = new \Doctrine\DBAL\Configuration();

$connectionParams = require __DIR__.'/config/database.php';

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

$sql = "SELECT * FROM article"; // SQL Request
$stmt = $conn->query($sql); // Simple, but has several drawbacks
$result = $stmt->fetchAll();

var_dump($result);