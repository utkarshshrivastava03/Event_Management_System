<?php
include('headertop.php');
include('header.php');
include('connection.php');
 $sql= "select * from events";
 $result= mysqli_query($con, $sql);
?>

<body>
        <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Events</li>
      </ol>

        <div>
            <!-- <div class="col-md-1"></div> -->

            <div>

            <h1 class="pt-2 display -3 text-center">Viewing Events</h1>
               <h1> <p class="lead pt-2">Search Here..!</p></h1>

                <form name="search" action="event.php" method="GET">

                    <div class="form-group">
                        <input type="text" name="txtname" value="" placeholder="Enter Description" class="form-control" autocomplete="off" autofocus required>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="btnsearch" value="Search" class="btn btn-success">

                        <a href="event.php"><input type="button" name="btnclear" value="clear" class="btn btn-success"></a>
                    </div>

                </form>

                <?php
                if (isset($_REQUEST["btnsearch"])) {
                    $data = $_REQUEST["txtname"];

                    echo "<table class='table table-striped table-responsive border-collapse' border='1' width='100%'>
  <tr>
      <td>ID</td>
      <td>TITLE</td>
      <td>DESCRIPTION</td>
      <td>START DATE</td>
      <td>END DATE</td>
      <td>START TIME</td>
      <td>END TIME</td>
      <td>FOOD</td>
      <td>ADDRESS</td>
      <td>CONTACT</td>
      <td>EMIAL</td>
      <td>LOCATION</td>
      <td>MESSAGE</td>
      <td>ACTION</td>
  </tr>";

                    include 'db.php';
                    $qry = "SELECT * FROM events WHERE description LIKE '%$data%'";
                    $result = mysqli_query($con, $qry);

                    while ($row = mysqli_fetch_array($result)) {
                      $eid = $row['id'];
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['title']."</td>
    <td>".$row['description']."</td>
    <td>".$row['sdate']."</td>
    <td>".$row['edate']."</td>
    <td>".$row['stime']."</td>
    <td>".$row['etime']."</td>
    <td>".$row['food']."</td>
    <td>".$row['address']."</td>
    <td>".$row['contact']."</td>
    <td>".$row['email']."</td>
    <td>".$row['location']."</td>
    <td>".$row['message']."</td>
    
    <td><a href='event_edit.php?event=$eid'>Edit</a> | <a href='event_delete.php?event=$eid'>Delete</a></td>
    </tr>";
                    }
                    echo "</table>";
                }

                else
                {

                  
                  echo "<table class='table table-striped table-responsive' border='1'>
                  <tr>
                          <td>ID</td>
                          <td>TITLE</td>
                          <td>DESCRIPTION</td>
                          <td>START DATE</td>
                          <td>END DATE</td>
                          <td>START TIME</td>
                          <td>END TIME</td>
                          <td>FOOD</td>
                          <td>ADDRESS</td>
                          <td>CONTACT</td>
                          <td>EMIAL</td>
                          <td>LOCATION</td>
                          <td>MESSAGE</td>
                          <td>ACTION</td>
                  </tr>";
                
                                    include 'db.php';
                                    $qry = "SELECT * FROM events";
                                    $result = mysqli_query($con, $qry);
                                    while ($row = mysqli_fetch_array($result)) 
                                    {
                                      $eid = $row['id'];
                            echo "<tr>
                                <td>".$row['id']."</td>
                                <td>".$row['title']."</td>
                                <td>".$row['description']."</td>
                                <td>".$row['sdate']."</td>
                                <td>".$row['edate']."</td>
                                <td>".$row['stime']."</td>
                                <td>".$row['etime']."</td>
                                <td>".$row['food']."</td>
                                <td>".$row['address']."</td>
                                <td>".$row['contact']."</td>
                                <td>".$row['email']."</td>
                                <td>".$row['location']."</td>
                                <td>".$row['message']."</td>
                                
                                <td><a href='event_edit.php?event=$eid'>Edit</a> | <a href='event_delete.php?event=$eid'>Delete</a></td>
                
                    </tr>";
                                    }
                                    echo "</table>";
                }
                ?>
            </div>

            <div class="col-md-1"></div>
        </div>
  </body>