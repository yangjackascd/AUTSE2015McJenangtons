<?php
require_once('config/sqlaccess.inc.php');
$conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql_create_user_table = "";
    $sql_create_paper_table = "";

$conn->close();
?>
