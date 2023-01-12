<?php

include('vendor/autoload.php');

    use Longman\TelegramBot\Telegram;
    use Longman\TelegramBot\Request;

    $chatId = '-836065006';
    $botName = 'PopukoPipimiBot';
    $token = '5861519122:AAFsOR8DUJeztc4TGbPp8CIgtoZywp_0E8Y';

    $telegram = new Telegram($token, $botName);

    // $telegram->sendMessage();
    Request::sendMessage([
        'chat_id' => $chatId,
        'text' => 'Hello Jie Lun'
    ]);

?>