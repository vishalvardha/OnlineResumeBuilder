<?php
   require_once('../../private/initialize.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select user from authentication where user = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['user'];
   
   if(!isset($_SESSION['login_user'])){
       redirect_to('index.php');
   }
?>