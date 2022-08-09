<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "novin";
$loginRequest->password = "";

//try {
//    validateLoginRequest($loginRequest);
//} catch (ValidationException $exception) {
//    echo "Error : {$exception->getMessage()}" . PHP_EOL;
//} catch (Exception $exception){
//    echo "Error : {$exception->getMessage()}" . PHP_EOL;
//}


try {
    validateLoginRequest($loginRequest);
} catch (ValidationException|Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

//  GETTRACE
    var_dump($exception->getTrace());

    echo $exception->getTraceAsString() . PHP_EOL;
} finally {
    echo "Error gak eror tetep ditangkep yaa" . PHP_EOL;
}

// finally