<?php

namespace Subod\FlowerShopManagementSystem\App\Controllers;

use Subod\FlowerShopManagementSystem\App\Config\DbConfig;

class UserController
{
    function authenticate()
    {
        $user_id = $_POST['user_id'];
        $password = $_POST['password'];
        $connection = DbConfig::getConnection();
        $sql = "SELECT * FROM user WHERE user_id='$user_id' AND password=SHA1('$password')";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            session_start();
            $_SESSION['user_id'] = $user_id;
            $row = $result->fetch_assoc();
            if ($row['role'] == 'admin') {
                header("location:/user/admin-dashboard");
            } else {
                header("location:/user/staff-dashboard");
            }
        } else {
            echo "Failed";
        }
        $connection->close();
    }
}
