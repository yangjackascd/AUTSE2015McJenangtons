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
                            <th>Software development methodology: </th>
                            <th><select id="paper_title" style="width: 310px">
                                    <option value="ATDD">ATDD</option>
                                    <option value="Coupling Metrics">Coupling Metrics</option>
                                    <option value="DMS">DMS</option>
                                    <option value="OO Metrics">OO Metrics</option>
                                    <option value="PSP">PSP</option>
                                    <option value="Pair Programming">Pair Programming</option>
                                    <option value="RE">RE</option>
                                    <option value="Performance">Performance</option>
                                </select>
                            </th>

                        </tr>
                        <tr>
                            <th>Paper Name: </th>
                            <th><input type="text" id="paper_name" style="width: 310px" placeholder="enter paper name"></input></th>

                        </tr>
                        <tr>
                            <th>Author: </th>
                            <th><input type="text" id="paper_author" style="width: 310px" placeholder="enter authors"></input></th>

                        </tr>
                        <tr>
                            <th>Journal: </th>
                            <th><input type="text" id="paper_journal" style="width: 310px" placeholder="enter journal"></input></th>

                        </tr>                 
                        <tr>
                            <th>Date(year): </th>
                            <th><input type="text" id="paper_year" style="width: 310px" placeholder="enter the year"></input></th>
                        </tr> 
                        <tr>
                            <th>Credibility rating: </th>
                            <th><div style="width: 80px;"><span class="rating">
                                        <input type="radio" class="rating-input"
                                               id="rating-input-1-5" name="rating_c"value="5">
                                            <label for="rating-input-1-5" class="rating-star"></label>
                                            <input type="radio" class="rating-input"
                                                   id="rating-input-1-4" name="rating_c" value="4">
                                                <label for="rating-input-1-4" class="rating-star"></label>
                                                <input type="radio" class="rating-input"
                                                       id="rating-input-1-3" name="rating_c"value="3">
                                                    <label for="rating-input-1-3" class="rating-star"></label>
                                                    <input type="radio" class="rating-input"
                                                           id="rating-input-1-2" name="rating_c" value="2">
                                                        <label for="rating-input-1-2" class="rating-star"></label>
                                                        <input type="radio" class="rating-input"
                                                               id="rating-input-1-1" name="rating_c"value="1">
                                                            <label for="rating-input-1-1" class="rating-star"></label>
                                                            </span></div>
                                                            <br> 
                                                                <input type="text" id="paper_credibility_reason" style="width: 310px"placeholder="your reason"></input><br>
                                                                    <input type="text" id="paper_credibility_who" style="width: 310px"placeholder="your name"></input><br></th>
                                                                        </tr> 
                                                                        <tr>
                                                                            <th>Confidence rating : </th>
                                                                            <th><div style="width: 80px;"><span class="rating">
                                                                                        <input type="radio" class="rating-input"
                                                                                               id="rating-input-1-5_cf" name="rating_cf"value="5">
                                                                                            <label for="rating-input-1-5_cf" class="rating-star"></label>
                                                                                            <input type="radio" class="rating-input"
                                                                                                   id="rating-input-1-4_cf" name="rating_cf" value="4">
                                                                                                <label for="rating-input-1-4_cf" class="rating-star"></label>
                                                                                                <input type="radio" class="rating-input"
                                                                                                       id="rating-input-1-3_cf" name="rating_cf"value="3">
                                                                                                    <label for="rating-input-1-3_cf" class="rating-star"></label>
                                                                                                    <input type="radio" class="rating-input"
                                                                                                           id="rating-input-1-2_cf" name="rating_cf" value="2">
                                                                                                        <label for="rating-input-1-2_cf" class="rating-star"></label>
                                                                                                        <input type="radio" class="rating-input"
                                                                                                               id="rating-input-1-1_cf" name="rating_cf"value="1">
                                                                                                            <label for="rating-input-1-1_cf" class="rating-star"></label>
                                                                                                            </span></div></th>
                                                                                                            </tr> 
                                                                                                           
                                                                                                            <tr>
                                                                                                                <th></th>
                                                                                                                <th><input type="button" onclick="addrating('adddatatoDB.php','unload_notice','paper_title', 'paper_name', 'paper_author', 'paper_year', 'paper_journal', rating_c.value, 'paper_credibility_reason', 'paper_credibility_who',rating_cf.value )" value="Submit"></input></th>
                                                                                                            </tr>
                                                                                                            </table>
                                                                                                            </form>
                                                                                                            </div> 
                                                                                                            </body>
                                                                                                            </html>
