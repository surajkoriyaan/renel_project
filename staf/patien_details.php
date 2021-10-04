<?php
include("header.php");
?>
<?php
include("../db.php");
$id=$_GET["id"];
$sql="select * from patients where id=$id";
$run=mysqli_query($con,$sql);
if (mysqli_num_rows($run)<1) {
  echo"
<script>
alert('id not found');
window.location='staf.php';
</script>
  ";

}
else {
  while ($row=mysqli_fetch_assoc($run)) {
    $name=$row['name'];
    $adhar=$row['adhar'];
    $dob=$row['dob'];
    $gender=$row['gender'];
    $address=$row['address'];
    $mobile=$row['mobile'];
    $branch=$row['branch'];
    $amount=$row['amount'];
    $img=$row['img'];
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
        <a href="staf_home.php">
     <span class="icon"><i class="fa fa-apple" aria-hidden="true"></i></span>
     <span class="title"> <h2>Staf</h2> </span>
     </a>
      </li>
      <li>
        <a href="staf_home.php">
     <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
     <span class="title"> dashboard </span>
     </a>
      </li>
      <li>
        <a href="staf_home.php">
     <span class="icon"> <i class="fa fa-heartbeat" aria-hidden="true"></i></span>
     <span class="title">Patients </span>
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
        
    </div>
    <br>

    <div class="details">
      <div class="recentOrders">
        <div class="cardHeader">
          <h2>Patients details</h2>
          <a href="staf_home.php" class="btn">View All Registered Patients</a>
        </div>
        <div class="container">
        <form >
          <div class="row">
            <div class="col-25">
              <label for="fname">Full Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="fname" value="<?php echo $name; ?>" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Adhar Number</label>
            </div>
            <div class="col-75">
              <input type="number" id="adhar" name="adhar" value="<?php echo $adhar; ?>" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Date of Birth</label>
            </div>
            <div class="col-75">
              <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="country">Gender</label>
            </div>
            <div class="col-75">
              <select id="gender" name="gender" disabled>
                <option value="0"><?php echo $gender; ?></option>
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="other">other</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label >Address</label>
            </div>
            <div class="col-75">
              <textarea id="address" name="address"  style="height:80px" readonly>
<?php echo $address; ?>
              </textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label>Mobile Number</label>
            </div>
            <div class="col-75">
              <input type="number" id="mobile" name="mobile" value="<?php echo $mobile; ?>" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label>Branch</label>
            </div>
            <div class="col-75">
              <input type="text" id="branch" name="branch" value="<?php echo $branch; ?>" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label>Amount per Patients</label>
            </div>
            <div class="col-75">
              <input type="number" id="amount" name="amount" value="<?php echo $amount; ?>" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Photo</label>
            </div>
            <div class="col-75">

              <img src="img/<?php echo $img; ?>" style="height:140px; width:170px;" alt="">
            </div>
          </div>
          <div class="row">

          </div>
        </form>
      </div>
      </div>
      <div class="recentCustomers">
        <div class="cardHeader">

Copyright (c) 2021 , Copyright Holder All Rights Reserved.
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
