<?php

function safestrip($string) {
    $string = trim($string);
    $string = strip_tags($string);
    $string = mysql_real_escape_string($string);
    $string = str_replace("_","",$string);
    return $string;
}
?>




