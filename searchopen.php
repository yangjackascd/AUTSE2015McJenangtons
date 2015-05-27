<?php

function getpaper($paperid) {
    require_once('safestrip.php');
    require_once('config/sqlaccess.inc.php');

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql_search = "SELECT * FROM paper_table WHERE paper_id = $paperid ";
    $result = $conn->query($sql_search);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $rating_level = $row["rating"];
            $usern = $row["username"];
            $paper_journal = $row['paper_journal'];
            $paper_name = $row["paper_name"];
            $author = $row["author"];
            $paper_title = $row["paper_title"];
            $year = $row["year"];
            $class_experience_level = $row["class_experience_level"];
            $paper_upload_date = $row["paper_upload_date"];
            echo "<h1>$paper_title</h1>";
            echo "<p><font size='5'>$paper_name</font></p>";
            echo "<font size='2' color='#D8D8D8'>$paper_upload_date - $usern</font><br>";
            echo "Authors: $author </br>";
            echo "Journal: $paper_journal</br>";
            echo "Year published: $year<br>";
            echo "Class / experience level : $class_experience_level<br>";
            echo "Rating: ";
            rating_start($rating_level);
            echo "<br><br><br>";
            read($paperid);
            echo "<br>";
            echo "<hr>";
        }
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

function rating_start($ratingstart) {
    for ($x = 0; $x < $ratingstart; $x++) {
         echo "<img src='images/rating.png' height='15'>";
    }
}
?>