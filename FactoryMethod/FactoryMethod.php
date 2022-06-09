<?php

interface Messenger {
    public function sendMessage();
}

class MessengerFactory {

    public function createWhatsAppMessenger(): Messenger
    {
        return new WhastAppMessenger();
    }

    public function createTelegramMessenger(): Messenger
    {
        return new TelegramMessenger();
    }
}

class WhastAppMessenger implements Messenger {
    public function sendMessage() {
        echo "Send message from WhastApp";
    }
}

class TelegramMessenger implements Messenger {
    public function sendMessage() {
        echo "Send message from Telegram";
    }
} 