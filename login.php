<?php

session_start();
// Store Session Data
require_once('safestrip.php');
require_once('config/sqlaccess.inc.php');
$account = safestrip($_POST['account']);
$pwd = safestrip($_POST['pwd']);
$now_url=$_SESSION["current_url"];

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
        if (mysqli_num_rows($result1) == 1) {
            $_SESSION["accountid"] = $account;
            echo "Welcome $account !   ";
            echo "<a href='logout.php'>Log out</a>";
            include("loginnavigation.html");
//
        } else {
            echo "The password is wrong.   ";
            echo "<a href='$now_url'>Retry</a>";
        }
    } else {
        echo "The account do not exists.   ";
        echo "<a href='$now_url'>Retry</a>";
    }
    $conn->close();
}
 else {
    echo "The account or passowrd can not be empty   ";
    echo "<a href='$now_url'>Retry</a>";
}
?>




