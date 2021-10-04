<?php
session_start();
if (!isset($_SESSION['email3'])) {
  header('location:../login.php');
}

?>
