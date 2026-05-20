<?php

namespace Subod\FlowerShopManagementSystem\App\Utility;

use mysqli;
use Subod\FlowerShopManagementSystem\App\Config\DbConfig;

class Gstlist
{
    private mysqli $connection;
    public function __construct()
    {
        $this->connection = DbConfig::getConnection();
    }
    public function getAllNames()
    {
        $sql = "SELECT gst FROM product";
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
