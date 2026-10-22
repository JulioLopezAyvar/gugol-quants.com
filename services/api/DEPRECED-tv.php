<?php
    date_default_timezone_set('UTC');
    $time_start = microtime(true);

    $config = parse_ini_file("/var/www/resources/env-gq.sh", true);
    extract($config);

    #header("Access-Control-Allow-Origin: " . $ACCESS_CONTROL_ALLOW_ORIGIN . "");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Accept, Accept-Language, Authorization, Content-Type, Origin, User-Agent");
    header("Access-Control-Allow-Methods: OPTIONS, POST");
    header("Access-Control-Max-Age: 1000");
    header("Allow: OPTIONS, POST");
    header("Cache-Control: no-cache");
    header("Content-Type: application/json; charset=utf-8");
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

    $array_ip_address_allowed = array(
        "52.89.214.238",
        "34.212.75.30",
        "54.218.53.128",
        "52.32.178.7",
    );

    if (strtoupper($_SERVER["REQUEST_METHOD"]) == "POST") {
        #if(!in_array($_SERVER['REMOTE_ADDR'], $array_ip_address_allowed) && !in_array($_SERVER["HTTP_X_FORWARDED_FOR"], $array_ip_address_allowed)) {
            $errors = [
                "data" => [
                    "errors" => [],
                ],
            ];

            $json_data = file_get_contents('php://input');
            $message = json_decode($json_data);

            if (!isset($message->password) OR empty($message->password)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Password] request is missing" : "[Password] de solicitud está vacío"),
                    "payload" => [
                        "code" => "password",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->password)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Password] request is invalid" : "[Password] de solicitud es inválido"),
                        "payload" => [
                            "code" => "password",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $password = strval($message->password);
                }
            }

            if (!isset($message->time) OR empty($message->time)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Time] request is missing" : "[Tiempo] de solicitud está vacío"),
                    "payload" => [
                        "code" => "time",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->time)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Time] request is invalid" : "[Tiempo] de solicitud es inválido"),
                        "payload" => [
                            "code" => "time",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $time = DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $message->time);
                }
            }

            if (!isset($message->exchange) OR empty($message->exchange)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Exchange] request is missing" : "[Exchange] de solicitud está vacío"),
                    "payload" => [
                        "code" => "exchange",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->exchange)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Exchange] request is invalid" : "[Exchange] de solicitud es inválido"),
                        "payload" => [
                            "code" => "exchange",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $exchange = strval($message->exchange);
                }
            }

            if (!isset($message->ticker) OR empty($message->ticker)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Ticker] request is missing" : "[Ticker] de solicitud está vacío"),
                    "payload" => [
                        "code" => "ticker",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->ticker)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Ticker] request is invalid" : "[Ticker] de solicitud es inválido"),
                        "payload" => [
                            "code" => "ticker",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $ticker = strval($message->ticker);
                }
            }

            if (!isset($message->bar->time) OR empty($message->bar->time)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Time] request is missing" : "[Tiempo] de solicitud está vacío"),
                    "payload" => [
                        "code" => "time",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->bar->time)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Time] request is invalid" : "[Tiempo] de solicitud es inválido"),
                        "payload" => [
                            "code" => "time",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $bar_time = DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $message->bar->time);
                }
            }

            if (!isset($message->bar->open) OR empty($message->bar->open)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Open] request is missing" : "[Apertura] de solicitud está vacío"),
                    "payload" => [
                        "code" => "open",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->bar->open)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Open] request is invalid" : "[Apertura] de solicitud es inválido"),
                        "payload" => [
                            "code" => "open",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $bar_open = floatval($message->bar->open);
                }
            }

            if (!isset($message->bar->high) OR empty($message->bar->high)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[High] request is missing" : "[High] de solicitud está vacío"),
                    "payload" => [
                        "code" => "high",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->bar->high)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[High] request is invalid" : "[High] de solicitud es inválido"),
                        "payload" => [
                            "code" => "high",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $bar_high = floatval($message->bar->high);
                }
            }

            if (!isset($message->bar->low) OR empty($message->bar->low)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Low] request is missing" : "[Low] de solicitud está vacío"),
                    "payload" => [
                        "code" => "low",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->bar->low)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Low] request is invalid" : "[Low] de solicitud es inválido"),
                        "payload" => [
                            "code" => "low",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $bar_low = floatval($message->bar->low);
                }
            }

            if (!isset($message->bar->close) OR empty($message->bar->close)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Close] request is missing" : "[Close] de solicitud está vacío"),
                    "payload" => [
                        "code" => "close",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->bar->close)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Close] request is invalid" : "[Close] de solicitud es inválido"),
                        "payload" => [
                            "code" => "close",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $bar_close = floatval($message->bar->close);
                }
            }

            if (!isset($message->bar->volume) OR empty($message->bar->volume)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Volume] request is missing" : "[Volume] de solicitud está vacío"),
                    "payload" => [
                        "code" => "volume",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->bar->volume)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Volume] request is invalid" : "[Volume] de solicitud es inválido"),
                        "payload" => [
                            "code" => "volume",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $bar_volume = floatval($message->bar->volume);
                }
            }

            if (!isset($message->strategy->position_size) OR empty($message->strategy->position_size)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Position size] request is missing" : "[Position size] de solicitud está vacío"),
                    "payload" => [
                        "code" => "position size",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->strategy->position_size)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Position size] request is invalid" : "[Position size] de solicitud es inválido"),
                        "payload" => [
                            "code" => "position size",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $strategy_position_size = strval($message->strategy->position_size);
                }
            }

            if (!isset($message->strategy->order_action) OR empty($message->strategy->order_action)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Order action] request is missing" : "[Order action] de solicitud está vacío"),
                    "payload" => [
                        "code" => "order action",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->strategy->order_action)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Order action] request is invalid" : "[Order action] de solicitud es inválido"),
                        "payload" => [
                            "code" => "order action",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $strategy_order_action = strval($message->strategy->order_action);
                }
            }

            if (!isset($message->strategy->order_contracts) OR empty($message->strategy->order_contracts)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Order contracts] request is missing" : "[Order contracts] de solicitud está vacío"),
                    "payload" => [
                        "code" => "order contracts",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->strategy->order_contracts)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Order contracts] request is invalid" : "[Order contracts] de solicitud es inválido"),
                        "payload" => [
                            "code" => "order contracts",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $strategy_order_contracts = strval($message->strategy->order_contracts);
                }
            }

            if (!isset($message->strategy->order_price) OR empty($message->strategy->order_price)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Order price] request is missing" : "[Order price] de solicitud está vacío"),
                    "payload" => [
                        "code" => "order price",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->strategy->order_price)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Order price] request is invalid" : "[Order price] de solicitud es inválido"),
                        "payload" => [
                            "code" => "order price",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $strategy_order_price = strval($message->strategy->order_price);
                }
            }

            if (!isset($message->strategy->order_id) OR empty($message->strategy->order_id)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Order ID] request is missing" : "[Order ID] de solicitud está vacío"),
                    "payload" => [
                        "code" => "order id",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->strategy->order_id)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Order ID] request is invalid" : "[Order ID] de solicitud es inválido"),
                        "payload" => [
                            "code" => "order id",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $strategy_order_id = strval($message->strategy->order_id);
                }
            }

            if (!isset($message->strategy->market_position) OR empty($message->strategy->market_position)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Market position] request is missing" : "[Market position] de solicitud está vacío"),
                    "payload" => [
                        "code" => "market position",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->strategy->market_position)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Market position] request is invalid" : "[Market position] de solicitud es inválido"),
                        "payload" => [
                            "code" => "market position",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $strategy_market_position = strval($message->strategy->market_position);
                }
            }

            if (!isset($message->strategy->market_position_size) OR empty($message->strategy->market_position_size)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Market position size] request is missing" : "[Market position size] de solicitud está vacío"),
                    "payload" => [
                        "code" => "market position size",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->strategy->market_position_size)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Market position size] request is invalid" : "[Market position size] de solicitud es inválido"),
                        "payload" => [
                            "code" => "market position size",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $strategy_market_position_size = strval($message->strategy->market_position_size);
                }
            }

            if (!isset($message->strategy->prev_market_position) OR empty($message->strategy->prev_market_position)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Prev market position] request is missing" : "[Prev market position] de solicitud está vacío"),
                    "payload" => [
                        "code" => "prev market position",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->strategy->prev_market_position)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Prev market position] request is invalid" : "[Prev market position] de solicitud es inválido"),
                        "payload" => [
                            "code" => "prev market position",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $strategy_prev_market_position = strval($message->strategy->prev_market_position);
                }
            }

            if (!isset($message->strategy->prev_market_position_size) OR empty($message->strategy->prev_market_position_size)) {
                $error = [
                    "key" => "missing",
                    "message" => ($lang == "en" ? "[Prev market position size] request is missing" : "[Prev market position size] de solicitud está vacío"),
                    "payload" => [
                        "code" => "prev market position size",
                    ],
                    "type" => "params",
                ];

                array_push($errors["data"]["errors"], $error);
            }
            else {
                if (!is_string($message->strategy->prev_market_position_size)) {
                    $error = [
                        "key" => "invalid",
                        "message" => ($lang == "en" ? "[Prev market position size] request is invalid" : "[Prev market position size] de solicitud es inválido"),
                        "payload" => [
                            "code" => "prev market position size",
                        ],
                        "type" => "params",
                    ];

                    array_push($errors["data"]["errors"], $error);
                }
                else {
                    $strategy_prev_market_position_size = strval($message->strategy->prev_market_position_size);
                }
            }

            if (count($errors["data"]["errors"]) > 0) {
                header("HTTP/1.1 400 Bad Request");

                echo json_encode($errors, JSON_UNESCAPED_UNICODE);
                exit();
            }
            else {
                try {
                    require "/var/www/resources/php/vendor/autoload.php";

                    $global_db_environment = $MASTER_ENVIRONMENT;
                    $global_db_type = "mongo";
                    $global_db_credential = "app_user_gq";
                    require '/var/www/resources/php/gugol-quants-io/appConnection.php';

                    $quotes = $mongo->gugol_quants->quotes;

                    $array_insert = $quotes->insertOne(
                        "time" => new MongoDB\BSON\UTCDateTime($time),
                        "exchange" => strval($exchange),
                        "ticker" => strval($ticker),
                        "bar" => [
                            "time" => new MongoDB\BSON\UTCDateTime($bar_time->format('U') * 1000),
                            "open" => floatval($bar_open),
                            "high" => floatval($bar_high),
                            "low" => floatval($bar_low),
                            "close" => floatval($bar_close),
                            "volume" => floatval($bar_volume),
                        ],
                        "strategy" => [
                            "position_size" => $strategy_position_size,
                            "order_action" => $strategy_order_action,
                            "order_contracts" => $strategy_order_contracts,
                            "order_price" => $strategy_order_price,
                            "order_id" => $strategy_order_id,
                            "market_position" => $strategy_market_position,
                            "market_position_size" => $strategy_market_position_size,
                            "prev_market_position" => $strategy_prev_market_position,
                            "prev_market_position_size" => $strategy_prev_market_position_size,
                        ],

                        "created_at" => new MongoDB\BSON\UTCDateTime(),

                        "updated_at" => new MongoDB\BSON\UTCDateTime(),
                    );

                    $response = [
                        "status" => "ok",
                    ];

                    $duration = microtime(true) - $time_start;
                    $hours = intval($duration / 60 / 60);
                    $minutes = intval($duration / 60) - $hours * 60;
                    $seconds = intval($duration - $hours * 60 * 60 - $minutes * 60);

                    $response["execution_time"] = strval($hours . "hrs " . $minutes . "mins " . $seconds . "secs");

                    header("HTTP/1.1 200 OK");

                    echo json_encode($response, JSON_UNESCAPED_UNICODE);
                    exit();
                }
                catch (MongoDB\Driver\Exception\Exception $e) {
                    $error = [
                        "key" => "error",
                        "message" => ($lang == "en" ? "Error while process your request" : "Error mientras procesamos tu solicitud"),
                        "payload" => [
                            "code" => $e->getMessage(),
                        ],
                        "type" => "error",
                    ];

                    array_push($errors["data"]["errors"], $error);

                    header("HTTP/1.1 400 Bad Request");

                    echo json_encode($errors, JSON_UNESCAPED_UNICODE);
                    exit();
                }
            }
        /*
        }
        else {
            header("HTTP/1.1 401 Unauthorized");

            $error_message = ($lang == "en") ? "Unauthorized" : "No autorizado";

            $error = array (
                "data" => array (
                    "errors" => array (array (
                        "key" => "authorization",
                        "message" => $error_message,
                        "payload" => array (
                            "code" => null,
                        ),
                        "type" => "authorization",
                    ))
                )
            );

            echo json_encode($error);
            exit();
        }
        */
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

        echo json_encode($error);
        exit();
    }
?>
