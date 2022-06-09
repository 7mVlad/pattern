<?php

interface Payment {
    public function pay();
}

class Card implements Payment {

    public function pay() {
        echo "Оплата картой";
    }
}

class CardProxy {
    
    protected $card;

    public function __construct(Payment $card) {
        $this->card = $card;
    }

    public function pay(int $password) {
        if( $password == 1234 ) {
            $this->card->pay();
        } else {
            echo "Неверный пароль";
        }
    }
}

$card = new CardProxy(new Card());
$card->pay(1234);

// http://localhost:8080/spaceLab/Proxy/Proxy.php