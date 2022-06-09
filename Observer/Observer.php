<?php

class Subscriber implements SplObserver {

    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function update(SplSubject $subject): void   {
        echo 'Привет, ' . $this->name . '! Новая новость: '. $subject->getTitle() . "<br><br>";
    }
}


class News implements SplSubject {

    protected $observers = [];
    protected $title;

    public function addNews(string $title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function attach(SplObserver $observer): void {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer): void {
        $key = array_search($observer,$this->observers, true);
        if(isset($key)){
            unset($this->observers[$key]);
        }
    }

    public function notify(): void {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

}


