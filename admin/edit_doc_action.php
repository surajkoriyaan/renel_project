<?php
include("header.php");
?>
<?php
include("../db.php");
if(isset($_POST["submit"])){
  $id=$_POST['id'];
  $name=$_POST["fname"];
  $adhar=$_POST["adhar"];
  $dob=$_POST["dob"];
  $gender=$_POST["gender"];
  $address=$_POST["address"];
  $mobile=$_POST["mobile"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $file=$_FILES["file"]["name"];
  $tmp=$_FILES["file"]["tmp_name"];
  $path='img/doctor/';
  $d=date('d/m/Y');
  $sql="update doctor set name='$name',adhar='$adhar',dob='$dob',
  gender='$gender',address='$address',mobile='$mobile',email='$email',
  password='$password',img='$file',created_at='$d'
  where id=$id";
  $run=mysqli_query($con,$sql);
  if ($run==true) {
    move_uploaded_file($tmp,$path.$file);
    echo"
  <script>
  alert('updation successfully..');
  window.location='doctor.php';
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
