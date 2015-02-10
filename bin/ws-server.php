<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use MyApp\Chat;
use Ratchet\Server\IoServer;

require __DIR__ . '/../vendor/autoload.php';

//$obj = new Chat();
//$obj->test();exit;


$server = IoServer::factory(
    new Chat(),
    8081,
    'localhost'
);

$server->run();
