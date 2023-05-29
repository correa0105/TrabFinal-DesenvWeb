<?php
include_once'../model/Shopping.php';
include_once'../dao/ShoppingDAO.php';

    if(isset($_REQUEST['store'])){   
        $item = $_POST['item'];
        $shop = $_POST['shop'];
        $local = $_POST['local'];
        $deliveryDate = $_POST['deliveryDate'];

        $shopping = new Shopping();
        $shopping->setItem($item);
        $shopping->setShop($shop);
        $shopping->setLocal($local);
        $shopping->setDeliveryDate($deliveryDate);
        $shopping->setDone(0);

        ShoppingDAO::store($shopping);

        header("Location:../view/shopping.php");
    }

    if(isset($_REQUEST['edit'])){   
        $id = $_REQUEST['id'];
        $item = $_POST['item'];
        $shop = $_POST['shop'];
        $local = $_POST['local'];
        $deliveryDate = $_POST['deliveryDate'];

        $shopping = new Shopping();
        $shopping->setItem($item);
        $shopping->setShop($shop);
        $shopping->setLocal($local);
        $shopping->setDeliveryDate($deliveryDate);
        $shopping->setId($id);

        ShoppingDAO::update($shopping);

        header("Location:../view/shopping.php");
    }

    if(isset($_REQUEST['delete'])){   
        $id = $_REQUEST['id'];
        
        $shopping = new Shopping();

        ShoppingDAO::delete($id);

        header("Location: ../view/shopping.php");
    }

    if(isset($_REQUEST['done'])){   
        $id = $_REQUEST['id'];
        
        ShoppingDAO::done($id);

        header("Location: ../view/shopping.php");
    }
    
?>
