
<?php

session_start();
require_once('safestrip.php');
require_once('config/sqlaccess.inc.php');
$search = safestrip($_POST['search']);
if (!empty($search)) {
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql_search_name = "SELECT * FROM paper_table WHERE paper_name like '%" . $search . "%'";
$sql_search_author = "SELECT * FROM paper_table WHERE author like '%" . $search . "%'";
$sql_search_title = "SELECT * FROM paper_table WHERE paper_title like '%" . $search . "%'";
$sql_search_year = "SELECT * FROM paper_table WHERE year like '%" . $search . "%'";

$result1 = $conn->query($sql_search_name);
$result2 = $conn->query($sql_search_author);
$result3 = $conn->query($sql_search_title);
$result4 = $conn->query($sql_search_year);
searchDB($result1);
searchDB($result2);
searchDB($result3);
searchDB($result4);
    if (mysqli_num_rows($result1) ==0) {
    if (mysqli_num_rows($result2) ==0) {
    if (mysqli_num_rows($result3) ==0) {
    if (mysqli_num_rows($result4) ==0) {
                echo "<h1>No result!!</h1>";
                }
                }
                }
                }

$conn->close();
}


function searchDB($results){
if (mysqli_num_rows($results) > 0) {
while ($row = mysqli_fetch_assoc($results)) {
$rating_level = $row["rating"];
$usern = $row["username"];
$paper_name = $row["paper_name"];
$paper_id = $row["paper_id"];
$author = $row["author"];
$paper_title = $row["paper_title"];
$year = $row["year"];
$class_experience_level = $row["class_experience_level"];
$paper_upload_date = $row["paper_upload_date"];
echo "<h1>$paper_title</h1>";
echo "<p><font size='5'><a href='openfile.php?p_id=$paper_id'>$paper_name</a></font></p>";
echo "<font size='2' color='#D8D8D8'>$paper_upload_date - $usern</font><br>";
echo "Authors: $author </br>";
echo "Year published: $year<br>";
echo "Class / experience level : $class_experience_level <br>";
echo "Rating: ";
rating_start($rating_level);
echo "<br><br><br>";
echo "<hr>";
}
}

}

function rating_start($ratingstart) {
for ($x = 0;
$x < $ratingstart;
$x++) {
echo "<img src='images/rating.png' height='15'>";
}
}
?>








