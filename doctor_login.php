<?php
session_start();
if (isset($_POST['submit2'])) {
  include('db.php');
  $email=$_POST['email2'];
  $password=$_POST['password2'];
  $sql="select * from doctor where email='$email' and password='$password'";
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


      $_SESSION['email2']=$row['email'];

      ?>
      <script type="text/javascript">
        alert('login successfully');
        window.location="doctor/index.php";
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
