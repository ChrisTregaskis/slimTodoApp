<?php

namespace TodoApp\Models;

class TodoModel
{
    private $dbConnection;

    /**
     * Instantiates TodoModel with a db connection that can be passed in each method
     *
     * @param \PDO $dbConnection //takes a db connection and puts it in the local variable
     */
    public function __construct(\PDO $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    /**
     * method that uses db connection to gets all data from db
     *
     * @return array //array of all todos
     */
    public function getAllTodos()
    {
        $query = $this->dbConnection->prepare("SELECT `id`, `item`, `complete`, `delete`, `position` FROM `todoMasterList` ORDER BY `position`;");
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * method that uses db connection to add a new todoItem to db
     *
     * @param $item //takes a new todoItem
     * @return bool //after updating db, returns true
     */
    public function createTodo($item)
    {
        $query = $this->dbConnection->prepare("INSERT INTO `todoMasterList` (`item`) VALUES (:item)");
        $query->bindParam(':item', $item);
        return $query->execute();
    }

    /**
     * method that uses db connection to set the relevant item's delete flag to true
     *
     * @param $id //takes id to match in db
     * @return bool //returns true if successful
     */
    public function deleteTodo($id)
    {
        $query = $this->dbConnection->prepare("UPDATE `todoMasterList` SET `delete` = '1' WHERE `id` = :id;");
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    /**
     * method that uses db connection to set the relevant item's complete flag to true
     *
     * @param $id //takes id to match in db
     * @return bool //returns true if successful
     */
    public function completeTodo($id)
    {
        $query = $this->dbConnection->prepare("UPDATE `todoMasterList` SET `complete` = '1' WHERE `id` = :id;");
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    /**
     * method that uses db connection to set the relevant item's complete flag to false
     * thereby moving it to the active todoList
     *
     * @param $id //takes id to match in db
     * @return bool //returns true if successful
     */
    public function reinstateTodo($id)
    {
        $query = $this->dbConnection->prepare("UPDATE `todoMasterList` SET `complete` = '0' WHERE `id` = :id;");
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    /**
     * method that uses db connection to update the relevant item's description
     *
     * @param $item //takes description to replace with
     * @param $id //takes id to match in db
     * @return bool //returns true if successful
     */
    public function editUpdateTodo($item, $id)
    {
        $query = $this->dbConnection->prepare("UPDATE `todoMasterList` SET `item` = :item WHERE `id` = :id;");
        $query->bindParam(':item', $item);
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    /**
     * method that uses db connection to update the relevant item's position
     *
     * @param $position //takes position to replace with
     * @param $id //takes id to match in db
     * @return bool //returns true if successful
     */
    public function updateTodoPosition($position, $id)
    {
        $query = $this->dbConnection->prepare("UPDATE `todoMasterList` SET `position` = :position WHERE `id` = :id;");
        $query->bindParam(':position', $position);
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}