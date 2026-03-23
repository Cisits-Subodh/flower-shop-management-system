<?php

namespace Config;

class Configuration
{
    static function getDbConfig()
    {
        return parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "\\env.ini");
    }
}
