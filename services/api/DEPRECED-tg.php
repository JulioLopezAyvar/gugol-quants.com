<?php
    /*
    README
        algunas variables se igualan a 0 para que al enviarse al endpoint de actualizacion, se guarden como null
    */

    date_default_timezone_set('America/Lima');
    $time_start = microtime(true);

    $config = parse_ini_file("/var/www/resources/env-gq.sh", true);
    extract($config);

    $apiToken = "6173905123:AAHjJiDbBNuBHHFbVzhX0LBLohPgjOLEzz0";
    $chat_id = '5048479001';

    require "/var/www/resources/php/vendor/autoload.php";

    $telegram = new Telegram($apiToken);

    #$result = $telegram->getData();
    #$text = $result['message'] ['text'];
    #$chat_id = $result['message']['chat']['id'];

    #if($text == /test){
        $msg= 'Test is good';
        $content = array('chat_id' => $chat_id, 'text' => $msg);
        $telegram->sendMessage($content);

        print_r($telegram);
    #}



?>