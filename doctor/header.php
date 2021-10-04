<?php
session_start();
if (!isset($_SESSION['email2'])) {
  header('location:../login.php');
}

?>
