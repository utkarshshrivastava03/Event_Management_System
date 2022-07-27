<!-- user page -->

<body>
<div class="container">
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">CONTACT</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>

  <?php 
  while ($row=mysqli_fetch_assoc($result)) {
    $uid = $row['id'];
    echo "
    <tr>
    <td>".$row['id']."</td>
    <td>".$row['username']."</td>
    <td>".$row['email']."</td>
    <td>".$row['contact']."</td>
    <td>".$row['password']."</td>
    <td><a href='user_edit.php?user=$uid'>Edit</a> | <a href='user_delete.php?user=$uid'>Delete</a></td>
    </tr>";
  }
  ?>
  </tbody>
</table>
</div>
</body>

<!-- Event Page -->

</body>

        <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>EVENTS</li>
      </ol>

<body>
<!-- <div class="container"> -->
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TITLE</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">START DATE</th>
      <th scope="col">END DATE</th>
      <th scope="col">START TIME</th>
      <th scope="col">END TIME</th>
      <th scope="col">FOOD</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">CONTACT</th>
      <th scope="col">EMIAL</th>
      <th scope="col">LOCATION</th>
      <th scope="col">MESSAGE</th>
      <th scope="col">ACTION</th>


    </tr>
  </thead>
  <tbody>

  <?php 
  while ($row=mysqli_fetch_assoc($result)) {
    $eid = $row['id'];
    echo "
    <tr>
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
  ?>
  </tbody>
</table>
<!-- </div> -->
</body>


<!-- contact us -->

<ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Contact US</li>
      </ol>

<body>
<div class="container">
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">CITY</th>
      <th scope="col">EMAIL</th>
      <th scope="col">CONTACT</th>
      <th scope="col">MESSAGE</th>
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody>

  <?php 
  while ($row=mysqli_fetch_assoc($result)) {
    $uid = $row['id'];
    echo "
    <tr>
    <td>".$row['id']."</td>
    <td>".$row['name']."</td>
    <td>".$row['city']."</td>
    <td>".$row['email']."</td>
    <td>".$row['contact']."</td>
    <td>".$row['message']."</td>
    <td><a href=''>Accept</a> | <a href=''>Decline</a></td>
    </tr>";
  }
  ?>
  </tbody>
</table>
</div>
</body>