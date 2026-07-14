<?php
namespace Subod\FlowerShopManagementSystem\App\Utility;

use mysqli;
use Subod\FlowerShopManagementSystem\App\Config\DbConfig;

class Supplier{
    private mysqli $connection;

    public function __construct()
    {
        $this->connection=DbConfig::getConnection();
    }
    public function getAll()
    {
        $sql="SELECT * FROM supplier";
        $result=$this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
        
    }
}