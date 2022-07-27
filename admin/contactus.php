<?php
include('headertop.php');
include('header.php');
include('connection.php');
 $sql= "select * from contact";
 $result= mysqli_query($con, $sql);
?>

<body>
        <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Contact us</li>
      </ol>

<div>
        <div >
            <div class="col-md-1"></div>

            <div class="col-md-10">

            <h1 class="pt-2 display -3 text-center">Viewing Contacts</h1>
               <h1> <p class="lead pt-2">Search anyone..!</p></h1>

                <form name="search" action="contactus.php" method="GET">

                    <div class="form-group">
                        <input type="text" name="txtname" value="" placeholder="Enter User Name" class="form-control" autocomplete="off" autofocus required>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="btnsearch" value="Search" class="btn btn-success">

                        <a href="contactus.php"><input type="button" name="btnclear" value="clear" class="btn btn-success"></a>
                    </div>

                </form>

                <?php
                if (isset($_REQUEST["btnsearch"])) {
                    $data = $_REQUEST["txtname"];

                    echo "<table class='table table-striped table-responsive border-collapse' border='1' width='100%'>
  <tr>
  <td>ID</td>
  <td>NAME</td>
  <td>CITY</td>
  <td>EMAIL</td>
  <td>CONTACT</td>
  <td>MESSAGE</td>
  <td>STATUS</td>
  </tr>";

                    include 'db.php';
                    $qry = "SELECT * FROM contact WHERE name LIKE '%$data%'";
                    $result = mysqli_query($con, $qry);

                    while ($row = mysqli_fetch_array($result)) {
                      $cid = $row['id'];
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['name']."</td>
    <td>".$row['city']."</td>
    <td>".$row['email']."</td>
    <td>".$row['contact']."</td>
    <td>".$row['message']."</td>
    
    <td><a href=''>Accept</a> | <a href=''>Decline</a></td>
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
                          <td>CITY</td>
                          <td>EMAIL</td>
                          <td>CONTACT</td>
                          <td>MESSAGE</td>
                          <td>STATUS</td>
                  </tr>";
                
                                    include 'db.php';
                                    $qry = "SELECT * FROM contact";
                                    $result = mysqli_query($con, $qry);
                                    while ($row = mysqli_fetch_array($result)) 
                                    {
                                      $cid = $row['id'];
                            echo "<tr>
                                <td>".$row['id']."</td>
    <td>".$row['name']."</td>
    <td>".$row['city']."</td>
    <td>".$row['email']."</td>
    <td>".$row['contact']."</td>
    <td>".$row['message']."</td>
    
    <td><a href=''>Accept</a> | <a href=''>Decline</a></td>
                
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
