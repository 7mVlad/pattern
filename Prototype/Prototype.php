<?php

class Book {
     
    private string $title;
    private string $author;

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function setAuthor(string $author) {
        $this->author = $author;
    }    

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function __clone() {
       
    }
}

