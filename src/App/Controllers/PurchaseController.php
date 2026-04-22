<?php
namespace Subod\FlowerShopManagementSystem\App\Controllers;
use Subod\FlowerShopManagementSystem\App\Config\DbConfig;

class purchaseController
{
    private mysqli $connection;
    function __construct()
    {
        $this->connection=DbConfig::getConnection();
    }
    function get(){
    $sql="SELECT * FROM purchase WHERE id='$id';
    $result=$this->connection->query($sql);
    return $result->fetch_assoc();
    }
    function getAll()
    {   
    $sql " SELECT * FROM purchase";
    $result=$this->connection->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
    }
    function create()
    {
    $invoiceno=$_POSt['invoice'];
    $partyacname=$_POST['partyacname'];
    $partyname=$_POST['partyname'];
    $date=$_POST['date'];

    $sql= " INSERT INTO purchase(invoice,partyacname,partname,date)VALUES('$invoice','$partyacname','$partyname','date')
    

    }
}