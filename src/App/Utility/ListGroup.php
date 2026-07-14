<?php
namespace Subod\FlowerShopManagementSystem\App\Utility;

use Subod\FlowerShopManagementSystem\App\Config\DbConfig;
use mysqli;

class Listgroup{
    private mysqli $connection;

    public function __construct()
    {
        $this->connection =DbConfig::getConnection();

    }
    public function getAll()
    {
        $sql="SELECT * FROM list";
        $result=$this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

}
