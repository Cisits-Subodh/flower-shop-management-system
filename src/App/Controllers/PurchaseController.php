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
        $supplier_invoice_no = $_POST['supplier_invoice_no'];
        $party_name = $_POST['party_name'];
        $date=$_POST['date'];
        $particulars = $_POST['particulars'];
        $quantity = $_POST['quantity'];
        $rate = $_POST['rate'];
        $gst = $_POST['gst'];
        $amount = $_POST['amount'];

        $sql = " INSERT INTO purchase(supplier_invoice_no,particulars,party_name,quantity,rate,gst,amount,date)VALUES('$supplier_invoice_no','$party_name','$particulars','$date','$quantity','$rate','$gst','$amount')";

        $this->connection->query($sql);
        
        header("location:/purchase");
    }
}
