<?php
include("header.php");
?>
<?php
include("../db.php");
if(isset($_POST["submit"])){
  $id=$_POST["id"];
  $name=$_POST["fname"];
  $state=$_POST["state"];
  $city=$_POST["city"];
  $block=$_POST["block"];
  $amount=$_POST["amount"];
  $staf=$_POST["staf"];
  $d=date('d/m/Y');
  $sql="update branch set name='$name',state='$state',city='$city',
  block='$block',amount='$amount',staf='$staf'
  ,created_at='$d'
  where id=$id";
  $run=mysqli_query($con,$sql);
  if ($run==true) {

    echo"
  <script>
  alert('updation successfully..');
  window.location='branch.php';
  </script>
    ";
  }else{
    echo"
  <script>
  alert('please insert all details ..');
  window.location='branch.php';
  </script>
    ";
  }
}

?>
