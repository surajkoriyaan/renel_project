<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet"
href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
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
     <span class="icon">  <i class="fa fa-adn" aria-hidden="true"></i></span>
     <span class="title">Admin</span>
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
          <h2>Registered Doctor</h2>
          <a href="doctor_registration.php" class="btn">Add</a>
        </div>
        <table id="myTable">
          <thead>
            <tr>
              <th>S.n</th>
              <th>Name</th>
              <th>Mobile Number</th>
              <th>Username/Email</th>
              <th>Photo</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
           include("../db.php");
           $c=1;
           $sql="select * from doctor";
           $run=mysqli_query($con,$sql);
           while ($row=mysqli_fetch_assoc($run)) {
             ?>
             <tr>
               <td><?php echo $c++; ?></td>
               <td><?php echo $row['name'];?></td>
               <td><?php echo $row['mobile'];?></td>
               <td><?php echo $row['email'];?></td>

               <td> <img src="img/doctor/<?php echo $row['img'] ?>" alt="" style="height:40px;width:40px"> </td>
             <td> <a href="doctor_reg_edit.php?id=<?php echo $row['id'] ;?>">edit</a> /
               <a href="del_doctor.php?id=<?php echo $row['id'] ;?>">delete</a> </td>
             </tr>

             <?php
           }

            ?>
          </tbody>
        </table>
      </div>
      <div class="recentCustomers">
        <div class="cardHeader">
        Copyright (c) 2021 , All Rights Reserved.

        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"
src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"
src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
  </body>
</html>
