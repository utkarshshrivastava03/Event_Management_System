<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Contact Us</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <header style="background-image: url(images/bgimage.jpg); background-size: cover; background-position: center; height: 500px; margin-bottom: 29px;">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header"><!--website name/title-->
                <?php 
                require_once 'utils/functions.php';
                echo '<a href = "index.php" class = "navbar-brand">
                    Eventer Eventz
                </a> ';
                ?>
            </div>
            <ul class="nav navbar-nav navbar-right"><!--navigation-->
                <?php 
                //links to database contents. *if logged in
                if(is_logged_in()){
                    require_once 'utils/functions.php';
                    echo '<li><a href = "index.php">Home</a></li>';
                    echo '<li><a href = "createEventForm.php">Book Events</a></li>';
                    echo '<li><a href = "viewLocations.php">Locations</a></li>';
                    echo '<li><a href = "contact1.php">Contact Us</a></li>';
                    echo '<li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "logout.php">Logout <span class = "glyphicon glyphicon-log-out"></span></a></li>';
                }  
                //links non database contents. *if logged out
                else {
                    echo '<li><a href = "index.php">Home</a></li>';
                    echo '<li><a href = "events2.php">Events</a></li>';
                    echo '<li><a href = "locations2.php">Locations</a></li>';
                    echo '<li><a href = "contact1.php">Contact Us</a></li>';
                    echo '<button type = "button" class = "btn btn-default navbar-btn" data-toggle = "modal" data-target = "#login">Login <Span class="glyphicon glyphicon-log-in"></span></button>';
                }
                ?>
                
                <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--modal for login-->
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header"><!--modal header-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Login</h4><!--modal title-->
                            </div>
                            <div class="row">
                                <div class="modal-body"><!--modal content-->
                                    <div class ="col-md-6 col-md-offset-3">
                                        <form action="login.php" method="POST">
                                            <div class = "form-group"><!--username-->
                                                <label for="username">Username:</label>
                                                <input type="text"
                                                       name="username"
                                                       class="form-control" autocomplete="off"
                                                       value="<?php if (isset($formdata['username'])) echo $formdata['username']; ?>"
                                                       />
                                                <span class="error"><!--error message on failed input-->
                                                    <?php if (isset($errors['username'])) echo $errors['username']; ?>
                                                </span>
                                            </div>
                                            <div class="form-group"><!--password-->
                                                <label for="password">Password:</label>
                                                <input type="password"
                                                       name="password"
                                                       class="form-control"
                                                       value=""
                                                       />
                                                <span class="error"><!--error message on failed input-->
                                                    <?php if (isset($errors['password'])) echo $errors['password']; ?>
                                                </span>
                                            </div>
                                            <button type="submit" class = "btn btn-default loginbtn">Login</button><!--login button-->
                                            <a class="btn btn-default navbar-btn rgsterbtn" href = "register_form.php">Register</a><!--register button-->
                                        </form>
                                    </div>
                                </div><!--modal body div-->
                            </div><!--row div-->
                            <div class="modal-footer"><!--modal footer-->
                            <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><!--close button-->
                            </div><!--modal footer div-->
                        </div><!--modal content div-->
                    </div><!--modal dialog div-->
                </div><!--modal div-->
            </ul>
        </div><!--container div-->
    </nav>

    <div class = "col-md-12">
        <div class = "container">
            <div style="color: white; text-align: center; text-shadow: 2px 2px black;"><!--jumbotron-->
                <h1>Contact Us</h1><!--jumbotron heading-->
                <p><!--jumbotron content-->
                
                </p>
                <!-- <p id="dateAndTime"></p> -->
            </div>
        </div>
    </div>
</header>

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
                <div class="row">
                <div class="col-md-6 box">
                    <div>
                        <h1 style="margin-bottom: 25px;"><!-- <span class="glyphicon glyphicon-user"></span> --><img src="images/admin.png" height="80px;"> XYZ</h1>
                        <span class="glyphicon glyphicon-map-marker" style=" margin-right: 20px; font-size: 25px;"></span> <span style="font-size: 18px;">Greater Estern, Baangalore, Karnataka</span><br><br>

                        <span class="glyphicon glyphicon-phone" style=" font-size: 25px; margin-right: 20px;"></span><span style="font-size: 18px;"> Mobile: 7485963210 </span><br><br>

                        <span class="glyphicon glyphicon-envelope" style=" font-size: 25px; margin-right: 20px;"></span><span style="font-size: 18px;"> xyz@gmail.com </span><br><br>

                        <!-- <span class="glyphicon glyphicon-globe" style=" font-size: 25px; margin-right: 20px;"></span><span style="font-size: 18px;"> Mobile: 7485963210 </span> -->

                    </div>

                   
                </div>
                <div class="col-md-6 box">
                    <div >
                        <h1 style="margin-bottom: 25px;"><!-- <span class="glyphicon glyphicon-user"></span> --><img src="images/admin.png" height="80px;"> ADMIN</h1>
                        <span class="glyphicon glyphicon-map-marker" style=" margin-right: 20px; font-size: 25px;"></span> <span style="font-size: 18px;">Greater Estern, Baangalore, Karnataka</span><br><br>

                        <span class="glyphicon glyphicon-phone" style=" font-size: 25px; margin-right: 20px;"></span><span style="font-size: 18px;"> Mobile: 9874563210 </span><br><br>

                        <span class="glyphicon glyphicon-envelope" style=" font-size: 25px; margin-right: 20px;"></span><span style="font-size: 18px;"> admin@gmail.com </span><br><br>

                        <!-- <span class="glyphicon glyphicon-globe" style=" font-size: 25px; margin-right: 20px;"></span><span style="font-size: 18px;"> Mobile: 9874563210 </span> -->

                    </div>
                </div>
                </div>
            
            
        </div><!--body content div-->

        <?php
    include ('connection.php');
    ?>


        <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

        <div class="container">
            <div class="col-md-12 box">
                <form method="POST" action="insert_contact.php">
                    <h2>Fill To Quick Contact :-</h2>
                    <div class="col-md-6">
                        <div class="form-group">
                            
                            <input type="text" name="name" placeholder="Your Name" class="fill" autocomplete="off" required ><br><br>
                            <input type="email" name="email" placeholder="E-mail" class="fill" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="city" placeholder="Your City" class="fill" autocomplete="off" required><br><br>
                            <input type="number" name="contact" placeholder="10 Digit Mobile Number" class="fill" autocomplete="off" required=""><br><br>
                        </div>
                    </div>

                    <div class="form-group">
                    <textarea class="fill" placeholder="message" name="message" autocomplete="off" required></textarea>
                </div> <br>

                    <a href="contact1.php"><input type="submit" name="" style="float: right; margin-bottom: 20px;"></a>

                </form>
            </div>
        </div>

<!-- </header> -->

<?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
</body>
</html>
