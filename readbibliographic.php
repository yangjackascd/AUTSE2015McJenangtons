<?php
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
