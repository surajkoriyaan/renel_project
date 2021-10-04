<?php
include("header.php");
?>
<?php
include("../db.php");
$id=$_GET["id"];
$sql="select * from staf where id=$id";
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
    $email=$row['email'];
    $password=$row['password'];

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
          <h2>Update details</h2>
          <a href="staf.php" class="btn">View All Registered Staf</a>
        </div>
        <div class="container">
        <form action="update_staf_details.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-25">
              <label for="fname">Full Name</label>
            </div>
            <div class="col-75">
              <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" required>
              <input type="text" id="fname" name="fname" value="<?php echo $name; ?>" required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Adhar Number</label>
            </div>
            <div class="col-75">
              <input type="number" id="adhar" name="adhar" value="<?php echo $adhar; ?>" required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Date of Birth</label>
            </div>
            <div class="col-75">
              <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>" required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="country">Gender</label>
            </div>
            <div class="col-75">
              <select id="gender" name="gender">
                <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="other">other</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="subject">Address</label>
            </div>
            <div class="col-75">
              <textarea id="address" name="address"  style="height:80px" required><?php echo $address; ?>
              </textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Mobile Number</label>
            </div>
            <div class="col-75">
              <input type="number" id="mobile" name="mobile" value="<?php echo $mobile; ?>" required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="fname">Branch</label>
            </div>
            <div class="col-75">
              <input type="text" id="branch" name="branch" value="<?php echo $branch; ?>" required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="lname">Username / Email</label>
            </div>
            <div class="col-75">
              <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Password</label>
            </div>
            <div class="col-75">
              <input type="password" id="password" name="password" value="<?php echo $password; ?>" required>
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
if(isset($_POST["submit"])){
  $name=$_POST["fname"];
  $adhar=$_POST["adhar"];
  $dob=$_POST["dob"];
  $gender=$_POST["gender"];
  $address=$_POST["address"];
  $mobile=$_POST["mobile"];
  $branch=$_POST["branch"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $file=$_FILES["file"]["name"];
  $tmp=$_FILES["file"]["tmp_name"];
  $path='img/staf/';
  $d=date('d/m/Y');

  $sql2="select * from staf where email='$email'";
    $run2=mysqli_query($con,$sql2);
    if (mysqli_num_rows($run2)<1) {


  $sql="insert into staf(name,adhar,dob,gender,address,mobile,branch,email,password,img,created_at)
  values('$name','$adhar','$dob','$gender','$address','$mobile','$branch','$email','$password','$file','$d')";
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
  alert('please insert all details curefully..');
  </script>
    ";
  }
}
else {
  echo"
<script>
alert('this email or username already exits');
</script>
  ";
}
}

?>
