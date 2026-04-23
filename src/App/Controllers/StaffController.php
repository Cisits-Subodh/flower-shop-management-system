<?php
namespace Subod\FlowerShopManagementSystem\App\Controllers;

use mysqli;
use Subod\FlowerShopManagementSystem\App\Config\DbConfig;

class StaffController
{
    private mysqli $connection;

    function __construct()
    {
        $this->connection = DbConfig::getConnection();
    }

    function get()
    {

    }

    function getAll()
    {
        $sql = "SELECT * FROM staff";
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function create()
    {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $adress =$_POST['adress'];
        $district=$_POST['district'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $mobile=$_POST['mobile'];
        $pincode=$_POST['pincode'];

    

        $sql = "INSERT INTO staff(name, gender, dob,adress,district,city,mobile,state,pincode) VALUES('$name', '$gender','$dob','$district','$state','$adress','$mobile',$city','$pincode')";

        $this->connection->query($sql);

        header("location:/staff");
    }

    function update()
    {

    }

    function delete()
    {

    }

    function count()
    {
        $sql = "SELECT COUNT(staff_id) FROM staff";
        $result = $this->connection->query($sql);
        $row = $result->fetch_row();
        return $row[0];
    }
}