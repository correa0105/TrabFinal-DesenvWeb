<?php

include_once '../db/Conn.php';
include_once '../model/Visit.php';

class VisitDAO {

    public static function store($visit){
        $sql = "INSERT INTO visits (local, resume, date, done) VALUES ('{$visit->getLocal()}','{$visit->getResume()}','{$visit->getDate()}','{$visit->getDone()}')";
  
       Connection::execut($sql);
    }

    public static function index() {
        $sql = "SELECT id, local, resume, date, done FROM visits";
        $result = Connection::consult($sql);
        $visitList = new ArrayObject();

        if($result != NULL) {
            while(list($_id, $_local, $_resume, $_date, $_done) = mysqli_fetch_row($result)) {
                $visit = new Visit($_id, $_local, $_resume, $_date, $_done);
                $visit->setId($_id);
                $visit->setLocal($_local);
                $visit->setResume($_resume);
                $visit->setDate($_date);
                $visit->setDone($_done);
                $visitList->append($visit);
            }
        }
        return $visitList;
    }

    public static function show($id) {
        $sql = "SELECT id, local, resume, date, done FROM visits WHERE id= ".$id;
        $result = Connection::consult($sql);
        $visit = null;
        if ($result != null) {
            while (list($_id, $_local, $_resume, $_date, $_done) = mysqli_fetch_row($result)) {
                $visit = new Visit();
                $visit->setId($_id);
                $visit->setLocal($_local);
                $visit->setResume($_resume);
                $visit->setDate($_date);
                $visit->setDone($_done);
            }
        }
        return $visit;
    }

    public static function update($visit) {
        $sql = "UPDATE visits SET local = '{$visit->getLocal()}', date = '{$visit->getDate()}', resume = '{$visit->getResume()}' WHERE id = '{$visit->getId()}'";
        Connection::execut($sql);
    }
   
    public static function delete($id) {
        $sql = "DELETE FROM visits WHERE id ='{$id}'";
        Connection::execut($sql);
    }

    public static function done($id) {
        $sql = "UPDATE visits SET done = '1' WHERE id ='{$id}'";
        Connection::execut($sql);
    }

}

?>