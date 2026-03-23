<?php

namespace Config;

class Configuration
{
    function getDbConfig()
    {
        return parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "\\env.ini");
    }
}

$config = new Configuration();
print_r($config->getDbConfig());
// $config->getDbConfig();