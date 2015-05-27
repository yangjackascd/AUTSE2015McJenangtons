<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script type="text/javascript" src="xhr.js"></script>
        <script type="text/javascript" src="javascript.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="style.css" rel="stylesheet" type="text/css" />

        <title>SERLER</title>

    </head>

    <body>
        <div class = "login">
            <div style="float:left">
                <form>
                    <a href="index.php"><img src="images/autlogo.png" alt="AUT" height="40px" style="vertical-align:bottom;"/></a> <input type="text" id="searchbar" name= "search" placeholder="Search..">
                        <input type="button" name= "searching" class="searchbtn" onClick = "searchData('search.php', 'searchresult', search.value)" value="Search">
                            </form>
                            </div>
                            <div id="logintab"></div>
                            <div id="logintable"> 
                                <?php
                                session_start();
                                $_SESSION["current_url"] = basename($_SERVER['PHP_SELF']);
                                if (!empty($_SESSION["accountid"]) && isset($_SESSION["accountid"])) {
                                    $accountid = $_SESSION["accountid"];
                                    echo "Welcome $accountid !   ";
                                    echo "<a href='logout.php'>Log out</a>";
                                    include("loginnavigation.html");
                                } else {
                                    include("loginform.html");
                                }
                                ?>
                            </div>
                            </div>
                            <div class = "main" >
                                <div id="searchnewpage">

                                    <div id="searchresult">
                                        <?php
                                        include_once ('searchopen.php');                
                                        getpaper($_GET['p_id']);
                                        ?>
                                    </div>
                                </div>

                            </div>
                            </body>
                            </html>
