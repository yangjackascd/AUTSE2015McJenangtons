<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script type="text/javascript" src="xhr.js"></script>
        <script type="text/javascript" src="javascript.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>SERLER</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <?php
   
    ?>
    <body>
        <div class = "login">
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
        <div class = "main">
            <div class ="header">  
                <div class= "logo"><a href="index.php"><img src="images/autlogo.png" alt="AUT"/></a></div>
            </div>
            <div id="unload_notice">
            <form class="register">
                <table>
                    <tr>
                        <th>Paper Title</th>
                        <th><input type="text" id="paper_title" style="width: 310px"></input></th>
                      
                    </tr>
                    <tr>
                        <th>Paper Name: </th>
                        <th><input type="text" id="paper_name" style="width: 310px"></input></th>
                        
                    </tr>
                    <tr>
                        <th>Author: </th>
                        <th><input type="text" id="paper_author" style="width: 310px"></input></th>
                        
                    </tr>
                    <tr>
                        <th>Date(year): </th>
                        <th><input type="text" id="paper_year" style="width: 310px"></input></th>
                        
                    </tr> 
                    <tr>
                    </tr> 
                    <th></th>
                    <th><textarea id= "paper_context" cols="50" rows="20"></textarea></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th><input type="button" onclick="add('adddatatoDB.php','paper_title','paper_name','paper_author','paper_year','paper_context','unload_notice')" value="Submit"></input></th>
                    </tr>
                </table>
            </form>
        </div> 
    </body>
</html>
