<?php

require_once __DIR__ . '/vendor/autoload.php';

/** @var array $config */
$config = require __DIR__ . '/config.php';

use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Request;

$telegram = new Telegram($config['api_key'], $config['bot_username']);

Request::sendMessage([
    'chat_id' => $chatId,
    'text' => 'Hello Jie Lun'
]);

?>