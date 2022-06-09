<?php

require_once "BuilderInterface.php";
require_once "User.php";


class UserBuilder implements Builder {

    private $user;
    
    public function __construct() {
        $this->create();
    }
    
    public function create(): Builder  {
        $this->user = new User();
    
        return $this;
    }
    
    public function addSurname(string $surname): Builder {
        $this->user->surname = $surname;
    
        return $this;
    }
    
    public function addName(string $name): Builder {
        $this->user->name = $name;
    
        return $this;
    }
    
    public function addAge(int $age): Builder {
        $this->user->age = $age;
    
        return $this;
    }
    
    public function addEmail(string $email): Builder {
        $this->user->email = $email;
    
        return $this;
    }
    
    public function getUser(): User
    {
        $result = $this->user;
        $this->create();
    
        return $result;
    }
}