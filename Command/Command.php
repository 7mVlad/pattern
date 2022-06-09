<?php

namespace Command;

class Player {
    public function run() {
        echo "Игрок бежит";
    }

    public function stand() {
        echo "Игрок стоит";
    }
}

interface Command {
    public function execute();
}

class Run implements Command {

    protected $player;

    public function __construct(Player $player) {
        $this->player = $player;
    }

    public function execute() {
        $this->player->run();
    }

}

class Stand implements Command {

    protected $player;

    public function __construct(Player $player) {
        $this->player = $player;
    }

    public function execute() {
        $this->player->stand();
    }

}

class MoveSubmit {
    public function submit(Command $command) {
        $command->execute();
    }
}


