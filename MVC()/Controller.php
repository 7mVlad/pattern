<?php

require_once "Model.php";

if($_POST != null) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

class Controller {

    private Model $model;

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function sendData(string $email, string $password) {
        $this->model->setEmail($email); 
        $this->model->setPassword($password); 
        $this->model->authorization();
    }

}

if($_POST != null) {
    $controller = new Controller($model);
    $controller->sendData($email, $password);
}