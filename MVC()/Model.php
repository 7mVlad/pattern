<?php

require_once "View.php";

class Model {

    private View $view;
    private string $email;
    private string $password;
    private string $result;

    public function __construct(View $view) {    
        $this->view = $view;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }

    public function authorization() {
        if($this->email == "admin@admin.com" && $this->password == '1234') {
            $this->result = "Добро пожаловать!";
        } else {
            $this->result = "Неверный email или пароль";
        }

        $this->sendResult($this->result);
    }

    public function sendResult($result) {
        $this->view->showResult($result);
    }
}

$model = new Model($view);
