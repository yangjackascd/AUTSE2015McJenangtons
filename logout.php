<?php
session_start(); // start the session
session_unset(); // unset all session variables
session_destroy(); // destroy all data associated with the session
$Get_url = basename($_SERVER['PHP_SELF']);
header("location:index.php");// redirect to number.php

?> 