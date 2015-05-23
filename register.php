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
             <div class ="menu">
                    <nav>
                        <ul>
                            <li><a href="about.php">About Serler</a></li>
                            <li><a href="register.php">Become a User</a></li>
                            <li><a href="#">Resources</a></li>
                            <li><a href="#">Wiki</a></li>
                        </ul>
                    </nav>
                </div>
            <div class="register">
                <form>
                    <table>
                        <tr>
                            <td>Account:</td>
                            <td><input type ="text" id="sendaccount">
                            </td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type ="text" id="sendemail"></td>
                        </tr>
                        <tr>
                            <td>Reason:</td>
                            <td><textarea id= "myreson" cols="50" rows="5"></textarea></td>
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
