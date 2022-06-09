<?php

interface Builder {

    public function create(): Builder;
    public function addSurname(string $surname) : Builder;
    public function addName(string $name) : Builder; 
    public function addAge(int $age) : Builder;
    public function addEmail(string $email) : Builder;
    public function getUser(): User;
}