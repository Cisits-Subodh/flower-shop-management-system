<?php

use Config\Configuration;

include '../Config/Configuration.php';  //skip this

$db = Configuration::getDbConfig();

$connection = new mysqli($db['host'], $db['user']);
