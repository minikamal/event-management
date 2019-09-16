

<!DOCTYPE html>
<html lang="en">
<head>
<title>EVENT LIST</title>
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

<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
<body>
<h3 align="center"> VIEW EVENT LIST </h3>


<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Name of event</th>
								<th class="column2">Date</th>
								<th class="column3">Time</th>
								<th class="column4">Venue</th>
					            <th class="column5">Participate</th>
					            
							</tr>
						</thead>

<?php
      mysql_connect("localhost","root","rootwdp");
	  mysql_select_db("project");
     $fetch="select * from `event1`";
	 $res=mysql_query($fetch);
	 
    while($row=mysql_fetch_array($res))
		
	
	{
	 echo "<tr><td class='column1'>".$row[1]."</td><td class='column2'>".$row[2]."</td><td class='column3'>".$row[3]."</td>
	 <td class='column4'>".$row[4]."</td>
	 <td class='column5'><a href='participate.php?id=".$row[0]." &urid=".$_GET['uid']." &orgid=".$row[5]."' ><button style='background-color:black; color:white;
	 height:30px; width:100px; '>Add</button></a></tr>";

	}

?>

<?php
	  $x=$_GET["uid"];
	  echo "<br>Welcome <b>".$x."</b> Click on Add button to choose an event you want to participate";

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