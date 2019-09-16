<?php
mysql_connect("localhost","root","rootwdp");
mysql_select_db("project");
 
if(isset($_GET['submit']))
{
  $event_no=$_GET["ev_sn"];
	$orgid=$_GET["name_org"];
	$amt=$_GET["amt_"];
	
 
	$qry= "INSERT INTO `sponsor_register`(evsn,sponsor_id,Amount) VALUES  ('".$event_no."','".$orgid."','".$amt."' )";
   

     mysql_query($qry);
    { 
		if(isset($_GET['submit']))
		{
			echo "<br> Successfully sponsored event";
		}
    }
}

?>
