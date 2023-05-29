<?php
include_once'../model/Task.php';
include_once'../dao/TaskDAO.php';

    if(isset($_REQUEST['store'])){   
        $title = $_POST['title'];
        $priority = $_POST['priority'];
        $description = $_POST['description'];

        $task = new Task();
        $task->setTitle($title);
        $task->setPriority($priority);
        $task->setDescription($description);
        $task->setDone(0);

        TaskDAO::store($task);

        header("Location:../view/tasks.php");
    }

    if(isset($_REQUEST['edit'])){   
        $id = $_REQUEST['id'];
        $title = $_POST['title'];
        $priority = $_POST['priority'];
        $description = $_POST['description'];

        $task = new Task();
        $task->setTitle($title);
        $task->setPriority($priority);
        $task->setDescription($description);
        $task->setId($id);

        TaskDAO::update($task);

        header("Location:../view/tasks.php");
    }

    if(isset($_REQUEST['delete'])){   
        $id = $_REQUEST['id'];
        
        $task = new Task();

        TaskDAO::delete($id);

        header("Location: ../view/tasks.php");
    }

    if(isset($_REQUEST['done'])){   
        $id = $_REQUEST['id'];
        
        TaskDAO::done($id);

        header("Location: ../view/tasks.php");
    }
    
?>
