<?php
include("header.php");
?>
<?php
include_once("../db.php");
  $id=$_GET["id"];
  $sql="delete from doctor where id=$id";
  $query=mysqli_query($con,$sql);
  if ($query==true) {
    echo"<script>
         window.alert('deleted successfully');
         window.location='doctor.php';
         </script>";
  }


 ?>
