<?php
$x=$_GET["id"];

mysql_connect("localhost","root","rootwdp");
mysql_select_db("project");

$qry="SELECT * FROM `event1` WHERE Sno=$x";
$res=mysql_query($qry);
$fet=mysql_fetch_array($res);

 
if(isset($_GET['urid'])){
    $userid=$_GET['urid'];
$qry3="SELECT * FROM  `sponsor_login` WHERE Name_of_org='$userid'";
$res1=mysql_query($qry3);
$fet2=mysql_fetch_array($res1);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sponsorship Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css3/style1.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/SOPO1.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="get" class="participation-form" id="participation-form" action="sponsor_submit.php">
                        <h2>Sponsorship form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="event sno">Event Sno :</label>
                                <input type="text" name="ev_sn" id="ev_sn" value="<?php echo $fet[0];?>" readonly required/>
                            </div>
                            
                        </div>
                       
                        <div class="form-group">
                            <label for="student_sno">Organisation Name :</label>
                            <input type="text" name="name_org" id="name_org"  value="<?php echo $fet2[1];?>" readonly />
                        </div>

                        <div class="form-group">
                            <label for="Date">Amount :</label>
                            <input type="text" name="amt_" id="amt_" >
                        </div>
                        
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="submit" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

