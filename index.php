<?php

echo '<!DOCTYPE html>
<html lang="en">
<head>
  <title>College Event Management</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar\'s default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 350px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #FFE4C4;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      margin-top:150px;
    }
    
    /* On small screens, set height to \'auto\' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="sgsits_logo.png" alt="SGSITS LOGO" height="30px" width="35px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="choose.php">Events</a></li>
        <li><a href="contact.php">Get Help</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Organizer Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="reg.php">Paricipant Registration</a></p>
      <p><a href="participant_login.php">Participant Login</a></p>
      <p><a href="sponsor_register.php">Sponsor Registration</a></p>
	  <p><a href="sponsor_login.php">Sponsor Login</a></p>
	  
    </div>
    <div class="col-sm-8 text-left" width="100%"> 
      
      <p><h2 align="center"><b>WELCOME TO SHRI GOVINDRAM SEKSARIA INSTITUTE OF TECHNOLOGY AND SCIENCE</h2>
	  </b></p>
	  
      <hr>
      <h3><i>This website would help the organizers, participants and sponsors to come together and make a gala event!</i></h3>
     
    </div>
    
  </div>
</div>

<footer class="container-fluid text-center">
  <p>All rights reserved &copy; 2019-2020, Design by Meera</p>
</footer>

</body>
</html>
'
?>