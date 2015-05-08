<?php

function safestrip($string){
       $string = strip_tags($string);
       $string = mysql_real_escape_string($string);
       return $string;
}

function login($account_id,$account_password){
require_once('config/sqlaccess.inc.php');
$user = safestrip($account_id);
$pass = safestrip($account_password);
// $pass = md5($pass);
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql_check="SELECT * FROM user_table WHERE user_account = '$user' AND user_password = '$pass'";
$result = $conn->query($sql_check);
 if (mysqli_num_rows($result) ==1) {
    echo 'User name exists in the table.';

   } else {
  echo 'User name does not exist in the table.';
  }

$conn->close();
}
if(isset($_POST["account"])){
	$username = ($_POST["account"]); 

if(isset($_POST["password"])){
    $password = ($_POST["password"]);
}
login($username, $password);
}
?>




