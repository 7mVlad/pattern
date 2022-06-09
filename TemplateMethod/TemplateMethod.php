<?php

abstract class Car {

    final public function createCar() {
        $this->addBody();
        $this->addEngine();
        $this->addElectronics();
    }

    abstract public function addBody();
    abstract public function addEngine();
    abstract public function addElectronics();

}

class AudiCar extends Car {
    
    public function addBody() {
        echo "Добавить кузов в машину Audi" . "<br>";
    }

    public function addEngine() {
        echo "Добавить двигатель внутреннего сгорания" . "<br>";
    }

    public function addElectronics() {
        echo "Добавить электронику в машину Audi" . "<br>";
    }
}

class TeslaCar extends Car {
    
    public function addBody() {
        echo "Добавить кузов в машину Tesla" . "<br>";
    }

    public function addEngine() {
        echo "Добавить электрический двигатель" . "<br>";
    }

    public function addElectronics() {
        echo "Добавить электронику в машину Tesla" . "<br>";
    }
}

$audiCar = new AudiCar();
$audiCar->createCar();

echo "<br><hr><br>";

$teslaCar = new TeslaCar();
$teslaCar->createCar();


// http://localhost:8080/spaceLab/TemplateMethod/TemplateMethod.php