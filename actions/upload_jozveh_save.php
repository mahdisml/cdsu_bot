<?php
require_once dirname(__FILE__) . '/../autoload.php';
if($data->document_id == null){
  $content = [
      'chat_id' => $data->chat_id,
      'parse_mode' => 'Markdown',
      'text' =>  "شما فایلی ارسال نکرده اید ! لطفن در قالب pdf یا zip یا rar دوباره ارسال نمایید",
      'reply_markup' => $keyboard->go_back()
  ];
  $telegram->sendMessage($content);
} else {
  $content = [
      'chat_id' => $data->chat_id,
      'parse_mode' => 'Markdown',
      'text' =>  "لطفا نام مناسبی برای جزوه خود ارسال نمایید ( مثلا جزوه معماری کامپیوتر دکتر باوفا)\n نام استاد و نام درس و فصولی که جزوه پوشش میدهد حداقل اطلاعاتی است که لطفن وارد نمایید !",
      'reply_markup' => $keyboard->go_back()
  ];
  $database->update("users", ['isSending' => 0 , 'file_id_temp' => $data->document_id , 'isName' => 1], ['tlg_id' => $data->user_id]);
  $telegram->sendMessage($content);
}
