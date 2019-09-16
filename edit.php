<?php
$x=$_GET["id"];
mysql_connect("localhost","root","rootwdp");
mysql_select_db("project");

$qry="SELECT * FROM `event1` WHERE Sno=$x";
$res=mysql_query($qry);
$fet=mysql_fetch_array($res);

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<title>Add events</title>
</head>
<body>
<h3 align="center"> Update Event!!</h3>
<form class="form-horizontal" action="event_submit.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="event">Name of event:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="event" placeholder="Enter name of event" value="<?php echo $fet[1];?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="date">Date:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="date_" placeholder="Enter Date:" value="<?php echo $fet[2];?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="time">Time:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="time_" placeholder="Enter time:" 
	  value="<?php echo $fet[3];?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="venue">Venue:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="venue_" placeholder="Enter venue:" value="<?php echo $fet[4];?>">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
     <input type="submit"  name="submit">
    </div>
  </div>
</form>
</body>
</html>
<?php
if(isset($_GET['submit'])){
$a=$_GET['id'];
$event_name=$_GET["event"];
	$date=$_GET["date_"];
	$time=$_GET["time_"];
	$venue=$_GET["venue_"];


$qry1="update `event` SET Name_Of_Event='".$event_name."', Date='".$date."', Time='".$time."' ,Venue='".$venue."' where 
Sno=$a ";
echo $qry1;
mysql_query($qry1);

}
?>