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
  </head>
  <body>
<div class="container">
  <div class="navigation">
    <ul>
      <li>
        <a href="#">
     <span class="icon"><i class="fa fa-apple" aria-hidden="true"></i></span>
     <span class="title"> <h2>Admin</h2> </span>
     </a>
      </li>
      <li>
        <a href="#">
     <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
     <span class="title"> dashboard </span>
     </a>
      </li>
      <li>
        <a href="#">
     <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
     <span class="title">Patients </span>
     </a>
      </li>
      <li>
        <a href="#">
     <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
     <span class="title">Edit Patients</span>
     </a>
      </li>
      <li>
        <a href="#">
     <span class="icon"><i class="fa fa-medkit" aria-hidden="true"></i></span>
     <span class="title">Dialasys</span>
     </a>
      </li>
      <li>
        <a href="#">
     <span class="icon"><i class="fa fa-comments" aria-hidden="true"></i></span>
     <span class="title"> Messages </span>
     </a>
      </li>
      <li>
        <a href="#">
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
        <div class="user">
          <img src="face6.jpg" alt="" >
        </div>
    </div>
    <div class="cardBox">
      <div class="card">
        <div>
          <div class="numbers">
            12
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
            80
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
            208
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
            $278
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
            1,042
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
          <h2>Recent Order</h2>
          <a href="#" class="btn">View All</a>
        </div>
        <table>
          <thead>
            <tr>
              <td>Branch</td>
              <td>Name</td>
              <td>Adhar No</td>
              <td>Sex</td>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>Ranchi</td>
              <td>Suraj kumar</td>
              <td>1234567890123456</td>
              <td>Male</td>
            </tr>
            <tr>
              <td>Ranchi</td>
              <td>Suraj kumar</td>
              <td>1234567890123456</td>
              <td>Male</td>
            </tr>
            <tr>
              <td>Ranchi</td>
              <td>Suraj kumar</td>
              <td>1234567890123456</td>
              <td>Male</td>
            </tr>
            <tr>
              <td>Ranchi</td>
              <td>Suraj kumar</td>
              <td>1234567890123456</td>
              <td>Male</td>
            </tr>
            <tr>
              <td>Ranchi</td>
              <td>Suraj kumar</td>
              <td>1234567890123456</td>
              <td>Male</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="recentCustomers">
        <div class="cardHeader">
          <h2>Recent Customer</h2>

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
