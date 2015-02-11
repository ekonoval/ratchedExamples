<?php
use RExt\CliServer;
use RExt\PusherCustom;

require __DIR__ . '/../vendor/autoload.php';

$pusher = new PusherCustom();
$cliServer = new CliServer($pusher, '127.0.0.1:1234', '0.0.0.0:8080');
$cliServer->mainRun();
