<?php


class Model {

    public function authorization(string $email, string $password) {
        if($email == "admin@admin.com" && $password == 1111) {
            return "Добро пожаловать!";
        } else {
            return "Неверный email или пароль";
        }
    }
}

$model = new Model();