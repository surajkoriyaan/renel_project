<?php
include("header.php");
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
          <h2>Create Branch</h2>
          <a href="branch.php" class="btn">View All Registered Branch</a>
        </div>
        <div class="container">
        <form action="branch_registration.php" method="post">
          <div class="row">
            <div class="col-25">
              <label for="fname">Branch Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="fname" placeholder="branch name.." required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="fname">State</label>
            </div>
            <div class="col-75">
              <input type="text" id="state" name="state" placeholder="enter state.." required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="fname">City / Town</label>
            </div>
            <div class="col-75">
              <input type="text" id="city" name="city" placeholder="enter city.." required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="fname">Block / Village</label>
            </div>
            <div class="col-75">
              <input type="text" id="block" name="block" placeholder="enter block/village.." required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="fname">Amount Per Patients</label>
            </div>
            <div class="col-75">
              <input type="text" id="amount" name="amount" placeholder="enter amount.." required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="fname">Number of staf</label>
            </div>
            <div class="col-75">
              <input type="number" id="staf" name="staf" placeholder="enter number of staf.." required>
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
<?php
include("../db.php");
if (isset($_POST["submit"])) {
  $name=$_POST["fname"];
  $state=$_POST["state"];
  $city=$_POST["city"];
  $block=$_POST["block"];
  $amount=$_POST["amount"];
  $staf=$_POST["staf"];
  $d=date('d/m/Y');
  $sql="insert into branch(name,state,city,block,amount,staf,created_at)
  values('$name','$state','$city','$block','$amount','$staf','$d')
  ";
  $run=mysqli_query($con,$sql);
  if ($run==true) {
    echo"
  <script>
  alert('Registration done.');
  </script>
    ";
  }else {
    echo"
  <script>
  alert('please fill all details');
  </script>
    ";
  }
}


?>
