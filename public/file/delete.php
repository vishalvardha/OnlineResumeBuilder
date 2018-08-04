<?php 
require_once('../../private/initialize.php');
$user = $_GET['user'];
 $sqlu = "SELECT * FROM work ";
$sqlu .= "WHERE user='".$user."'";

$result = mysqli_query($db,$sqlu);
$subject = mysqli_fetch_assoc($result);
$per = $subject['user'];
if($per=='')
{?>
<script>

 window.location.href="<?php echo url_for('file/enter.php?user='.$user); ?>";
    alert("You have to first Build your Resume");
</script>
<?php
}
if(ispost())
{
   
    $sql = "DELETE FROM work WHERE user='".$user."'";
    $sql1 = "DELETE FROM touch WHERE user='".$user."'";
    $sql2 = "DELETE FROM person WHERE user='".$user."'";
    $sql3 = "DELETE FROM education WHERE user='".$user."'";
    
    $result = mysqli_query($db,$sql);
     $result1 = mysqli_query($db,$sql1);
     $result2 = mysqli_query($db,$sql2);
     $result3 = mysqli_query($db,$sql3);
    
    if($sql3)
    {?>
       <script>

 window.location.href="<?php echo url_for('file/enter.php?user='.$user); ?>";
    alert("succesfully Deleted \n\n Now you can build a new Resume :)");
</script> 
  <?php  }else {
echo "false";
}
    
    
}
$title = "Wanna Delete?";
include(PRIVATE_PATH.'/shared/resume_header.php');?>
<header>
<h1>You Wanna Delete your Resume</h1>
</header>
<form action="" method="post">
<section class="sec1">
<h2> Are you Sure?</h2>
<input type="submit"  class="button" value="yes">
<input type="reset" class="button" name="reset" value="no">


</section>
    
</form>
</section>
<?php include(PRIVATE_PATH.'/shared/resume_footer.php');
?>