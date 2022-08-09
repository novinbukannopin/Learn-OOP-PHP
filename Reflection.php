<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "novin";
$loginRequest->password = "novin";
//ValidationUtil::validate($loginRequest);
ValidationUtil::validateReflection($loginRequest);


