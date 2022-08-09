<?php
function validateLoginRequest(LoginRequest $loginRequest)
{
    if (!isset($loginRequest->username)) {
        throw new ValidationException("Username is null");
    } elseif (!isset($loginRequest->password)) {
        throw new ValidationException("Password is null");
    } elseif (trim($loginRequest->username) == "") {
        throw new Exception("Username is empty");
    } elseif (trim($loginRequest->password) == "") {
        throw new Exception("Password is null");
    }
}
