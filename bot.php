<?php
require_once 'autoload.php';
$last = $database->select("users", ["isSending","isName"], ["tlg_id" => $data->user_id]);
if($data->text == "👎بازگشت") {
  require_once 'actions/start.php';
}
else if($last[0]['isSending'] == 1){
  require_once 'actions/upload_jozveh_save.php';
}
else if($last[0]['isName'] == 1){
  require_once 'actions/upload_jozveh_name.php';
}
else {
  switch ($data->text) {
    case '/start':
      require_once 'actions/start.php';
      break;

    case '🚀آپلود کردن جزوات':
      require_once 'actions/upload_jozveh_start.php';
      break;

    case '🔍جستجوی جزوات':
      require_once 'actions/search.php';
      break;

    case '👎بازگشت':
      require_once 'actions/start.php';
      break;

    default:
      require_once 'actions/start.php';
      break;
  }
}
// update users info in every message comming !
$database->insert("users", [
    "tlg_id" => $data->user_id,
    "tlg_username" => $data->username,
    "tlg_name" => $data->first_name,
    "tlg_lastname" => $data->last_name,
    'last_updated' => date("Y-m-d H:i:s")
]);
// log data coming from telegram
$updateArray = print_r($telegram->getData(),TRUE);
file_put_contents("log.json", $updateArray.PHP_EOL , FILE_APPEND | LOCK_EX);
