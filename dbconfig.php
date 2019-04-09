<?php
$serverName = "ppb-azure.database.windows.net"; // update me
$connectionOptions = array(
    "Database" => "ppbdatabase-azure", // update me
    "Uid" => "nash", // update me
    "PWD" => "123123123aa**" // update me
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
?>