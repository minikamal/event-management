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

<!DOCTYPE html>
<html>
<head>
<title>EVENT LIST</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
<body>
<h3 align="center"> VIEW EVENT LIST </h3>
<table border="1" width="100%">
<tr>
<th>Name Of event</th>
<th>Date</th>
<th>Time</th>
<th>Venue</th>
<th>Update Event</th>


</tr>

<?php
      mysql_connect("localhost","root","rootwdp");
      mysql_select_db("project");
	  
      $fetch="select * from `event1`";
       $res=mysql_query($fetch);

    while($row=mysql_fetch_array($res))
		
	
	{
     echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td>
	    	<td><a href='edit.php?id=".$row[0]."'><button>edit</button></a>
		    <a href='del.php?id=".$row[0]."'><button>delete</button></a></td></tr>";

	}

?>
</table>

</body>
</html>