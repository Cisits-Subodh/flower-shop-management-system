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

        $sql = "INSERT INTO staff(name, gender, dob) VALUES('$name', '$gender', '$dob')";

        $this->connection->query($sql);

        header("location:/staff");
    }

    function update()
    {

    }

    function delete()
    {

    }
}