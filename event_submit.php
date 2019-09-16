

<?php


if(isset($_GET['submit']))
{
	$event_name=$_GET["event"];
	$date=$_GET["date_"];
	$time=$_GET["time_"];
	$venue=$_GET["venue_"];
	
}	

mysql_connect("localhost","root","rootwdp");
mysql_select_db("project");

if(isset($_GET['submit'])){
	$qry="insert into `event1`(Name_of_event,Date,Time,Venue) VALUES
		   ('".$event_name."','".$date."','".$time."','".$venue."'
			  )";

	mysql_query($qry);
	{
		if(isset($_GET['submit']))
		{
			echo "<br> Successfully event organized";
		}
	}	
}
?>

