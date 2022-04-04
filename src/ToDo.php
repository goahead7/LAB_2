<?php

namespace App\Class;

class ToDo
{
    private $discription;
    private $todo_name;
    private $owner;
    private $id;

    /**
     * ToDo constructor.
     * @param string $todo_name
     * @param string $description
     * @param string $owner
     * @param int $id
     */
    public function __construct(string $todo_name, string $description, string $owner,int $id)
    {
        $this->todo_name = $todo_name;
        $this->description = $description;
        $this->owner = $owner;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTodoName(): string
    {
        return $this->todo_name;
    }

    /**
     * @param string $todo_name
     */
    public function setTodoName(string $todo_name): void
    {
        $this->todo_name = $todo_name;
    }

    /**
     * @return string
     */
    public function getDiscription():string
    {
        return $this->discription;
    }

    /**
     * @param string $discription
     */
    public function setDiscription($discription): void
    {
        $this->discription = $discription;
    }

    /**
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }

    /**
     * @param string $owner
     */
    public function setOwner(string $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

}
