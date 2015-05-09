<?php

function safestrip($string) {
    $string = strip_tags($string);
    $string = mysql_real_escape_string($string);
    return $string;
}

require_once('config/sqlaccess.inc.php');
$search = $_POST['search'];


if (isset($search)) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql_search = "SELECT * FROM paper_table WHERE paper_name like '%" . $search . "%'";
    
    $result = $conn->query($sql_search);
    if (mysqli_num_rows($result)>0) {
           while ($row = mysqli_fetch_assoc($result)) {
                $paper = $row["paper_name"];
                echo $paper."<br><br>";
            }
        } 
    $conn->close();
} 
?>




