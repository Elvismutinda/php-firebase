<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('php-firebase-elvis-firebase-adminsdk-eyohz-f46c8a6f0b.json')
    ->withDatabaseUri('https://php-firebase-elvis-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

?>