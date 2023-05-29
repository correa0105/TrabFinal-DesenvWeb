<?php

include_once '../db/Conn.php';
include_once '../model/Task.php';

class TaskDAO {

    public static function store($task){
        $sql = "INSERT INTO tasks (title, priority, description, done) VALUES ('{$task->getTitle()}','{$task->getPriority()}','{$task->getDescription()}','{$task->getDone()}')";
  
       Connection::execut($sql);
    }

    public static function index() {
        $sql = "SELECT id, title, priority, description, done FROM tasks";
        $result = Connection::consult($sql);
        $listTasks = new ArrayObject();

        if($result != NULL) {
            while(list($_id, $_title, $_priority, $_description, $_done) = mysqli_fetch_row($result)) {
                $task = new Task($_id, $_title, $_priority, $_description, $_done);
                $task->setId($_id);
                $task->setTitle($_title);
                $task->setPriority($_priority);
                $task->setDescription($_description);
                $task->setDone($_done);
                $listTasks->append($task);
            }
        }
        return $listTasks;
    }

    public static function show($id) {
        $sql = "SELECT id, title, priority, description, done FROM tasks WHERE id= ".$id;
        $result = Connection::consult($sql);
        $task = null;
        if ($result != null) {
            while (list($_id, $_title, $_priority, $_description, $_done) = mysqli_fetch_row($result)) {
                $task = new Task();
                $task->setId($_id);
                $task->setTitle($_title);
                $task->setPriority($_priority);
                $task->setDescription($_description);
                $task->setDone($_done);
            }
        }
        return $task;
    }

    public static function update($task) {
        $sql = "UPDATE tasks SET title = '{$task->getTitle()}', priority = '{$task->getPriority()}', description = '{$task->getDescription()}' WHERE id = '{$task->getId()}'";
        Connection::execut($sql);
    }
   
    public static function delete($id) {
        $sql = "DELETE FROM tasks WHERE id ='{$id}'";
        Connection::execut($sql);
    }

    public static function done($id) {
        $sql = "UPDATE tasks SET done = '1' WHERE id ='{$id}'";
        Connection::execut($sql);
    }

}

?>