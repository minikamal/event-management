<?php
 mysql_connect("localhost","root","rootwdp");
 mysql_select_db("project");
 
 $fetch="select * from `participant_login`";
       $res=mysql_query($fetch);

    while($row=mysql_fetch_array($res))
		
	
	{
     echo " <br>Welcome<tr> <td>".$row[0]."</td></tr>";

	}
?>
<?php


if(isset($_GET['submit']))
{
	$event_name=$_GET["event"];
	$date=$_GET["date_"];
	$time=$_GET["time_"];
	$venue=$_GET["venue_"];
	
}	


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

<?php
    $fet="select * from `event1`";
    $result=mysql_query($fet);

 while($row=mysql_fetch_array($result))
     
 
 {
  echo " <br> Event Name: <tr> <td>".$row[1]."</td></tr>
         <br> Date:<tr> <td>".$row[2]."</td></tr>
         <br> Time: <tr> <td>".$row[3]."</td></tr>
         <br> Venue: <tr> <td>".$row[4]."</td></tr>
  ";

 }


?>
