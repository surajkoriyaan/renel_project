<?php
session_start();
if (isset($_POST['submit3'])) {
  include('db.php');
  $email=$_POST['email3'];
  $password=$_POST['password3'];
  $sql="select * from admin where email='$email' and password='$password'";
  $run=mysqli_query($con,$sql);
  if (mysqli_num_rows($run)<1) {
    ?>
    <script type="text/javascript">
      alert('please enter valide email and password');
      window.location="login.php";
    </script>
    <?php
  }
  else {
    while ($row=mysqli_fetch_assoc($run)) {


      $_SESSION['email3']=$row['email'];
    
      ?>
      <script type="text/javascript">
        alert('login successfully');
        window.location="admin/demo.php";
      </script>
      <?php
    }
  }
}
else {
  ?>
  <script type="text/javascript">
    alert('something went wrong');
   window.location="login.php";
  </script>
  <?php
}

?>
