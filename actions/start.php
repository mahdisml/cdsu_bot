<?php
require_once dirname(__FILE__) . '/../autoload.php';
$content = [
    'chat_id' => $data->chat_id,
    'text' =>  "سلام . به بات آرشیو جزوات خوش آمدید. لطفن یکی از چهار گزینه زیر را انتخاب کنید:",
    'reply_markup' => $keyboard->key_start()
];
$telegram->sendMessage($content);
$database->update("users", ['isSending' => 0 , 'isName' => 0 , 'file_id_temp' => null], ['tlg_id' => $data->user_id]);
