<?php

header('Content-Type: application/json; charset=utf-8');

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/include.php";

$validator = new Validator();
$validatorData = new ValidatorData();

try {
    $validatorData->name = $_POST["formData"]["name"];
    $validatorData->secondName = $_POST["formData"]["secondName"];
    $validatorData->email = $_POST["formData"]["email"];
    $validatorData->password = $_POST["formData"]["password"];
    $validatorData->passwordConfirm = $_POST["formData"]["passwordConfirm"];
} catch (Exception|Error) { // не хватает исключений
    json_encode([
        "success" => false,
        "message" => "empty data"
    ], JSON_UNESCAPED_UNICODE);
    die();
}

$response = $validator->validate($validatorData);

echo json_encode($response);
