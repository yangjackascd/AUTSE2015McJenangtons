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
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $usern = $row["username"];
            $paper_name = $row["paper_name"];
            $paper_id = $row["paper_id"];
            $author = $row["author"];
            $paper_title = $row["paper_title"];
            $year = $row["year"];
            $class_experience_level = $row["class_experience_level"];
            $paper_upload_date = $row["paper_upload_date"];
            echo "<h1>$paper_title</h1>";
            echo "<p>$paper_name<p>";
            echo "<font size='2' color='#D8D8D8'>$paper_upload_date - $usern</font><br>";
            echo "Year : $year<br>";
            echo "Class / experience level : $class_experience_level<br><br><br>";       
            read($paper_id);
            echo "<hr>";
        }
    } else {
        echo "<p><h1>Do not have such result!</h1></p>";
    }
    $conn->close();
}

function read($id) {
    $filename = "files/$id";
    if (file_exists($filename)) {
        header("Content-type:text/html;charset=utf-8");
        $myfile = fopen("files/$id", "r") or die("Do not have file!");
// Output one line until end-of-file
        while (!feof($myfile)) {
            echo fgets($myfile) . "<br>";
           
        }
        fclose($myfile);
    }
}

?>




