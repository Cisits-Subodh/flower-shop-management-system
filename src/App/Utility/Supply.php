<?php
namespace Subod\FlowerShopManagementSystem\App\Utility;

use mysqli;
use Subod\FlowerShopManagementSystem\App\Config\DbConfig;

class Supply{
    private mysqli $connection;

    public function __construct()
    {
        $this->connection=DbConfig::getConnection();
    }
    public function getAll()
    {
        $sql="SELECT * FROM supply";
        $result=$this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
        
    }
}