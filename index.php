<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require 'vendor/autoload.php';

$config = new \Doctrine\DBAL\Configuration();

$connectionParams = array(
    'dbname'    => 'test',
    'user'      => 'root',
    'password'  => 'root',
    'host'      => 'localhost',
    'port'      => 8889, // MAMP => 8889 / WAMP => 3306 / Default => 3306
    'driver'    => 'pdo_mysql',
    'charset'   => 'utf8',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

$sql = "SELECT * FROM article"; // SQL Request
$stmt = $conn->query($sql); // Simple, but has several drawbacks
$result = $stmt->fetchAll();

var_dump($result);