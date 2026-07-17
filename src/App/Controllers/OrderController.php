<?php

namespace Subod\FlowerShopManagementSystem\App\Controllers;

use mysqli;

use Subod\FlowerShopManagementSystem\App\Config;
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
        $sql = "SELECT * FROM customer_order WHERE id='$id'";
        $result = $this->connection->query($sql);
        return $result->fetch_assoc();
    }
    function getAll()
    {
        $sql = "SELECT * FROM customer_Order";
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    function create()
    {
        $this->connection->begin_transaction();

        // $customer_name = $_POST['name'];
        // $mobile = $_POST['mobile'];
        // $date = $_POST['date']??'';

        // $sql = "INSERT INTO  customer_order(name,mobile,date) VALUES('$customer_name','$mobile','$date')";

        // $this->connection->query($sql);
        $customer_order_id = $this->connection->insert_id;

        $n = count($_POST['']);

        for ($i = 0; $i < $n; $i++) {

            $product_id = $_POST['name'][$i];
            $quantity = $_POST['quantity'][$i];
            $rate = $_POST['rate'][$i];
            $gst = $_POST['gst'][$i];
            $amount = $_POST['amount'][$i];
            $total_amount = $_POST['total_amount'][$i];

            $sql = "INSERT INTO order_item( customer_order_id,product_id,quantity,rate,gst,amount,total_amount) VALUES('$customer_order_id','$product_id','$quantity','$rate','$gst','$amount','$total_amount')";

            $this->connection->query($sql);
        }
        $this->connection->commit();
        header("location:/order");
        exit;
    }
}
