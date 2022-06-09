<?php

class Websait {

    public function sendDNS() {
        echo "Отпрвка зароса на DNS сервер <br>";
    }

    public function getIP(): string {
        return "Получение IP адреса <br>"; 
    }

    public function sendServer() {
        echo "Отпрвка запроса на сервер <br>";
    }

    public function getAnswer(): string {
        return "Получение ответа с сервера <br>";
    }
    
    public function show() {
        echo "Страница сайта";
    }
}

class WebsaitFacade {
    protected $websait;

    public function __construct(Websait $websait) {
        $this->websait = $websait;
    }

    public function URL() {
        echo $this->websait->sendDNS();
        echo $this->websait->getIP();
        echo $this->websait->sendServer();
        echo $this->websait->getAnswer();
        echo $this->websait->show();
    }
}

$websait = new Websait();
$facade = new WebsaitFacade($websait);
$facade->URL();

// http://localhost:8080/spaceLab/Facade/Facade.php