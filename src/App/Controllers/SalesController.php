<?php

namespace Subod\FlowerShopManagementSystem\App\Controllers;

use mysqli;
use Subod\FlowerShopManagementSystem\App\Config\DbConfig;


class SalesController
{
    private mysqli $connection;
    function __construct()
    {
        $this->connection = DbConfig::getConnection();
    }
    function get(int $id)
    {
        $sql = "SELECT * FROM sales WHERE  id='$id'";
        $result = $this->connection->query($sql);
        return $result->fetch_assoc();
    }
    function getAll()
    {
        $sql = "SELECT * FROM sales";
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    function create()
    {
        $this->connection->begin_transaction();

        $customer_id = $_POST['customer'];
        $date = $_POST['date'];

        $sql = "INSERT INTO sales(customer_id,date) VALUES('$customer_id','$date')";

        $this->connection->query($sql);

        $sales_id = $this->connection->insert_id;

        $n = count($_POST['particulars']);
        for ($i = 0; $i < $n; $i++) {
            $product_id = $_POST['particulars'][$i];
            $quantity = $_POST['quantity'][$i];
            $rate = $_POST['rate'][$i];
            $gst = $_POST['gst'][$i];
            $amount = $_POST['amount'][$i];

            $sql = "INSERT INTO sales_item(sales_id,product_id,quantity,rate,gst,amount) VALUES('$sales_id','$product_id','$quantity','$rate','$gst','$amount')";

            $this->connection->query($sql);
        }
        
        $this->connection->commit();
        header("location:/sales");
        exit;
    }
}
