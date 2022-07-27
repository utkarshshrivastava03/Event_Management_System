<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Contact Us</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body style="background-color: #F2F2F2">
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Contact Us</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="container">
                <div class="col-md-6 contacts">

                    <h1><!-- <span class="glyphicon glyphicon-user"></span> --><img src="images/passport.jpg" height="80px;"> Utkarsh Shrivastava</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: xyz@gmail.com<br>
                        <span class="glyphicon glyphicon-link"></span> Facebook: www.facebook.com/xyz<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 87485963210
                    </p>

                    <h1><span class="glyphicon glyphicon-user"></span><!-- <img src="images/passport.jpg" height="80px;"> --> Ankush Katariya</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: admin@gmail.com<br>
                        <span class="glyphicon glyphicon-link"></span> Facebook: www.facebook.com/admin<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 0987645132
                    </p>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" name="title" id="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea id="Comment" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                    </form>
                </div>
            </div>
			
            
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
