<?php

namespace Subod\FlowerShopManagementSystem\App\Controllers;

use mysqli;
use Subod\FlowerShopManagementSystem\App\Config\DbConfig;

class OrderController
{
    private mysqli $connection;
    function __construct()
    {
        $this->connection = DbConfig::getConnection();
    }
    function get(int $id)
    {
        $sql = "SELECT * FROM ordercustomer WHERE id='$id'";
        $result = $this->connection->query($sql);
        return $result->fetch_assoc();
    }
    function getAll()
    {
        $sql = "SELECT * FROM orderitems";
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    function create()
    {
        $this->connection->begin_transaction();

        $productservice= $_POST['productservice'];
        $name = $_POST['name'];
        $mobile = $_POST['mobile']; 
        $date = $_POST['date'] ?? '';
        $todate = $_POST['date'] ?? '';


        $sql = " INSERT INTO  ordercustomer(productservice,name,mobile,date,todate) VALUES('$productservice','$name','$mobile','$date','$todate')";

        $this->connection->query($sql);

        $ordercustomer_id= $this->connection->insert_id;

        $n = count($_POST['particulars']);

        for ($i = 0; $i < $n; $i++) {

            $product_id = $_POST['particulars'][$i];
            $quantity = $_POST['quantity'][$i];
            $rate = $_POST['rate'][$i];
            $gst = $_POST['gst'][$i];
            $amount = $_POST['amount'][$i];
            $total_amount = $_POST['total_amount'][$i];

            $sql = "INSERT INTO orderitems(ordercustomer_id,product_id,quantity,rate,gst,amount,total_amount) VALUES('$ordercustomer_id','$product_id','$quantity','$rate','$gst','$amount','$total_amount')";

            $this->connection->query($sql);
        }
        $this->connection->commit();
        header("location:/order");
        exit;
    }
}
