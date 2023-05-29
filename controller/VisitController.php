<?php
include_once'../model/Visit.php';
include_once'../dao/VisitDAO.php';

    if(isset($_REQUEST['store'])){   
        $local = $_POST['local'];
        $date = $_POST['date'];
        $resume = $_POST['resume'];

        $visit = new Visit();
        $visit->setLocal($local);
        $visit->setResume($resume);
        $visit->setDate($date);
        $visit->setDone(0);

        VisitDAO::store($visit);

        header("Location:../view/visits.php");
    }

    if(isset($_REQUEST['edit'])){   
        $id = $_REQUEST['id'];
        $local = $_POST['local'];
        $date = $_POST['date'];
        $resume = $_POST['resume'];

        $visit = new Visit();
        $visit->setLocal($local);
        $visit->setResume($resume);
        $visit->setDate($date);
        $visit->setId($id);

        VisitDAO::update($visit);

        header("Location:../view/visits.php");
    }

    if(isset($_REQUEST['delete'])){   
        $id = $_REQUEST['id'];
        
        $visit = new Visit();

        VisitDAO::delete($id);

        header("Location: ../view/visits.php");
    }

    if(isset($_REQUEST['done'])){   
        $id = $_REQUEST['id'];
        
        VisitDAO::done($id);

        header("Location: ../view/visits.php");
    }
    
?>
