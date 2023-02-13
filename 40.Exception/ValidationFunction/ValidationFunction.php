<?php

// Todo Validation Function
// * Exception biasanya terjadi di function
// * Di dalam kode program kita, untuk membuat exception kita cukup menggunakan kata kunci throw, diikuti dengan object exception nya


function validateLoginRequest(LoginRequest $request)
{
    if (!isset($request->username)) {
        throw new ValidationException("Username Is Null");
    } else if (!isset($request->password)) {
        throw new ValidationException("Password Is Null");
    } else if (trim($request->username == "")) {
        throw new Exception("Username Is Blank");
    } else if (trim($request->password == "")) {
        throw new Exception("Password Is Blank");
    }
}
