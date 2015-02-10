<html>
<head>

</head>

<body>

<form action="" method="post">
    <ul>
        <li>
            <label>category <input type="text" name="category" value="kittensCategory"/></label>
        </li>
        <li>
            <label>title <input type="text" name="title" value="title 1"/></label>
        </li>
        <li>
            <label>article <input type="text" name="article" value="art 1"/></label>
        </li>
    </ul>

    <input type="submit" value="submit"/>
</form>

</body>

</html>

<?php


use MyApp\FileLogger;

error_reporting(E_ALL);
ini_set('display_errors', 1);
require __DIR__ . '/vendor/autoload.php';

$logger = new FileLogger();


$res = $_REQUEST;
if (isset($res["category"])) {
    $context = new ZMQContext();
    $socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
    $socket->connect("tcp://localhost:5555");

    $res["when"] = time();

    //$logger->writeString('xxx');

    $socket->send(json_encode($res));
}
