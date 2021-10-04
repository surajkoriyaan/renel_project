<?php
session_start();
if (!isset($_SESSION['email1'])) {
  header('location:../login.php');
}

?>
