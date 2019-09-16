<?php
mysql_connect("localhost","root","rootwdp");
mysql_select_db("project");
 
if(isset($_GET['submit']))
{
    $event_no=$_GET["ev_sn"];
    $stsn=$_GET["st_sn"];
	$date=$_GET["date_"];
	$time=$_GET["time_"];
	$venue=$_GET["venue_"];
	$org=$_GET["orgid"];
 
	$qry= "INSERT INTO `event_register1`(evsn,stsn,date,time,venue,Org_id) VALUES  ('".$event_no."',$stsn,'".$date."','".$time."','".$venue."','".$org."' )";
   

     mysql_query($qry);
    { 
		if(isset($_GET['submit']))
		{
			echo "<br> Successfully registered for event";
		}
    }
}

?>
