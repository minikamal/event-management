<?php

      
	  session_start();
	  
	  if(!isset($_SESSION['username'])){
		header("location:http://localhost/project/login.php"); 
      }

?>


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
			echo "<br> Successfully data inserted";
		}
	}	
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration Details</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
<body>
<h3> VIEW EVENT REGISTRATION </h3>
<table border="1" width="100%">
<tr>
<th>Name</th>
<th>Gender</th>
<th>Enrollment No</th>
<th>Course</th>
<th>Branch</th>
<th>Year</th>
<th>Mobile_No</th>
<th>Email_Id</th>

<th>Action <a href="logout.php" > <button> Logout </button> </a> <button> <?php echo $_SESSION['username']; ?> </button></th>

</tr>

<?php
     
      $fetch="select * from `register1`";
       $res=mysql_query($fetch);

    while($row=mysql_fetch_array($res))
		
	
	{
     echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td>
	     <td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td> <td>
		".$row[8]." </td> 
		 
		 </tr>";

	}

?>
</table>

</body>
</html>