<?php
include('headertop.php');
include('header.php');
include('connection.php');

$userid = $_GET['user'];
$sql = "select * from users where id = '$userid'";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

?>

<ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i><a href="user.php"> USER</a><i class="fa fa-angle-right"></i>USER EDIT</a></li>
      </ol>

<div class="grid-form">
 		<div class="grid-form1">
 		<h2 id="forms-example" class="">USER EDIT FORM</h2>

 		<form action="user_update.php" method="POST">
 			<input type="hidden" name="id" value="<?php echo $data['id']?>">
 	 <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username" value="<?php echo $data['username']?>">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $data['email']?>">
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Contact</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="contact" value="<?php echo $data['contact']?>">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $data['password']?>">
  </div>
  
  <!-- <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div> -->
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
