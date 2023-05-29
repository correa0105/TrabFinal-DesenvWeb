<?php
include_once'../model/Supplier.php';
include_once'../dao/SupplierDAO.php';

    if(isset($_REQUEST['store'])){   
        $supplierName = $_POST['supplier'];
        $cnpj = $_POST['cnpj'];

        $supplier = new Supplier();
        $supplier->setSupplier($supplierName);
        $supplier->setCnpj($cnpj);

        SupplierDAO::store($supplier);

        header("Location:../view/registerShop.php");
    }

    if(isset($_REQUEST['delete'])){   
        $id = $_REQUEST['id'];
        
        $supplier = new Supplier();

        SupplierDAO::delete($id);

        header("Location: ../view/registerShop.php");
    }
    
?>
