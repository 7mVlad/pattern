<?php

abstract class Shape {
    protected $color;

    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    abstract public function getShape(): string;
}

class Circle extends Shape {

    public function getShape(): string
    {
        return $this->color->getColor() . " круг";
    }
}

class Square extends Shape {

    public function getShape(): string
    {
        return $this->color->getColor() . " квадрат";
    }
}

interface Color {
    public function getColor(): string;
}

class RedColor implements Color {

    public function getColor(): string
    {
        return "Красный";
    }
}

class BlueColor implements Color {

    public function getColor(): string
    {
        return "Синий";
    }
}