<?php

function safestrip($string) {
    $string = strip_tags($string);
    $string = mysql_real_escape_string($string);
    return $string;
}

require_once('config/sqlaccess.inc.php');
$account = $_POST['account'];
$pwd = $_POST['pwd'];
// $pass = md5($pass);

if (isset($account) && isset($pwd)) {
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
            echo "Welcome $account !";
        } else {
            echo "the password is wrong.";
        }
    } else {
        echo "the account do not exists";
    }
    $conn->close();
} else {
    echo "account and password cant be empty";
}
?>




