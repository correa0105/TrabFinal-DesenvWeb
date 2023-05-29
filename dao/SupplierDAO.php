<?php

include_once '../db/Conn.php';
include_once '../model/Supplier.php';

class SupplierDAO {

    public static function store($supplier){
        $sql = "INSERT INTO suppliers (supplier, cnpj) VALUES ('{$supplier->getSupplier()}', '{$supplier->getCnpj()}')";
  
       Connection::execut($sql);
    }

    public static function index() {
        $sql = "SELECT id, supplier, cnpj FROM suppliers";
        $result = Connection::consult($sql);
        $listSuppliers = new ArrayObject();

        if($result != NULL) {
            while(list($_id, $_supplier, $_cnpj) = mysqli_fetch_row($result)) {
                $supplier = new Supplier($_id, $_supplier, $_cnpj);
                $supplier->setId($_id);
                $supplier->setSupplier($_supplier);
                $supplier->setCnpj($_cnpj);
                $listSuppliers->append($supplier);
            }
        }
        return $listSuppliers;
    }
   
    public static function delete($id) {
        $sql = "DELETE FROM suppliers WHERE id ='{$id}'";
        Connection::execut($sql);
    }
    
}

?>