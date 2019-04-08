<?php
    $serverName = "ppb-azure.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "ppbdatabase-azure", // update me
        "Uid" => "nash", // update me
        "PWD" => "123123123aa**" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT * from mhs";
    // $tsql= "SELECT TOP 20 pc.Name as CategoryName, p.name as ProductName
    //      FROM [SalesLT].[ProductCategory] pc
    //      JOIN [SalesLT].[Product] p
    //      ON pc.productcategoryid = p.productcategoryid";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Data mahasiswa" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['nim'] . " " . $row['nama'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>