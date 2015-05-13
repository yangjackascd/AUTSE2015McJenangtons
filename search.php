<?php
require_once('safestrip.php');
require_once('config/sqlaccess.inc.php');
$search = safestrip($_POST['search']);


if (!empty($search)) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql_search = "SELECT * FROM paper_table WHERE paper_name like '%" . $search . "%'";
    $result = $conn->query($sql_search);
    if (mysqli_num_rows($result)>0) {
           while ($row = mysqli_fetch_assoc($result)) {
                $paper = $row["paper_name"];
                echo "<br><br><a href='#'>$paper</a><hr>";
            }
        } 
    $conn->close();
}
?>




