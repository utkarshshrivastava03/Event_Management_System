<?php session_start();
if(!isset($_SESSION['admin'])){
  header('location:signin.php');
}

$name = $_SESSION['admin'];
?>
<?php
	include('headertop.php');
	include('header.php');
?>

    <ol class="breadcrumb">
                <label class="breadcrumb-item">Hello, <?= $name; ?></label>
            </ol>

 <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
            </ol>
            <div class="four-grids">
                    <div class="col-md-3 four-grid">
                        <div class="four-agileits">
                            <div class="icon">
                                <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                            </div>
                            <div class="four-text">
                                <h3>User</h3>
                                <h4> 24,42  </h4>
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3 four-grid">
                        <div class="four-agileinfo">
                            <div class="icon">
                                <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
                            </div>
                            <div class="four-text">
                                <h3>Clients</h3>
                                <h4>60</h4>

                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3 four-grid">
                        <div class="four-w3ls">
                            <div class="icon">
                                <i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
                            </div>
                            <div class="four-text">
                                <h3>Projects</h3>
                                <h4>150</h4>
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3 four-grid">
                        <div class="four-wthree">
                            <div class="icon">
                                <i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
                            </div>
                            <div class="four-text">
                                <h3>Old Projects</h3>
                                <h4>135</h4>
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
</body>
</html>