<?php

class Auto {

    protected string $model;

    public function __construct(string $name){
        $this->model = $name;
    }
}

class AutoFactory {

    protected $models = [];

    public function create(string $name) {

        if (empty($this->models[$name])) {
            $this->models[$name] = new Auto($name);
        }

        return $this->models[$name];
    }
}

$factory = new AutoFactory();

$bmw = $factory->create("BMW");
$audi = $factory->create("Audi");
$tesla = $factory->create("Tesla");
$blackTesla = $factory->create("Tesla");