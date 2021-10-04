<?php
include("header.php");
?>
<?php
$n=$_SESSION['branch1'];
include("../db.php");
$query="select * from branch where name='$n'";
 $run=mysqli_query($con,$query);
 while($data=mysqli_fetch_assoc($run)){
   $amount=$data['amount'];
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
          <h2>Patients Registration</h2>
          <a href="staf_home.php" class="btn">View All Registered Patients</a>
        </div>
        <div class="container">
        <form action="patient_reg.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-25">
              <label for="fname">Full Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="fname" placeholder="Your name.." required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Adhar Number</label>
            </div>
            <div class="col-75">
              <input type="number" id="adhar" name="adhar" placeholder="Your adhar number.." required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Date of Birth</label>
            </div>
            <div class="col-75">
              <input type="date" id="dob" name="dob" placeholder="Your date of birth.." required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="country">Gender</label>
            </div>
            <div class="col-75">
              <select id="gender" name="gender" required>
                <option value="0">select gender</option>
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
              <textarea id="address" name="address" placeholder="address.." style="height:80px" required></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label>Mobile Number</label>
            </div>
            <div class="col-75">
              <input type="number" id="mobile" name="mobile" placeholder="Your mobile number.." required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label>Branch</label>
            </div>
            <div class="col-75">
              <input type="text" id="branch" name="branch" value="<?php echo $_SESSION['branch1'] ?>" readonly>
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
              <input type="file" id="file" name="file" placeholder="photo" required>
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
<?php

include("../db.php");
if(isset($_POST["submit"])){
  $name=$_POST["fname"];
  $adhar=$_POST["adhar"];
  $dob=$_POST["dob"];
  $gender=$_POST["gender"];
  $address=$_POST["address"];
  $mobile=$_POST["mobile"];
  $branch=$_POST["branch"];
  $amount=$_POST["amount"];
  $file=$_FILES["file"]["name"];
  $tmp=$_FILES["file"]["tmp_name"];
  $path='img/';
  $d=date('d/m/Y');

  $sql="insert into patients(name,adhar,dob,gender,address,mobile,branch,amount,img,created_at)
  values('$name','$adhar','$dob','$gender','$address','$mobile','$branch','$amount','$file','$d')";
  $run=mysqli_query($con,$sql);
  if ($run==true) {
    move_uploaded_file($tmp,$path.$file);
    echo"
  <script>
  alert('Registration successfully..');
  </script>
    ";
  }else{
    echo"
  <script>
  alert('please insert all details ..');
  </script>
    ";
  }
}


?>
