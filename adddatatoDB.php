<?php

session_start();

//adddatatoDB.php','paper_title','paper_name','paper_author','paper_year','paper_context','unload_notice
require_once('config/sqlaccess.inc.php');
require_once('safestrip.php');
$paper_title = safestrip($_POST['title']);
$paper_name = safestrip($_POST['name']);
$paper_author = safestrip($_POST['author']);
$paper_year = safestrip($_POST['year']);
$paper_context = safestrip($_POST['context']);
date_default_timezone_set('NZ');
$date = date('m/d/Y h:i:s a', time());
if (!empty($_SESSION['accountid'])) {
    $account = safestrip($_SESSION['accountid']);
}
if (!empty($account)) {
    if (!empty($paper_title)) {
        if (!empty($paper_name)) {
            if (!empty($paper_author)) {
                if (!empty($paper_year)) {
                    if (!empty($paper_context)) {
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        $sql_create_data = "INSERT INTO paper_table (paper_title, paper_name,author,year,paper_upload_date,username,status)VALUES('$paper_title','$paper_name','$paper_author','$paper_year','$date','$account',2)";
                        mysqli_query($conn, $sql_create_data);
                        $sql_search_id = "SELECT paper_id FROM paper_table WHERE paper_name = '$paper_name'";
                        $result_id = $conn->query($sql_search_id);
                        if (mysqli_num_rows($result_id) > 0) {
                            while ($row = mysqli_fetch_assoc($result_id)) {
                                $id = $row["paper_id"];
                                $content = $paper_context;
                                $fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/serler/files/$id", "wb");
                                fwrite($fp, $content);
                                fclose($fp);
                                mysqli_close($conn);
                            }
                        }
                        echo "Submited!  ";
                        echo "<a href='upload.php'>Upload another</a>";
                    } else {
                        echo "context box can not be emtry  ";
                    }
                } else {
                    echo "Year cant be Empty  ";
                    echo "<a href='upload.php'>Retry</a>";
                }
            } else {
                echo "Author cant be Empty  ";
                echo "<a href='upload.php'>Retry</a>";
            }
        } else {
            echo "Paper name can not be Empty  ";
            echo "<a href='upload.php'>Retry</a>";
        }
    } else {
        echo "Paper title can not be Empty  ";
        echo "<a href='upload.php'>Retry</a>";
    }
} else {
    echo "<font style='color:red;'>Can not upload paper without login</font>  ";
    echo "<a href='index.php'>Retry and login</a>";
}
?>




