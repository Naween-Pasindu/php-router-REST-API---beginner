<?php
// Database
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "test");
define("ENCRYPTION_KEY","AHkjghjvHJGKNKLlkBG54J");

$errorCode = array(
    	            'classNotFound' => 800,
                    'methodNotFound' => 801,
                    'attributeMissing' => 802,
                    'apiKeyError' => 803,
                    'userKeyError' => 804,
                    'unknownError' => 805,
                    'success' => 806,
                    'permissionError' => 807,
                    'jsonRequestNotFoundError' => 808,
                    'tokenExpired' => 809,
                    'tokenRewoked' => 810,
                    'userCreadentialWrong' => 811,
                    'routeNotFound' => 812,
                    'unhandledRequestingMetod' => 813,
                    'unableToHandle' => 817
                    );