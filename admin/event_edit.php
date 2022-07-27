<?php
include('headertop.php');
include('header.php');
include('connection.php');

$eventid = $_GET['event'];
$sql = "select * from events where id = '$eventid'";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

?>

<ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i><a href="event.php"> Event</a><i class="fa fa-angle-right"></i>Event EDIT</a></li>
      </ol>

<div class="grid-form">
 		<div class="grid-form1">
 		<h2 id="forms-example" class="">EVENT EDIT FORM</h2>

 		<form action="event_update.php" method="POST">
 			<input type="hidden" name="id" value="<?php echo $data['id']?>">
 	 <div class="form-group">
    <label for="Title">User Name</label>
    <input type="text" class="form-control" id="Title" name="Title" value="<?php echo $data['title']?>">
  </div>


  <div class="form-group">
    <label for="Description" class="col-md-2 control-label">Description</label>
    <input type="text" class="form-control" id="Description" name="Description" value="<?php echo $data['description']?>">
  </div>

   <div class="form-group">
    <label for="StartDate">Start Date</label>
    <input type="date" class="form-control" id="StartDate" name="StartDate" value="<?php echo $data['sdate']?>">
  </div>

  <div class="form-group">
    <label for="EndDate">End Date</label>
    <input type="data" class="form-control" id="EndDate" name="EndDate" value="<?php echo $data['edate']?>">
  </div>

  <div class="form-group">
    <label for="TimeTo">Time To</label>
    <input type="Time" class="form-control" id="TimeTo" name="TimeTo" value="<?php echo $data['stime']?>">
  </div>

  <div class="form-group">
    <label for="TimeFrom">Time From</label>
    <input type="Time" class="form-control" id="TimeFrom" name="TimeFrom" value="<?php echo $data['etime']?>">
  </div>

  <div class="form-group">
    <label for="Food">Food: </label>
                        
                            <input type="radio" id="Food" name="Food"  style="margin-left: 20px;" value="<?php echo $data['food']?>"/>   Veg
                            <input type="radio" id="Food" name="Food" value="Non-Veg" style="margin-left: 20px;" value="<?php echo $data['food']?>"/>   Non-Veg
                            <input type="radio" id="Food" name="Food" value="Veg + Non-Veg" style="margin-left: 20px;" value="<?php echo $data['food']?>"/>   Veg + Non-Veg
  </div>

  <div class="form-group">
    <label for="Address">Address</label>
    <input type="text" class="form-control" id="Address" name="Address" value="<?php echo $data['address']?>">
  </div>

  <div class="form-group">
    <label for="Contact">Contact</label>
    <input type="number" class="form-control" id="Contact" name="Contact" value="<?php echo $data['contact']?>">
  </div>

  <div class="form-group">
    <label for="Email">Email</label>
    <input type="email" class="form-control" id="Email" name="Email" value="<?php echo $data['email']?>">
  </div>

  <div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control" id="location" name="location" value="<?php echo $data['location']?>">
  </div>

  <div class="form-group">
    <label for="message">Message</label>
    <input type="text" class="form-control" id="message" name="message" value="<?php echo $data['message']?>">
  </div>
  
  <!-- <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div> -->
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
