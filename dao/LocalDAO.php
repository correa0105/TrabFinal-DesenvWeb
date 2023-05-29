<?php

include_once '../db/Conn.php';
include_once '../model/Local.php';

class LocalDAO {

    public static function store($local){
        $sql = "INSERT INTO locals (local) VALUES ('{$local->getLocal()}')";
  
       Connection::execut($sql);
    }

    public static function index() {
        $sql = "SELECT id, local FROM locals";
        $result = Connection::consult($sql);
        $listLocals = new ArrayObject();

        if($result != NULL) {
            while(list($_id, $_local) = mysqli_fetch_row($result)) {
                $local = new Local($_id, $_local);
                $local->setId($_id);
                $local->setLocal($_local);
                $listLocals->append($local);
            }
        }
        return $listLocals;
    }
   
    public static function delete($id) {
        $sql = "DELETE FROM locals WHERE id ='{$id}'";
        Connection::execut($sql);
    }
    
}

?>