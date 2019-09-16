<?php
//for indicating the current page
$pagename= basename($_SERVER["PHP_SELF"]);
mysql_connect("localhost","root","rootwdp");
mysql_select_db("project");

/*
if(isset($_GET['login'])){
	$user=$_GET["uid"];
	$pass=$_GET["upass"];
	
	
	$qry="select * from `participant_login` where enrollment_no='".$user."' && password='".$pass."'";
	echo $qry;
	$result=mysql_query($qry);
	
	
	
	$number=mysql_num_rows($result);
}
*/	

?>

<?php
      /*
       $fetch="SELECT * FROM `participant_login` ";
       $res=mysql_query($fetch);

    while($row=mysql_fetch_array($res))
		
	
	{
     echo " <br>Welcome<tr> <td>".$row[1]."</td></tr>";

	}
	*/
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
	$qry="insert into `event`(Name_of_event,Date,Time,Venue) VALUES
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
     $x=$_GET["id"];
    $fet="SELECT * FROM `event` WHERE Sno=$x";
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
<br>
<button><a href="participate.php">Participate</a></button>