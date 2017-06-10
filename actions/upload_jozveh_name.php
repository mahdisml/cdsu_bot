<?php
require_once dirname(__FILE__) . '/../autoload.php';
$content = [
      'chat_id' => $data->chat_id,
      'parse_mode' => 'Markdown',
      'text' =>  "جزوه شما ثبت شد ! ممنون از وقتی که گذاشتید ",
      'reply_markup' => $keyboard->key_start()
  ];
$last = $database->select("users", ["file_id_temp"], ["tlg_id" => $data->user_id]);
$telegram->sendMessage($content);
$database->insert("papers", [
    "sender_tlg_id" => $data->user_id,
    "file_id" => $last[0]['file_id_temp'],
    "name" => $data->text
]);
$database->update("users", ['isName' => 0 , 'isName' => 0 , 'file_id_temp' => null], ['tlg_id' => $data->user_id]);
