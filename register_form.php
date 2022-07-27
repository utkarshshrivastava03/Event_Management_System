<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class ="content"><!--body content holder-->
            <div class = "container box">
                <div class ="col-md-6 col-md-offset-3">
                    <form action="insert_user.php" class ="form-group" method="POST">
                        <div class="form-group">
                            <label for="username">Username: </label>
                            <input type="text"
                                   id="username"
                                   name="username"
                                   class="form-control"
                                   autocomplete="off"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="contact">Email: </label>
                            <input type="email"
                                   id="email"
                                   name="email"
                                   class="form-control"
                                   autocomplete="off"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="username">contact: </label>
                            <input type="number"
                                   id="contact"
                                   name="contact"
                                   class="form-control"
                                   autocomplete="off"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password"
                                   id="password"
                                   name="password"
                                   class="form-control"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password: </label>
                            <input type="password"
                                   id="cpassword"
                                   name="cpassword"
                                   class="form-control"
                                   required>
                        </div>
                        <button type="submit" class = "btn btn-default">Register</button>
                    </form>
                </div>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
