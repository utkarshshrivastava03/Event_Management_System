<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Event Form</title> 
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body style="background-image: url(images/bgimage2.jpg); background-repeat: no-repeat; background-size: cover; ">
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content" >
            <div class = "container">
                <div class="col-md-12 box" style="margin-top: 20px;">
                <h1 style="margin-bottom: 20px; text-align: center;">Book Event</h1><!--form title-->
                <?php 
                if (isset($errorMessage)) {
                    echo '<p>Error: ' . $errorMessage . '</p>';
                }
                ?>
                <div class="row wow fadeInUp">
                <form action="insert_event.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label for="Title" class="col-md-2 control-label">Name</label>
                        <div class="col-md-5">
                            <input type="text" name="Title" required   class="form-control" id="Title" placeholder="Enter your name and Title" autocomplete="off" required />
                        </div>
                        
                        
                    </div>
                    <div class="form-group">
                        <label for="Description" class="col-md-2 control-label">Description</label><!--event description-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Description" name="Description" placeholder="Enter Event Description" autocomplete="off" required  /><!--input-->
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="StartDate" class="col-md-2 control-label">Start Date</label><!--start date-->
                        <div class="col-md-5">
                            <input type="date" class="form-control" id="StartDate" name="StartDate" required /><!--input-->
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="EndDate" class="col-md-2 control-label">End Date</label><!--end date-->
                        <div class="col-md-5">
                            <input type="date" class="form-control" id="EndDate" name="EndDate" required /><!--input-->
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="StartTime" class="col-md-2 control-label">Time To</label><!--start date-->
                        <div class="col-md-5">
                            <input type="Time" class="form-control" id="TimeTo" name="TimeTo" required /><!--input-->
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="EndTime" class="col-md-2 control-label">Time From</label><!--end date-->
                        <div class="col-md-5">
                            <input type="Time" class="form-control" id="TimeFrom" name="TimeFrom" required /><!--input-->
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Food" class="col-md-2 control-label">Food</label>
                        <div class="col-md-5">
                            <input type="radio" id="Food" name="Food" value="veg" style="margin-left: 20px;" />   Veg
                            <input type="radio" id="Food" name="Food" value="Non-Veg" style="margin-left: 20px;" />   Non-Veg
                            <input type="radio" id="Food" name="Food" value="Veg + Non-Veg" style="margin-left: 20px;" />   Veg + Non-Veg
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Address" class="col-md-2 control-label">Address</label>
                        <div class="col-md-5">
                            <input type="text" name="Address" required   class="form-control" id="Address" placeholder="Enter your Address" autocomplete="off" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Address" class="col-md-2 control-label">Contact</label>
                        <div class="col-md-5">
                            <input type="number" name="Contact" required   class="form-control" id="Contact" placeholder="Enter your Contact Number " autocomplete="off" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Email" class="col-md-2 control-label">Email</label>
                        <div class="col-md-5">
                            <input type="text" name="Email" required   class="form-control" id="Email" placeholder="Enter your Email Id" autocomplete="off" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="location" class="col-md-2 control-label">Location</label>
                        <div class="col-md-5">
                            <input type="text" name="location" required   class="form-control" id="location" placeholder="Enter your venue location" autocomplete="off" required />                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message" class="col-md-2 control-label">Message</label>
                        <div class="col-md-5">
                            <textarea name="message" required class="form-control" id="message" placeholder="Enter Your Requirement" autocomplete="off" required></textarea>
                        </div>
                    </div>

                    <button type="submit" class = "btn btn-default pull-right">Create Event <span class="glyphicon glyphicon-send"></span></button>
                    <a class="btn btn-default navbar-btn" href = "index.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a><!--register button-->
                </form>
            </div>
            </div>
        </div>
        </div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
