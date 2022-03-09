<?php
header('Content-Type: application/json; charset=utf-8');

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/include.php";

$validator = new Validator();

$validatorData = new ValidatorData();

$validatorData->name = $_POST["name"];
$validatorData->secondName = $_POST["second-name"];
$validatorData->email = $_POST["email"];
$validatorData->password = $_POST["password"];
$validatorData->passwordConfirm = $_POST["password-confirm"];

$response = $validator->validate($validatorData);

echo json_encode($response);
