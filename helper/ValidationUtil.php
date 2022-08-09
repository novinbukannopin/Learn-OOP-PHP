<?php

class ValidationUtil
{
    static function validate(LoginRequest $loginRequest)
    {
        if (!isset($loginRequest->username)) {
            throw new ValidationException("Username is null");
        } elseif (!isset($loginRequest->password)) {
            throw new ValidationException("Password is null");
        }
    }

    static function validateReflection($loginRequest)
    {
        $reflection = new ReflectionClass($loginRequest);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if (!$property->isInitialized($loginRequest)) {
                throw new ValidationException("$property->name is not set");
            } elseif (is_null($property->getValue($loginRequest))) {
                throw new ValidationException("$property->name is null");
            }
        }

    }
}
