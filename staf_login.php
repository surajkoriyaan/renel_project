<?php
session_start();
if (isset($_POST['submit1'])) {
  include('db.php');
  $email=$_POST['email1'];
  $password=$_POST['password1'];
  $sql="select * from staf where email='$email' and password='$password'";
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


      $_SESSION['email1']=$row['email'];
      $_SESSION['branch1']=$row['branch'];
      ?>
      <script type="text/javascript">
        alert('login successfully');
        window.location="staf/staf_home.php";
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
