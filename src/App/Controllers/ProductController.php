<?php

namespace Subod\FlowerShopManagementSystem\App\Controllers;

use mysqli;
use Subod\FlowerShopManagementSystem\App\Config\DbConfig;

class ProductController
{
    private mysqli $connection;

    function __construct()
    {
        $this->connection = DbConfig::getConnection();
    }

    function get(int $id)
    {
        $sql = "SELECT * FROM product WHERE id='$id'";
        $result = $this->connection->query($sql);
        return $result->fetch_assoc();
    }

    function getAll()
    {
        $sql = "SELECT * FROM product";
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    function create()
    {
        $name  = $_POST['name'];
        $listgroup = $_POST['list'];
        $rate = $_POST['rate'];
        $gst = $_POST['gst'];
        $supplier = $_POST['supplier'];
        $unit  = $_POST['unit'];



        $sql = "INSERT INTO  product(name,listgroup,rate,gst,supplier,unit)VALUES('$name','$listgroup','$rate','$gst','$supplier','$unit')";

        $this->connection->query($sql);

        header("location:/");
 }



    function update() {}

    function delete() {}

    function count()
    {
        $sql = "SELECT COUNT(id) FROM product";
        $result = $this->connection->query($sql);
        $row = $result->fetch_row();
        return $row[0];
    }
}

