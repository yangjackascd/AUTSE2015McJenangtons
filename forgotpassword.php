<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script type="text/javascript" src="xhr.js"></script>
        <script type="text/javascript" src="javascript.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>SERLER</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
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
        <div class="main">
            <div class= "logo"><a href="index.php"><img src="images/autlogo.png" alt="AUT"/></a></div>
            <div class="register">
                <form>
                    <table>
                        <tr>
                            <td>Please enter your Email address:</td>
                            <td><input type ="text" name="sendemail" style="width: 180px;"></td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td><input type = "button" value="Submit"></td>
                        </tr>

                    </table>
                </form>
            </div>
        </div>


    </body>
</html>
