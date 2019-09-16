<?php
$a=$_GET["id"];
mysql_connect("localhost","root","rootwdp");

mysql_select_db("project");

$qry="delete from `event1` where sno=$a";

mysql_query($qry);

 header('location:http://localhost/project/event_details.php');

?>