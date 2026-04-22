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
        $invoiceno = $_POST['invoice'];
        $partyacname = $_POST['partyacname'];
        $partyname = $_POST['partyname'];
        $date = $_POST['date'];

        $sql = " INSERT INTO purchase(invoice,partyacname,partname,date)VALUES('$invoiceno','$partyacname','$partyname','$date')";
    }
}
