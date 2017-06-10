<?php
require_once 'libs/medoo.php';
require_once 'libs/Telegram.php';
require_once 'libs/WebHookGet.php';
require_once 'libs/Keyboard.php';
date_default_timezone_set('Asia/Tehran');
$telegram = new Telegram("");
$data = new webHookGet($telegram);
$keyboard = new keyboard();
$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'cdsu',
    'server' => '127.12.208.131',
    'username' => '',
    'password' => '',
    'charset' => 'utf8mb4'
]);
