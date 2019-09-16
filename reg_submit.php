<html>
<head>
<title>Registration Submit</title>
</head>
<body>
<button style="height:25px; width:150px; border:1px solid black;"><a href="index.php">HOME PAGE</a></button>
</body>

</html>
<?php

if(isset($_GET['submit']))
{
	$Name=$_GET["nam"];
	$Gender=$_GET["gender"];
	$enno=$_GET["en_no"];
	$Course=$_GET["course"];
	$Branch=$_GET["branch"];
	$Year=$_GET["yr"];
	$mob=$_GET["mob_no"];
	$Email=$_GET["_email"];
	
}	

mysql_connect("localhost","root","rootwdp");
mysql_select_db("project");

if(isset($_GET['submit'])){
	$qry=" insert into `register1` (name,gender,en_no,course,branch,year,mob1,email_id) VALUES
		   ('".$Name."','".$Gender."','".$enno."','".$Course."','".$Branch."','".$Year."','".$mob."',
			  '".$Email."')";

	mysql_query($qry);
	{
		if(isset($_GET['submit']))
		{
			echo "<br> <b> Successfully REGISTERED </b>";
		}
	}	
}
?>