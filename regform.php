
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
<html lang="en">
<head>
<title>Registration Details</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css2/util.css">
	<link rel="stylesheet" type="text/css" href="css2/main.css">
</head>
<body>
<h3 align="center" style="font-style:'times new roman';"> VIEW STUDENT REGISTRATIONS </h3>
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Name</th>
								<th class="column2">Gender</th>
								<th class="column3">Enroll No</th>
								<th class="column4">Course</th>
								<th class="column5">Branch</th>
								<th class="column6">Year</th>
								<th class="column7">Mobile_No</th>
								<th class="column8">Email_Id</th>
								
							</tr>
						</thead>
	
<!--table border="1" width="100%">
<tr>
<th>Name</th>
<th>Gender</th>
<th>Enrollment No</th>
<th>Course</th>
<th>Branch</th>
<th>Year</th>
<th>Mobile_No</th>
<th>Email_Id</th>

<th>Action <a href="logout.php" > <button> <b style="font-color:white;">Logout </b></button> </a> <button><b style="color:white;"> <?php echo $_SESSION['username']; ?> </b></button></th>

</tr>
-->

<?php
      mysql_connect("localhost","root","rootwdp");
      mysql_select_db("project");
	  
      $fetch="select * from `register1`";
       $res=mysql_query($fetch);

    while($row=mysql_fetch_array($res))
		
	
	{
     echo "<tbody><tr><td class='column1'>".$row[1]."</td><td class='column2'>".$row[2]."</td><td class='column3'>".$row[3]."</td><td class='column4'>".$row[4]."</td>
	     <td class='column5'>".$row[5]."</td><td class='column6'>".$row[6]."</td><td class='column7'>".$row[7]."</td> <td class='column8'>
		".$row[8]." </td> 
		 
		 </tr></tbody>";

	}

?>
  
	</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>