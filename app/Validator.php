<?php

class Validator
{
    private string $errorMessage = "";

    public function validate(ValidatorData $validatorData): string
    {
        if (!$this->isEmailCorrect($validatorData->email)) {
            return $this->error();
        }

        if (!$this->isPasswordConfirmationCorrect($validatorData->password, $validatorData->passwordConfirm)) {
            return $this->error();
        }

        if ($this->isUserAlreadyExist($validatorData->email)) {
            return $this->error();
        }

        return $this->success();
    }

    private function isEmailCorrect(string $email): bool
    {
        // очень не хватает других валидаторов, например есть ли точка, есть ли символы до собаки и тд.
        // не стал делать потому что в тз нет, вдруг не надо

        // так же тут нужно кидать исключения, а не делать месседж

        if (stripos($email, "@") === false) {
            $this->errorMessage = "email doesn't contain @";
            return false;
        } else {
            return true;
        }
    }

    private function isPasswordConfirmationCorrect(string $password, string $passwordConfirmation): bool
    {
        $isConfirmCorrect = $password === $passwordConfirmation;

        if ($isConfirmCorrect) {
            return true;
        } else {
            $this->errorMessage = "invalid password confirm";
            return false;
        }
    }

    private function isUserAlreadyExist($email): bool
    {
        $userGateway = new UserGateway();
        $userList = $userGateway->getUsers();

        // это делается запросом в дб, но так как дб отстутвует костылим
        foreach ($userList as $user) {
            if ($user->email === $email) {
                $this->errorMessage = "user is already exists";
                return true;
            }
        }

        return false;
    }

    private function error(): string
    {
        $data = [
            "success" => false,
            "message" => $this->errorMessage,
        ];

        Logger::log($data);
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    private function success(): string
    {
        $data = [
            "success" => true
        ];

        Logger::log($data);
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}