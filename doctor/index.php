<?php
include("header.php");
?>
<?php
include("../db.php");
$query="SELECT * FROM chart ORDER BY id DESC LIMIT 10";
$result=mysqli_query($con,$query);
$chart_data='';
while($row=mysqli_fetch_array($result)){
  $chart_data.="{days:'".$row["days"]."',patients:".$row["patient"]."}, ";
}
$chart_data=substr($chart_data,0,-2);
?>
<?php
include("../db.php");
$dd=date('d/m/Y');
$s2="select * from patients where created_at='$dd'";
$q=mysqli_query($con,$s2);
$cc=mysqli_num_rows($q);

$s3="select * from chart where days='$dd'";
$cd=mysqli_query($con,$s3);
$cf=mysqli_num_rows($cd);
echo $cf;
if($cf<1){
  $inst="insert into chart(days,patient) values('$dd','$cc')";
  mysqli_query($con,$inst);
}elseif ($cf==1) {
  $up="update chart set patient='$cc' where days='$dd'";
  mysqli_query($con,$up);
}else {
//echo"eroro";
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  </head>
  <body>
<div class="container1">
  <div class="navigation">
    <ul>
      <li>
        <a href="index.php">
     <span class="icon"><i class="fa fa-apple" aria-hidden="true"></i></span>
     <span class="title"> <h2>Doctor</h2> </span>
     </a>
      </li>
      <li>
        <a href="index.php">
     <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
     <span class="title"> dashboard </span>
     </a>
      </li>
      <li>
        <a href="patient.php">
     <span class="icon">  <i class="fa fa-heartbeat" aria-hidden="true"></i></span>
     <span class="title">Patients</span>
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
    <p style="padding-left:22px;">Bar Chat,  last 10 days patients registration data</p>
    <div class="details">
      <div class="recentOrders">


        <div id="chart">
        </div>
      </div>
      <div class="recentCustomers">
        <div class="cardHeader">
          Copyright (c) 2021 , All Rights Reserved.

        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  Morris.Bar({
    element:'chart',
    data:[<?php echo $chart_data; ?>],
    xkey:'days',
    ykeys:['patients'],
    labels:['patients'],
    hideHover:'auto'
  });
</script>
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

  </body>
</html>
