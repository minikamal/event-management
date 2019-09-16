

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
<h3 align="center"> VIEW EVENT REGISTRATIONS </h3>


<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Event_Sno</th>
                                <th class="column2">Student_Sno</th>
								<th class="column3">Date</th>
								<th class="column4">Time</th>
								<th class="column5">Venue</th>
					            <th class="column6">Org_Id</th>
					            
							</tr>
						</thead>

<?php
    mysql_connect("localhost","root","rootwdp");
    mysql_select_db("project");
     $fetch="select * from `event_register1`";
	 $res=mysql_query($fetch);
	 
    while($row=mysql_fetch_array($res))
		
	
	{
	 echo "<tr><td class='column1'>".$row[0]."</td><td class='column2'>".$row[1]."</td><td class='column3'>".$row[2]."</td>
	 <td class='column4'>".$row[3]."</td>
     <td class='column5'>".$row[4]."</td>
     <td class='column6'>".$row[5]."</td>
     </tr>";

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