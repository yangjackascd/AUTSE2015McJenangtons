<?php

session_start();
$pattern_year = "/^[0-9]+$/";
//adddatatoDB.php','paper_title','paper_name','paper_author','paper_year','paper_context','unload_notice
require_once('config/sqlaccess.inc.php');
require_once('safestrip.php');
$paper_title = safestrip($_POST['title']);
$paper_name = safestrip($_POST['name']);
$paper_author = safestrip($_POST['author']);
$paper_year = safestrip($_POST['year']);

$paper_journal = safestrip($_POST['journal']);
date_default_timezone_set('NZ');
$date = date('m/d/Y h:i:s a', time());
//rating
$rating_c = safestrip($_POST['ratingC']);
$rating_reason = safestrip($_POST['ratingReason']);
$rating_who = safestrip($_POST['ratingWho']);
$rating_cf = safestrip($_POST['ratingCf']);


if (!empty($_SESSION['accountid'])) {
    $account = safestrip($_SESSION['accountid']);
}

if (!empty($account)) {
    if (!empty($paper_journal)) {
        if (!empty($paper_title)) {
            if (!empty($paper_name)) {
                if (!empty($paper_author)) {
                    if (!empty($paper_year)) {
                        if (preg_match($pattern_year, $paper_year)) {
                            if (!empty($rating_c)) {
                                if (!empty($rating_cf)) {
                                    if (!empty($rating_reason)) {
                                        if (!empty($rating_who)) {
                                            $conn = new mysqli($servername, $username, $password, $dbname);
                                            $sql_create_rating = "INSERT INTO rating_paper_table (paper_title, paper_name,author,year,rating_date,username,paper_journal,ratingC,ratingCF,rating_name,rating_reason)VALUES('$paper_title','$paper_name','$paper_author','$paper_year','$date','$account','$paper_journal','$rating_c','$rating_cf','$rating_who','$rating_reason')";
                                            mysqli_query($conn, $sql_create_rating);
                                            //create txt file 
//                            $sql_search_id = "SELECT paper_id FROM paper_table WHERE paper_name = '$paper_name'";
//                            $result_id = $conn->query($sql_search_id);
//                            if (mysqli_num_rows($result_id) > 0) {
//                                while ($row = mysqli_fetch_assoc($result_id)) {
//                                    $id = $row["paper_id"];
//                                    $content = $paper_context;
//                                    $fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/serler/files/$id", "wb");
//                                    fwrite($fp, $content);
//                                    fclose($fp);
//                                    mysqli_close($conn);
//                                }
//                            }
                                            echo "Submited!  ";
                                            echo "<a href='upload.php'>Upload another</a>";
                                        } else {
                                            echo "Enter your name please!  ";
                                            echo "<a href='upload.php'>Retry</a>";
                                        }
                                    } else {
                                        echo "Rates reason cant be Empty!  ";
                                        echo "<a href='upload.php'>Retry</a>";
                                    }
                                } else {
                                    echo "please do the Confidence rates the paper!  ";
                                    echo "<a href='upload.php'>Retry</a>";
                                }
                            } else {
                                echo "please Credibility rates the paper!  ";
                                echo "<a href='upload.php'>Retry</a>";
                            }
                        } else {
                            echo "Paper Year is Number only!  ";
                            echo "<a href='upload.php'>Retry</a>";
                        }
                    } else {
                        echo "Year cant be Empty!  ";
                        echo "<a href='upload.php'>Retry</a>";
                    }
                } else {
                    echo "Author cant be Empty!  ";
                    echo "<a href='upload.php'>Retry</a>";
                }
            } else {
                echo "Paper name can not be Empty!  ";
                echo "<a href='upload.php'>Retry</a>";
            }
        } else {
            echo "Paper title can not be Empty!  ";
            echo "<a href='upload.php'>Retry</a>";
        }
    } else {
        echo "Paper journal can not be Empty!  ";
        echo "<a href='upload.php'>Retry</a>";
    }
} else {
    echo "<font style='color:red;'>Can not upload paper without login</font>  ";
    echo "<a href='index.php'>Retry and login</a>";
}
?>




