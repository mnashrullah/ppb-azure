<!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Example Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <button class="btn btn-primary"></button>
   
</body>
</html>

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