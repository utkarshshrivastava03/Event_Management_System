<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Connection.php';


$connection = Connection::getInstance();
$gateway = new EventTableGateway($connection);

$statement = $gateway->getEvents();

start_session();

if (!is_logged_in()) {
    header("Location: login_form.php");
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body>
        <?php require 'utils/header.php'; ?>

        <section class="container">
				<div class="container-fluid">
					<div class="section-header">
						<h3>Create Event</h3>
					</div>
					<div >
						<div class="col-lg-6 offset-lg-3">
							<div class="form">
								<div id="sendmessage">Your message has been sent. Thank you!</div>
								<div id="errormessage"></div>
								<form   method="POST" role="form" >
									.
									
									
										
										
										<div class="form-group">
										<label>Name/Title
										</label>
										<input type="text" name="title" required   class="form-control" id="mobile" placeholder="Enetr your name and Title"  />
										<div class="validation"></div>
									
									
										
									</div>
									
									
									<div class="form-row">
									<div class="col-lg-6">
									
										
										
										<div class="form-group">
										<label>Date To
										</label>
										<input type="date" name="date_to" class="form-control" id="mobile" placeholder="Your Mobile"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									</div>
									<div class="col-lg-6">
									
									<div class="form-group">
<label>Date From		
</label>		
		<input type="date" name="date_from" class="form-control" id="email" placeholder="Your Email"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									</div>
										
									</div>
									<div class="form-row">
									<div class="col-lg-6">
									
										
										
										<div class="form-group">
										<label>Time To</label>
										<input type="time" name="time_to" class="form-control" id="mobile" placeholder="Your Mobile"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									</div>
									<div class="col-lg-6">
									
									<div class="form-group">
									<label>Time From
									</label>
										<input type="time" name="time_from" class="form-control" id="email" placeholder="Your Email"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									</div>
										
									</div>
									<div class="form-group">
									<label>Entertainments:-</label></br>
										<input type="checkbox" name="music"  value="yes" / style="margin-left: 20px;">   Music
										<input type="checkbox" name="dance"  value="yes" / style="margin-left: 20px;">   Dance
										<input type="checkbox" name="cartoon"  value="yes" style="margin-left: 20px;" />   Cartoons
										<div class="validation"></div>
									</div>
<div class="form-group">
									<label>Decoration:-</label></br>
										<input type="checkbox" name="light"  value="yes" / style="margin-left: 20px;">   Light
										<input type="checkbox" name="chair"  value="yes" / style="margin-left: 20px;">   Chair
										<input type="checkbox" name="stage"  value="yes" / style="margin-left: 20px;">   Stage
										<input type="checkbox" name="flower"  value="yes" / style="margin-left: 20px;">   Flowers
										<div class="validation"></div>
									</div>
<div class="form-group">
									<label>Food:-</label></br>
										<input type="checkbox" name="veg"  value="yes" / style="margin-left: 20px;">   Veg
										<input type="checkbox" name="nonveg"  value="yes" / style="margin-left: 20px;">   Non-Veg
										<input type="checkbox" name="veg_nonveg"  value="yes" / style="margin-left: 20px;">   Veg + Non-Veg
										<div class="validation"></div>
									</div>
									<div class="form-group">
											<label>No of Chairs
										</label>
										<input type="text" name="no_of_chair" class="form-control" required  id="mobile" placeholder="No. Of Chairs"  />
										<div class="validation"></div>
									
									
										
									</div>
									
									<div class="form-group">
											<label>Address
										</label>
										<input type="text" name="address" class="form-control" required  id="mobile" placeholder="Venue Address"  />
										<div class="validation"></div>
									
									
										
									</div>
									<div class="form-group">
										<label>Contact Details
										</label>
										<input type="mobile" name="mobile" class="form-control" required  id="mobile" placeholder="Enter personal ph number / Incharge ph number"  />
										<div class="validation"></div>
									
									
										
									</div>
									<div class="form-group">
										<label>Email Id
										</label>
										<input type="email" name="email" class="form-control" required id="mobile" placeholder="E-mail "  />
										<div class="validation"></div>
									
									
										
									</div>
									<!--
									<div class="form-group">
										<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
										<div class="validation"></div>
									</div>
									<div class="form-group">
										<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
										<div class="validation"></div>
									</div>
									-->
									<div class="text-center"><button type="submit" name="submit" title="Register Now">Register Now</button></div>
								</form>
							</div>


        <?php require 'utils/footer.php'; ?>
    </body>
</html>