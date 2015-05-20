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
        <div class = "main">
            <div class ="main">  
                <div class= "logo"><a href="index.php"><img src="images/autlogo.png" alt="AUT"/></a></div>
                <p id="center"style="width: 600px;margin-top: 30px;">

                    <span style="font-family:Arial;font-size:18px;font-style:normal;font-weight:normal;text-decoration:none;text-transform:none;font-variant:small-caps;line-height:30px;color:000000;"> SERLER is a repository of empirical studies built for researchers and practitioners. The intention of the system is to help the users gain knowledge and make decisions for their own projects.

                        The general public can view the web based system and we hope that students from within AUT will benefit from the software engineering product our team will build. Publicly we will allow users to search the repository for highly rated studies that have been passed through an acceptance criteria to ensure quality research is available for the users. 

                        The project was created by product owner, Jim Buchan and will be designed and implemented by The McJenangtons. This project is a part of 407707 Software Engineering, and is to be completed by week 12 of semester 1, 2015.
                    </span>

                    <br><br><br><br><br><br><a href="index.php">Return to home page</a></p>

                                            </div>

                                            </div> 
                                            </body>
                                            </html>
