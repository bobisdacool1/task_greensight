<?php

class UserGateway
{
    public function getUsers(): array
    {
        $user1 = new User();
        $user1->id = 1;
        $user1->email = "test@test.test";
        $user1->name = "mister test";

        $user2 = new User();
        $user2->id = 2;
        $user2->email = "yandex@yandex.ya";
        $user2->name = "yandex guy";

        $user3 = new User();
        $user3->id = 3;
        $user3->email = "voloda@putin.pyc";
        $user3->name = "vvp";

        return [
            $user1,
            $user2,
            $user3,
        ];
    }
}