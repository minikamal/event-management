
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<title>Add events</title>
</head>
<body>
<h3 align="center"> Organize Event!!</h3>
<form class="form-horizontal" action="event_submit.php">


  

  <div class="form-group">
    <label class="control-label col-sm-2" for="event">Name of event:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="event" placeholder="Enter name of event">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="date">Date:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="date_" placeholder="Enter Date:">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="time">Time:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="time_" placeholder="Enter time:">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="venue">Venue:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="venue_" placeholder="Enter venue:">
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

