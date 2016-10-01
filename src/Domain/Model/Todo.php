<?php

namespace App\Domain\Model;

class Todo
{
    private $name;

    private $status;

    private function __construct()
    {
    }

    public static function create($name)
    {
        $todo = new Todo();
        $todo->name = $name;

        return $todo;
    }

    public function markAsDone()
    {
        $this->status = true;
    }

    public function markAsUndone()
    {
        $this->status = false;
    }

    public function getName()
    {
        return $this->name;
    }

    public function isDone()
    {
        return $this->status;
    }
}
