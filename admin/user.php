<?php
include('headertop.php');
include('header.php');
include('connection.php');
 $sql= "select * from users";
 $result= mysqli_query($con, $sql);
?>

<body>
        <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>USER</li>
      </ol>

<div>
        <div >
            <div class="col-md-1"></div>

            <div class="col-md-10">

            <h1 class="pt-2 display -3 text-center">Viewing Users</h1>
               <h1> <p class="lead pt-2">Search anyone..!</p></h1>

                <form name="search" action="user.php" method="GET">

                    <div class="form-group">
                        <input type="text" name="txtname" value="" placeholder="Enter User Name" class="form-control" autocomplete="off" autofocus required>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="btnsearch" value="Search" class="btn btn-success">

                        <input type="reset" name="btnclear" value="clear" class="btn btn-success">
                    </div>

                </form>

                <?php
                if (isset($_REQUEST["btnsearch"])) {
                    $data = $_REQUEST["txtname"];

                    echo "<table class='table table-striped table-responsive border-collapse' border='1' width='100%'>
  <tr>
  <td>ID</td>
  <td>NAME</td>
  <td>EMAIL</td>
  <td>CONTACT</td>
  <td>PASSWORD</td>
  <td>ACTION</td>
  </tr>";

                    include 'db.php';
                    $qry = "SELECT * FROM users WHERE username LIKE '%$data%'";
                    $result = mysqli_query($con, $qry);

                    while ($row = mysqli_fetch_array($result)) {
                      $uid = $row['id'];
    echo "<tr>
    <td>" . $row["id"] . "</td>
    <td>" . $row["username"] . "</td>
    <td>" . $row["email"] . "</td>
    <td>" . $row["contact"] . "</td>
    <td>" . $row["password"] . "</td>
    
    <td><a href='user_edit.php?user=$uid'>Edit</a> | <a href='user_delete.php?user=$uid'>Delete</a></td>
    </tr>";
                    }
                    echo "</table>";
                }

                else
                {

                  
                  echo "<table class='table table-striped table-responsive' border='1'>
                  <tr>
                          <td>ID</td>
                          <td>NAME</td>
                          <td>EMAIL</td>
                          <td>CONTACT</td>
                          <td>PASSWORD</td>
                          <td>ACTION</td>
                  </tr>";
                
                                    include 'db.php';
                                    $qry = "SELECT * FROM users";
                                    $result = mysqli_query($con, $qry);
                                    while ($row = mysqli_fetch_array($result)) 
                                    {
                                      $uid = $row['id'];
                            echo "<tr>
                                <td>" . $row["id"] . "</td>
                          <td>" . $row["username"] . "</td>
                          <td>" . $row["email"] . "</td>
                          <td>" . $row["contact"] . "</td>
                          <td>" . $row["password"] . "</td>
    
    <td><a href='user_edit.php?user=$uid'>Edit</a> | <a href='user_delete.php?user=$uid'>Delete</a></td>
                
                    </tr>";
                                    }
                                    echo "</table>";
                }
                ?>
            </div>

            <div class="col-md-1"></div>
        </div>
    </div>
</body>