<?php
require_once('database-config.php');
function db_connect(){
    $connect = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
  
    return $connect;
}
function db_disconnect($connect)
{
    if(isset($connect)){
    mysqli_close($connect);}
}
?>