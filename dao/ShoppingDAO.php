<?php

include_once '../db/Conn.php';
include_once '../model/Shopping.php';

class ShoppingDAO {

    public static function store($shopping){
        $sql = "INSERT INTO shoppings (item, shop, local, deliveryDate, done) VALUES ('{$shopping->getItem()}','{$shopping->getShop()}','{$shopping->getLocal()}','{$shopping->getDeliveryDate()}', '{$shopping->getDone()}')";
  
       Connection::execut($sql);
    }

    public static function index() {
        $sql = "SELECT id, item, shop, local, deliveryDate, done FROM shoppings";
        $result = Connection::consult($sql);
        $listShoppings = new ArrayObject();

        if($result != NULL) {
            while(list($_id, $_item, $_shop, $_local, $_deliveryDate, $_done) = mysqli_fetch_row($result)) {
                $shopping = new Shopping($_id, $_item, $_shop, $_local, $_deliveryDate, $_done);
                $shopping->setId($_id);
                $shopping->setItem($_item);
                $shopping->setShop($_shop);
                $shopping->setLocal($_local);
                $shopping->setDeliveryDate($_deliveryDate);
                $shopping->setDone($_done);
                $listShoppings->append($shopping);
            }
        }
        return $listShoppings;
    }

    public static function show($id) {
        $sql = "SELECT id, item, shop, local, deliveryDate, done FROM shoppings WHERE id= ".$id;
        $result = Connection::consult($sql);
        $shopping = null;
        if ($result != null) {
            while(list($_id, $_item, $_shop, $_local, $_deliveryDate, $_done) = mysqli_fetch_row($result)) {
                $shopping = new Shopping($_id, $_item, $_shop, $_local, $_deliveryDate, $_done);
                $shopping->setId($_id);
                $shopping->setItem($_item);
                $shopping->setShop($_shop);
                $shopping->setLocal($_local);
                $shopping->setDeliveryDate($_deliveryDate);
                $shopping->setDone($_done);
            }
        }
        return $shopping;
    }

    public static function update($shopping) {
        $sql = "UPDATE shoppings SET item = '{$shopping->getItem()}', shop = '{$shopping->getShop()}', local = '{$shopping->getLocal()}', deliveryDate = '{$shopping->getDeliveryDate()}' WHERE id = '{$shopping->getId()}'";
        Connection::execut($sql);
    }
   
    public static function delete($id) {
        $sql = "DELETE FROM shoppings WHERE id ='{$id}'";
        Connection::execut($sql);
    }

    public static function done($id) {
        $sql = "UPDATE shoppings SET done = '1' WHERE id ='{$id}'";
        Connection::execut($sql);
    }

}

?>