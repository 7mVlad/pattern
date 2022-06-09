<?php

interface MessageState {
    public function message();
}

class SentMessage implements MessageState {
    public function message() {
        echo "Сообщение отправлено";
    }
}

class DeliveredMessage implements MessageState {
    public function message() {
        echo "Сообщение доставлено";
    }
}

class ReadMessage implements MessageState {
    public function message() {
        echo "Сообщение прочитано";
    }
}

class Chat {

    protected $state;

    public function __construct(MessageState $state) {
        $this->state = $state;
    }

    public function setState(MessageState $state) {
        $this->state = $state;
    }

    public function result() {
        $this->state->message();
    }
}

$msg = new Chat(new SentMessage());
$msg->result();
echo "<br>";

$msg->setState(new DeliveredMessage());
$msg->result();
echo "<br>";

$msg->setState(new ReadMessage());
$msg->result();

// http://localhost:8080/spaceLab/State/State.php

