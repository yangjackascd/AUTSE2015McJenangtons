<?php
require_once('sqlaccess.inc.php');
$id =($_POST['iD']);
$name = ($_POST['nAme']);
$email= ($_POST['eMail']);  
 $conn = new mysqli($servername, $username, $password,'lab8');
    $sql_create_table="CREATE TABLE IF NOT EXISTS user_data (id varchar(20),username varchar(30),email varchar(30))";
    $sql_create_data="INSERT INTO user_data (id, username, email)VALUES ('$id','$name','$email')";
    mysqli_query($conn,$sql_create_table);
    mysqli_query($conn,$sql_create_data);
 mysqli_close($conn);
 echo "Added!";
?>




