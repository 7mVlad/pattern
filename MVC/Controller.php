<?php

require_once "Model.php";
require_once "View.php";

if($_POST != null) {
    $email = $_POST['email'];
    $password = $_POST["password"];
}

class Controller {
    private $model;
    private $view;

    private $result;

    public function __construct(Model $model, View $view, string $email, string $password) {
        $this->model = $model;
        $this->view = $view;
        $this->email = $email;
        $this->password = $password;
    }

    public function sendData() {
        $this->result = $this->model->authorization($this->email, $this->password);
    }

    public function sendView() {
        $this->view->showResult($this->result);
    }

}

if($_POST != null) {
    $controller = new Controller($model, $view, $email, $password);
    $controller->sendData();
    $controller->sendView();
}


