<?php
require_once dirname(__FILE__) . '/../autoload.php';
  $content = [
      'chat_id' => $data->chat_id,
      'parse_mode' => 'Markdown',
      'text' =>  "سلام. فایل جزوه خود را آپلود نمایید (‌فایل شما باید در قالب PDF یا zip یا rar باشد)",
      'reply_markup' => $keyboard->go_back()
  ];
  $telegram->sendMessage($content);
  $database->update("users", ['isSending' => 1], ['tlg_id' => $data->user_id]);
