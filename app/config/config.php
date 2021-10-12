<?php
// Database
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "thejobclub");
define("API_KEY", "1234");

//SMS
define("sender", ""); 
define("sms_password", "");
$errorCode = array(
    	            'classNotFound' => 800,
                    'methodNotFound' => 801,
                    'attributeMissing' => 802,
                    'apiKeyError' => 803,
                    'userKeyError' => 804,
                    'unknownError' => 805,
                    'success' => 806,
                    'permissionError' => 807
                    );