<?php

namespace Subod\FlowerShopManagementSystem\App\Controllers;
use mysqli;

use Subod\FlowerShopManagementSystem\App\Config\DbConfig;

class CustomerController
{
   private mysqli $connection;
   function __construct()
   {
      $this->connection = DbConfig::getConnection();
   }
   function getAll()
   {
      $sql = "SELECT * FROM customer";
      $result = $this->connection->query("$sql");
      return $result->fetch_all(MYSQLI_ASSOC);
   }
   function create()
   {
      $name = $_POST['name'];
      $mobile_no = $_POST['mobile_no'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $district = $_POST['district'];
      $state = $_POST['state'];
      $pincode = $_POST['pincode'];

      $sql = "INSERT INTO customer(name,email,mobile,address,city,district,state,pincode)VALUES('$name','$mobile_no','$email','$address','$city','$district','$state','$pincode')";


      $this->connection->query($sql);
      header("location:/customer");
   }
}
