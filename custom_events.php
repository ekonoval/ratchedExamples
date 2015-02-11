<html>
<head>

</head>

<body>

<form action="" method="post">
    <input type="hidden" name="isSubmitted"/>
    <input type="submit" name="sendChatMsg" value="send rnd chat msg"/>
</form>

<form action="" method="post">
    <input type="hidden" name="isSubmitted"/>
    <input type="submit" name="moveFigure" value="move figure"/>
</form>

</body>

</html>

<?php


use MyApp\FileLogger;
use RExt\EventRiser;

error_reporting(E_ALL);
ini_set('display_errors', 1);
require __DIR__ . '/vendor/autoload.php';

$logger = new FileLogger();

if (isset($_REQUEST["isSubmitted"])) {
//    $context = new ZMQContext();
//    $socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'somePesistentString');
//    $socket->connect("tcp://localhost:1234");
    $eventRiser = new EventRiser('localhost:1234');

    $res = array();

    if (isset($_REQUEST["moveFigure"])) {
        $res = array(
            'topicName' => 'figureMove',
            'x' => rand(0, 9999),
            'y' => rand(0, 9999),
            'playerID' => rand(999,999999)
        );
    } elseif (isset($_REQUEST["sendChatMsg"])) {
        $res = array(
            'topicName' => 'chatMsgSend',
            'msg' => uniqid('', true),
            'senderID' => rand(999,999999),
            'receiverID' => rand(999,999999),
        );
    }

    $res["when"] = time();

//    $socket->send(json_encode($res));
    $eventRiser->riseEvent($res);
}