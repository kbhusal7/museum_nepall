<?php
   session_start();
//   print_r($_SESSION);
   if (!isset($_SESSION['login'])) {
   
     header('location:index.php?msg=You are not loggen in');
   
}



