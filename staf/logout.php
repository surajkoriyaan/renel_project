<?php
session_start();
if (!isset($_SESSION['email1'])) {
  header('location:../login.php');
}
else {
  session_unset();
  session_destroy();
  header('location:../login.php');
}
?>
