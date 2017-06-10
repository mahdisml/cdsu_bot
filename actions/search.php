<?php
require_once dirname(__FILE__) . '/../autoload.php';
  $content = [
      'chat_id' => $data->chat_id,
      'parse_mode' => 'Markdown',
      'text' =>  "به زودی بخش جستجوی خفن بات هم راه میفته !"
      // 'reply_markup' => $keyboard->key_next()
  ];
  $telegram->sendMessage($content);
