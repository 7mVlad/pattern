<?php


class SimpleIterator implements Iterator {

    private $collection;

    private int $position;

    public function __construct($collection) {
        $this->collection = $collection;
    }

    public function rewind(): void {
        $this->position = 0;
    }

    public function current() {
        return $this->collection->getUsers()[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next(): void {
        $this->position++;
    }

    public function valid(): bool {
        return isset($this->collection->getUsers()[$this->position]);
    }
}

class UsersCollection implements IteratorAggregate
{
    private $users = [];

    public function getUsers()
    {
        return $this->users;
    }

    public function addUser(string $name)
    {
        $this->users[] = $name;
    }

    public function getIterator(): Iterator
    {
        return new SimpleIterator($this);
    }

}
