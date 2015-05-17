<?php
session_start();
// Store Session Data

require_once('safestrip.php');
require_once('config/sqlaccess.inc.php');
$account =safestrip( $_POST['account']);
$pwd = safestrip($_POST['pwd']);



if (!empty($account) && !empty($pwd)) {
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql_check_name = "SELECT * FROM user_table WHERE user_account = '$account'";
    $sql_check_password = "SELECT * FROM user_table WHERE user_password = '$pwd'";
    $result = $conn->query($sql_check_name);
    $result1 = $conn->query($sql_check_password);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['login_user']= $account;  // Initializing Session with value of PHP Variable
         echo $_SESSION['login_user'];
        if (mysqli_num_rows($result1) == 1) {
            echo "Welcome $account !";
        } else {
            echo "the password is wrong.";
        }
    } else {
        echo "the account do not exists";
    }
    $conn->close();
} 
?>




