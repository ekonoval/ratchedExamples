<?php
namespace MyApp;

class FileLogger
{
    private $logPath;

    function __construct()
    {
        $this->logPath = __DIR__."/../../ratchet.log";
    }

    public function writeString($str)
    {
        file_put_contents($this->logPath, $str . " [".date( 'Y-m-d H:i:s', time())."]");
    }
}
