<?php

class Logger
{
    public static function log(...$data): void
    {
        $currentDate = date("Y-m-d H:i:s");
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);

        file_put_contents($_SERVER["DOCUMENT_ROOT"] . "/logs/log.log", $currentDate . " | " . $data . "\n", FILE_APPEND);
    }
}