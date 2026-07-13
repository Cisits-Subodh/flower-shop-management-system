<?php

namespace Subod\FlowerShopManagementSystem\App\Controllers;

use Subod\FlowerShopManagementSystem\App\Config\DbConfig;
use mysqli;

class PurchaseController
{
    private mysqli $connection;

    function __construct()
    {
        $this->connection = DbConfig::getConnection();
    }

    function get(int $id)
    {
        $sql = "SELECT * FROM purchase WHERE id='$id'";
        $result = $this->connection->query($sql);
        return $result->fetch_assoc();
    }

    function getAll()
    {
        $sql = " SELECT * FROM purchase";
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    function create()
    {
        $this->connection->begin_transaction();
        $supplier_invoice_no = $_POST['supplier_invoice_no'];
        $supplier_id = $_POST['supplier'];
        $date = $_POST['date']??'';

        $sql = "INSERT INTO purchase(supplier_invoice_no,supplier_id,date) VALUES('$supplier_invoice_no','$supplier_id', '$date')";

        $this->connection->query($sql);

        $purchase_id = $this->connection->insert_id;

        $n = count($_POST['particulars']);

        for ($i = 0; $i < $n; $i++) {
            $product_id = $_POST['particulars'][$i];
            $quantity = $_POST['quantity'][$i];
            $rate = $_POST['rate'][$i];
            $gst = $_POST['gst'][$i];
            $amount = $_POST['amount'][$i];

            $sql = "INSERT INTO purchase_item(purchase_id,product_id,quantity,rate,gst,amount) VALUES('$purchase_id','$product_id','$quantity','$rate','$gst','$amount')";

            $this->connection->query($sql);
        }

        $this->connection->commit();

        header("location:/purchase");
        exit;
    }
}
