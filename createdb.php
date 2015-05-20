<?php
require_once('config/sqlaccess.inc.php');

 $conn_create_database = new mysqli($servername, $username, $password);
    $sql_create_db="create database if not exists SERLER_DB";
    mysqli_query($conn_create_database,$sql_create_db);
 mysqli_close($conn_create_database);

 
  $conn = new mysqli($servername, $username, $password,'SERLER_DB');
    
   // $sql_create_data="INSERT INTO user_data (id, username, email)VALUES ('$id','$name','$email')";
     $sql_create_user_table = "CREATE TABLE IF NOT EXISTS user_data (id varchar(20),username varchar(30),email varchar(30))";
    mysqli_query($conn,$sql_create_user_table);
$conn->close();
?>
