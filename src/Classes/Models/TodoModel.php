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
}