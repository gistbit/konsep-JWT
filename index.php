<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/TokenHandler.php';

use App\Core\Features\TokenHandler;

$private = file_get_contents('private_key.pem');
$public = file_get_contents('public_key.pem');


$payload = [
    'id' => 213049,
    'name' => 'akram'
];

$token = TokenHandler::generateToken($payload, $private);

$result = TokenHandler::verifyToken($token, $public);

print_r($token);

