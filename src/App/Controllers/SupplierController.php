<?php

namespace Subod\FlowerShopManagementSystem\App\Controllers;

use mysqli;
use Subod\FlowerShopManagementSystem\App\Config\DbConfig;

class SupplierController
{
    private mysqli $connection;
    

    function __construct()
    {
        $this->connection=DbConfig::getConnection();
    }
    function get() {

    }

    function getAll(){ 

        $sql="SELECT * FROM supplier";
        $result =$this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);

    }
    function create()
  {
    $business_name= $_POST['business_name'];
    $supplier_name=$_POST['suppler_name'];
    $mobile_no=$_POST['mobile_no'];
    $email_id=$_POST['email_id'];
    $office_address=$_POST['office_address'];
    $gst=$_POST['gst'];
    $payment_terms=$_POST['payment_terms'];

    $sql="INSERT INTO supplier(business_name,supplier_name,mobile_no,email_id,office_address,gst,payment_terms,)VALUE('$business_name',$supplier_name','$mobile_no','$email_id','$office_address','$gst','$payment_terms')";

     
    $this->connection->query($sql);

    header("location:/supplier");   

    }
}