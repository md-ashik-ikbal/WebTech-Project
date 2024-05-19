<?php

    function DbConnection()
    {
        $serverName="localhost";
        $userName="root";
        $pass="";
        $dbName="MVC_FRAMEWORK";
        $connection = new mysqli($serverName, $userName, $pass, $dbName);
        return $connection;
    }

?>