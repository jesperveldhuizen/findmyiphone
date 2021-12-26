<?php

namespace Fieldhousen\FindMy;

require_once 'vendor/autoload.php';

$user = $_SERVER['argv'][1] ?? null;
$password = $_SERVER['argv'][2] ?? null;

$client = new FindMy($user, $password);
$devices = $client->getDevices();

print_r($devices);
