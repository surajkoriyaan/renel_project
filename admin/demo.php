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
        <a href="#">
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
        <p><?php

  echo $_SESSION['email3'];
        ?></p>

    <!--    <div class="user">

          <img src="img/admin/<?php echo $_SESSION['img']; ?>" alt="" >
        </div> -->
    </div>
    <div class="cardBox">
      <div class="card">
        <div>
          <div class="numbers">
            <?php
           include("../db.php");
           $s1="select * from admin";
           $d=mysqli_query($con,$s1);
           $c=mysqli_num_rows($d);
           echo $c;
            ?>

          </div>
          <div class="cardName">
            Admin
          </div>
        </div>
        <div class="iconBox">
          <i class="fa fa-adn" aria-hidden="true"></i>
        </div>
      </div>
      <div class="card">
        <div>
          <div class="numbers">
            <?php
           include("../db.php");
           $s1="select * from branch";
           $d=mysqli_query($con,$s1);
           $c=mysqli_num_rows($d);
           echo $c;
            ?>
          </div>
          <div class="cardName">
            Brand
          </div>
        </div>
        <div class="iconBox">
          <i class="fa fa-tree" aria-hidden="true"></i>
        </div>
      </div>
      <div class="card">
        <div>
          <div class="numbers">
            <?php
           include("../db.php");
           $s1="select * from doctor";
           $d=mysqli_query($con,$s1);
           $c=mysqli_num_rows($d);
           echo $c;
            ?>
          </div>
          <div class="cardName">
            Doctor
          </div>
        </div>
        <div class="iconBox">
          <i class="fa fa-user-md" aria-hidden="true"></i>
        </div>
      </div>
      <div class="card">
        <div>
          <div class="numbers">
            <?php
           include("../db.php");
           $s1="select * from staf";
           $d=mysqli_query($con,$s1);
           $c=mysqli_num_rows($d);
           echo $c;
            ?>
          </div>
          <div class="cardName">
            Staf
          </div>
        </div>
        <div class="iconBox">
        <i class="fa fa-user-plus" aria-hidden="true"></i>
        </div>
      </div>
      <div class="card">
        <div>
          <div class="numbers">
            <?php
           include("../db.php");
           $s1="select * from patients";
           $d=mysqli_query($con,$s1);
           $c=mysqli_num_rows($d);
           echo $c;
            ?>
          </div>
          <div class="cardName">
            Patients
          </div>
        </div>
        <div class="iconBox">
          <i class="fa fa-heartbeat" aria-hidden="true"></i>
        </div>
      </div>
    </div>
    <div class="details">
      <div class="recentOrders">
        <div class="cardHeader">
          <h2>Patients</h2>
          <a href="#" class="btn">View All</a>
        </div>
        <table id="myTable">
          <thead>
            <tr>
              <th>S.n</th>
              <th>Name</th>
              <th>Adhar Number</th>
              <th>Mobile Number</th>
              <th>Branch</th>
              <th>Amount</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <?php
           include("../db.php");
           $c=1;
           $sql="select * from patients";
           $run=mysqli_query($con,$sql);
           while ($row=mysqli_fetch_assoc($run)) {
             ?>
             <tr>
               <td><?php echo $c++; ?></td>
               <td><?php echo $row['name'];?></td>
               <td><?php echo $row['adhar'];?></td>
               <td><?php echo $row['mobile'];?></td>
               <td><?php echo $row['branch'];?></td>
                <td><?php echo $row['amount'];?></td>
                <td><?php echo $row['created_at'];?></td>
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
