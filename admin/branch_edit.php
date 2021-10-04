<?php
include("header.php");
?>
<?php
include("../db.php");
$id=$_GET["id"];
$sql="select * from branch where id=$id";
$run=mysqli_query($con,$sql);
if (mysqli_num_rows($run)<1) {
  echo"
<script>
alert('id not found');
window.location='branch.php';
</script>
  ";

}
else {
  while ($row=mysqli_fetch_assoc($run)) {
    $name=$row['name'];
    $state=$row['state'];
    $city=$row['city'];
    $block=$row['block'];
    $amount=$row['amount'];
    $staf=$row['staf'];


  }

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assests/css/style1.css">
  </head>
  <body>
<div class="container1">
  <div class="navigation">
    <ul>
      <li>
        <a href="demo.php">
     <span class="icon"><i class="fa fa-apple" aria-hidden="true"></i></span>
     <span class="title"> <h2>Admin</h2> </span>
     </a>
      </li>
      <li>
        <a href="demo.php">
     <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
     <span class="title"> dashboard </span>
     </a>
      </li>
      <li>
        <a href="admin.php">
     <span class="icon"><i class="fa fa-adn" aria-hidden="true"></i></span>
     <span class="title">Admin </span>
     </a>
      </li>
      <li>
        <a href="doctor.php">
     <span class="icon"><i class="fa fa-user-md" aria-hidden="true"></i></span>
     <span class="title">Doctor</span>
     </a>
      </li>
      <li>
        <a href="branch.php">
     <span class="icon"><i class="fa fa-tree" aria-hidden="true"></i></span>
     <span class="title">Branch</span>
     </a>
      </li>
      <li>
        <a href="staf.php">
     <span class="icon"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
     <span class="title"> Staf </span>
     </a>
      </li>
      <li>
        <a href="logout.php">
     <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
     <span class="title"> sign out </span>
     </a>
      </li>
    </ul>
  </div>
  <div class="main">
    <div class="topbar">
      <div class="toggle" onclick="toggleMenu();"></div>
        <div class="search">
          <lable>
            <input type="text" name="" value="" placeholder="search here">
            <i class="fa fa-search" aria-hidden="true"></i>
          </lable>
        </div>
    <!--    <div class="user">
          <img src="face6.jpg" alt="" >
        </div> -->
    </div>
    <br>

    <div class="details">
      <div class="recentOrders">
        <div class="cardHeader">
          <h2>Update Branch</h2>
          <a href="branch.php" class="btn">View All Registered Branch</a>
        </div>
        <div class="container">
        <form action="update_branch.php" method="post">
          <div class="row">
            <div class="col-25">
              <label for="fname">Admin</label>
            </div>
            <div class="col-75">
                <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" required>
              <input type="text" id="fname" name="fname" value="<?php echo $name; ?>" required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="fname">State</label>
            </div>
            <div class="col-75">
              <input type="text" id="state" name="state" value="<?php echo $state; ?>" required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="fname">City / Town</label>
            </div>
            <div class="col-75">
              <input type="text" id="city" name="city" value="<?php echo $city; ?>" required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="fname">Block / Village</label>
            </div>
            <div class="col-75">
              <input type="text" id="block" name="block" value="<?php echo $block; ?>" required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="fname">Amount Per Patients</label>
            </div>
            <div class="col-75">
              <input type="text" id="amount" name="amount" value="<?php echo $amount; ?>" required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="fname">Number of staf</label>
            </div>
            <div class="col-75">
              <input type="number" id="staf" name="staf" value="<?php echo $staf; ?>" required>
            </div>
          </div>
          <div class="row">
            <input type="submit" value="Submit" name="submit">
          </div>
        </form>
      </div>
      </div>
      <div class="recentCustomers">
        <div class="cardHeader">

Copyright (c) 2021 ,  All Rights Reserved.
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function toggleMenu() {
    let toggle=document.querySelector('.toggle');
    let navigation=document.querySelector('.navigation');
    let main=document.querySelector('.main');
      toggle.classList.toggle('active');
      navigation.classList.toggle('active');
      main.classList.toggle('active');
  }
</script>
  </body>
</html>
