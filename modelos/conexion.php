<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $con=mysqli_init(); 
    mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
    mysqli_real_connect($con, "serv-mysql-prueba.mysql.database.azure.com", "prueba@serv-mysql-prueba", {your_password}, {your_database}, 3306);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "SISventasServer", "pwd" => "{your_password_here}", "Database" => "Inventario", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:sisventasdbserver.database.windows.net,1433";
con=mysqli_init(); 
    mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
    mysqli_real_connect($con, "serv-mysql-prueba.mysql.database.azure.com", "prueba@serv-mysql-prueba", {your_password}, {your_database}, 3306);
?>
