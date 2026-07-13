<?php

namespace Subod\FlowerShopManagementSystem\App\Controllers;

use mysqli;
use Subod\FlowerShopManagementSystem\App\Config\DbConfig;

class SupplierController
{
    private mysqli $connection;


    function __construct()
    {
        $this->connection = DbConfig::getConnection();
    }
    function get(int $id)
    {
        $sql = "SELECT * FROM supplier WHERE id='$id'";
        $result = $this->connection->query($sql);
        return $result->fetch_assoc();
    }

    function getAll()
    {

        $sql = "SELECT * FROM supplier";
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    function create()
    {

        $supplier_name = $_POST['supplier_name'];
        $mobile_no = $_POST['mobile_no'];
        $email_id = $_POST['email_id'];
        $address = $_POST['address'];
        $gst = $_POST['gst'];
        $bank_ac = $_POST['bank_ac'];
        $pincode = $_POST['pincode'];

        $sql = "INSERT INTO supplier(supplier_name,mobile_no,email_id,address,gst,bank_ac,pincode) VALUE('$supplier_name','$mobile_no','$email_id','$address','$gst','$bank_ac','$pincode')";


        $this->connection->query($sql);

        header("location:/supplier");
        exit;
    }
    function count()
    {
        $sql = "SELECT *FROM supplier";
        $result = $this->connection->query($sql);
        $row = $result->fetch_row();
        return $row[0];
    }
}
