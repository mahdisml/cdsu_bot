<?php
require_once dirname(__FILE__) . '/../autoload.php';
$content = [
    'chat_id' => $data->chat_id,
    'text' =>  "منوی اصلی :",
    'reply_markup' => $keyboard->key_start()
];
$telegram->sendMessage($content);
