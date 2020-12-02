<?php
// PHP Data Objects(PDO) Sample Code:
    $con=mysqli_init(); 
    mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
    mysqli_real_connect($con, "serv-mysql-prueba.mysql.database.azure.com", "prueba@serv-mysql-prueba", {your_password}, {your_database}, 3306);

?>
