<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databse = "shareem";

    // Databse Connection -
    $connection = mysqli_connect($servername, $username, $password, $databse);

    if($connection){
        echo "Connection is sucessfull <br>";
    }else{
        die("Connection Failed" . mysqli_connect_error());
    }

    // Databse Creation -

    $sql = "CREATE DATABASE shareem";
    $result = mysqli_query($connection, $sql);

    if($result){
        echo "Database Creation Succcessfull <br>";
    }else{
        echo "There is error in creation" .mysqli_error($connection);
    }

    // Table in Database :

    $sql = "CREATE TABLE `jobs` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `role` VARCHAR(11) NOT NULL , `doj` DATETIME NOT NULL , PRIMARY KEY (`sno`))";

    $result = mysqli_query($connection, $sql);

    if($result){
        echo "Table Creation Succcessfull <br>";
    }else{
        echo "There is error in creation" .mysqli_error($connection);
    }
    
    // Filling Records In DB -

    $sql = "INSERT INTO `jobs` (`sno`, `name`, `role`, `doj`) VALUES (NULL, 'Shareem', 'FDev', '2023-11-17 11:49:00.000000')";

    $result = mysqli_query($connection, $sql);

    if($result){
        echo "Record Creation Succcessfull <br>";
    }else{
        echo "There is error in creation" .mysqli_error($connection);
    }
?>