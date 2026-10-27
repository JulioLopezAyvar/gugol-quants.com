<?php
    date_default_timezone_set('America/Lima');
    $time_start = microtime(true);

    $config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/.env", true);
    extract($config);

    #header("Access-Control-Allow-Origin: " . $ACCESS_CONTROL_ALLOW_ORIGIN . "");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Accept, Accept-Language, Authorization, Content-Type, Origin, User-Agent");
    header("Access-Control-Allow-Methods: OPTIONS, POST, GET");
    header("Access-Control-Max-Age: 1000");
    header("Allow: OPTIONS, POST, GET");
    header("Cache-Control: no-cache");
    #header("Content-Type: application/json; charset=utf-8");
    header("Pragma: no-cache");
    header("Referrer-Policy: strict-origin-when-cross-origin");
    header("Strict-transport-security: max-age=15724800, includeSubdomains");
    header("X-Content-Type-Options: nosniff");
    header("X-Frame-Options: SAMEORIGIN");
    header("X-Permitted-Cross-Domain-Policies: none");
    header("X-XSS-Protection: 1; mode=block");

    if ($_SERVER['REQUEST_METHOD'] == "OPTIONS") {
        #header("Access-Control-Allow-Origin: " . $ACCESS_CONTROL_ALLOW_ORIGIN . "");
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Accept, Accept-Language, Authorization, Content-Type, Origin, User-Agent");
        header("HTTP/1.1 200 OK");
        die();
    }

    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

        switch ($lang) {
            case "es":
                $lang = "es";
            break;

            default:
                $lang = $LANGUAGE_DEFAULT;
            break;
        }
    }
    else{
        $lang = $LANGUAGE_DEFAULT;
    }

    #$method = strval(date("Y-m-d\TH:i:s\Z") . "|method: " . $_SERVER['REQUEST_METHOD'] . "\n");

    #$fp = file_put_contents( __DIR__ . '/request.log', $method, FILE_APPEND);
    #$fp = file_put_contents( __DIR__ . '/request.log', date("Y-m-d\TH:i:s\Z") . "|body: ", FILE_APPEND);

    if (strtoupper($_SERVER["REQUEST_METHOD"]) == "POST") {
        // capture second response which should be JSON payload
        $jsonData = file_get_contents('php://input');
        #$fp = file_put_contents( __DIR__ . '/request.log', $jsonData, FILE_APPEND);

        $message = json_decode($jsonData);

        if (json_last_error()) {
            switch (json_last_error()) {
                case JSON_ERROR_NONE:
                    echo ' - No errors';
                break;

                case JSON_ERROR_DEPTH:
                    echo ' - Maximum stack depth exceeded';
                break;

                case JSON_ERROR_STATE_MISMATCH:
                    echo ' - Underflow or the modes mismatch';
                break;

                case JSON_ERROR_CTRL_CHAR:
                    echo ' - Unexpected control character found';
                break;

                case JSON_ERROR_SYNTAX:
                    echo ' - Syntax error, malformed JSON';
                break;

                case JSON_ERROR_UTF8:
                    echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
                break;

                default:
                    echo ' - Unknown error';
                break;
            }
        }
        else {
            require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

            $global_db_environment = $MASTER_ENVIRONMENT;
            $global_db_type = "mongo";
            $global_db_credential = "app_user_gq";
            require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/php/appConnection.php';

            $tv = $mongo->gugol_quants->tv;

            /*
                EXAMPLE
                {
                    "password": "password",
                    "order_type": "sell",
                    "period": "60",
                    "time": "",
                    "broker": {{exchange}},
                    "symbol": {{ticker}}
                }
            */

            $password = strval($message->password);
            $order_type = strval(strtoupper($message->order_type));
            $time = strval($message->time);
            $period = strval($message->period);
            $broker = strval(strtoupper($message->broker));
            $symbol = strval(strtoupper($message->symbol));

            $array_mongo = array(
                "password" => strval($password),
                "order_type" => strval($order_type),
                "time" => strval($time),
                "period" => strval($period),
                "broker" => strval($broker),
                "symbol" => strval($symbol),

                "created_at" => new MongoDB\BSON\UTCDateTime(),

                "updated_at" => new MongoDB\BSON\UTCDateTime(),
            );

            $create_tv = $tv->insertOne($array_mongo);

            echo $message->password . "|" . $message->order_type . "|" . $message->period . "|" . $message->broker . "|" . $message->symbol;

            /*
                /newbot

                Alright, a new bot. How are we going to call it? Please choose a name for your bot.
                gugol_test

                Good. Now let's choose a username for your bot. It must end in `bot`. Like this, for example: TetrisBot or tetris_bot.
                gugol_bot

                Sorry, this username is already taken. Please try something different.
                gugol_quants_bot

                Done! Congratulations on your new bot. You will find it at t.me/gugol_quants_bot. You can now add a description, about section and profile picture for your bot, see /help for a list of commands. By the way, when you've finished creating your cool bot, ping our Bot Support if you want a better username for it. Just make sure the bot is fully operational before you do this.

                Use this token to access the HTTP API:
                6173905123:AAHjJiDbBNuBHHFbVzhX0LBLohPgjOLEzz0
                Keep your token secure and store it safely, it can be used by anyone to control your bot.

                For a description of the Bot API, see this page: https://core.telegram.org/bots/api
            */

            /*
            $apiToken = "6173905123:AAHjJiDbBNuBHHFbVzhX0LBLohPgjOLEzz0";

            $data = [
                'chat_id' => '5048479001',
                'text' => 'mensaje desde api webhook'
            ];

            $response = file_get_contents("https://api.telegram.org/bot/$apiToken/sendMessage?" . http_build_query($data));
            */
        }
    }
    else if (strtoupper($_SERVER["REQUEST_METHOD"]) == "GET") {
        if (!isset($_GET["password"])) {
            unset($symbol);
        }
        else {
            $password = strval($_GET["password"]);
        }

        require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

        $global_db_environment = $MASTER_ENVIRONMENT;
        $global_db_type = "mongo";
        $global_db_credential = "app_user_gq";
        require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/php/appConnection.php';

        $tv = $mongo->gugol_quants->tv;

        if (isset($password)) {
            $select_data = $tv->find(
                ['password' => strval($password)],
                [
                    'sort' => [
                        'created_at' => -1,
                    ],
                    'limit' => 1,
                ],
            );
        }
        else {
            $select_data = $tv->find(
                [],
                [
                    'sort' => [
                        'created_at' => -1,
                    ],
                    'limit' => 1,
                ],
            );
        }

        foreach ($select_data as $data) {
            echo $data["password"] . "|" . $data["order_type"] . "|" . $data["time"] . "|" . $data["period"] . "|" . $data["broker"] . "|" . $data["symbol"];
        }
    }
    else {
        $error = [
            "data" => [
                "errors" => [[
                    "key" => "invalid",
                    "message" => ($lang == "en" ? "Invalid method" : "Método inválido"),
                    "payload" => [
                        "code" => null,
                    ],
                    "type" => "method",
                ]],
            ],
        ];

        header("HTTP/1.1 405 Method Not Allowed");

        echo json_encode($errors);
        exit();
    }
?>