<?php
include_once'../model/Local.php';
include_once'../dao/LocalDAO.php';

    if(isset($_REQUEST['store'])){   
        $localName = $_POST['local'];

        $local = new Local();
        $local->setLocal($localName);

        LocalDAO::store($local);

        header("Location:../view/registerLocal.php");
    }

    if(isset($_REQUEST['delete'])){   
        $id = $_REQUEST['id'];
        
        $local = new Local();

        LocalDAO::delete($id);

        header("Location: ../view/registerLocal.php");
    }
    
?>
