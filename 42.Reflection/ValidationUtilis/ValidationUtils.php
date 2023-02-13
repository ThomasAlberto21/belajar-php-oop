<?php

// Todo Reflection

class ValidationUtils
{
    // ! Tanpa reflection
    static function validate(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException("Username Is Null");
        } else if (!isset($request->password)) {
            throw new ValidationException("Password Is Null");
        }
    }



    // ! Menggunakan Reflection
    static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new ValidationException("$property->name Is Not Set");
            } else if (is_null($property->getValue($request))) {
                throw new ValidationException("$property->name Is Null");
            }
        }
    }
}
