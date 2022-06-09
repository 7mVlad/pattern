<?php

interface GameCharacter {
    public function accept(IVisitor $visitor);
}

interface IVisitor {
    public function visitArcher(GameCharacter $archer);
    public function visitWarrior(GameCharacter $warrior);
}

class Archer implements GameCharacter {

    public function accept(IVisitor $visitor) {
        $visitor->visitArcher($this);
    }
}

class Warrior implements GameCharacter {

    public function accept(IVisitor $visitor) {
        $visitor->visitWarrior($this);
    }
}

class AttackVisitor implements IVisitor {

    public function visitArcher(GameCharacter $archer) {
        echo "Атака из лука";
    }

    public function visitWarrior(GameCharacter $warrior) {
        echo "Атака с помощью меча";
    }
}

class RunVisitor implements IVisitor {

    public function visitArcher(GameCharacter $archer) {
        echo "Бег со скоростью 10 м/с";
    }

    public function visitWarrior(GameCharacter $warrior) {
        echo "Бег со скоростью 5 м/с";
    }
}

