<?php

namespace TodoApp\Models;

class TodoModel
{
    private $dbConnection;

    public function __construct(\PDO $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function getAllTodos()
    {
        $query = $this->dbConnection->prepare("SELECT `id`, `item`, `complete`, `delete` FROM `todoMasterList`;");
        $query->execute();
        return $query->fetchAll();
    }

    public function createTodo($item)
    {
        $query = $this->dbConnection->prepare("INSERT INTO `todoMasterList` (`item`) VALUES (:item)");
        $query->bindParam(':item', $item);
        return $query->execute();
    }

    public function deleteTodo($id)
    {
        $query = $this->dbConnection->prepare("UPDATE `todoMasterList` SET `delete` = '1' WHERE `id` = :id;");
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    public function completeTodo($id)
    {
        $query = $this->dbConnection->prepare("UPDATE `todoMasterList` SET `complete` = '1' WHERE `id` = :id;");
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}