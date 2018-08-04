<?php
require_once('../../private/initialize.php');
   session_start();
   echo "hello";
   if(session_destroy()) {
      redirect_to('index.php');
   }
?>