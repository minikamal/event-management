<html>
<head>
<title>Sponsor Submit</title>
<body>
<button style="height:25px; width:150px; border:1px solid black; "><a href="index.php"> Home Page</a></button>
</body>
</head>
</html>
<?php

if(isset($_GET['submit']))
{
	$Name=$_GET["_name"];
	$Gender=$_GET["gender"];
	$mob=$_GET["mob_no"];
	$Email=$_GET["_email"];
	$Org=$_GET["org"];
	
	
}	

mysql_connect("localhost","root","rootwdp");
mysql_select_db("project");

if(isset($_GET['submit'])){
	$qry=" insert into `sponsor` (name,gender,mob,email_id,organization) VALUES
		   ('".$Name."','".$Gender."','".$mob."',
			  '".$Email."','".$Org."')";

	mysql_query($qry);
	{
		if(isset($_GET['submit']))
		{
			echo "<br> <b>Successfully registered for sponsorship</b>";
		}
	}	
}

?>