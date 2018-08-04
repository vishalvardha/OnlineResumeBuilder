<?php 
require_once('../../private/initialize.php');
$user = $_GET['user'];

if(ispost())
{
    
    $wjob = $_POST['wjob'];
    $date = $_POST['date'];
    $wsummary = $_POST['wsummary'];
    
    $sql = "UPDATE work ";
    $sql .= "SET wjob='".$wjob;
     $sql .= "',date='".$date;
     $sql .= "', wsummary='".$wsummary;
    $sql .="' WHERE user='".$user."'";
    
    $result = mysqli_query($db,$sql);
    
  
    $email  = $_POST['email'];
    $site = $_POST['site'];
    $twit =$_POST['twit'];
    $link = $_POST['link'];
    $face = $_POST['face'];
    $browse = $_POST['browse'];
    
    $sql1 = "UPDATE touch ";
    $sql1 .= "SET email='".$email;
    $sql1 .= "',twit='".$twit;
    $sql1 .="',link='".$link;
    $sql1 .="',face='".$link;
    $sql1 .="', browse='".$browse;
    $sql1 .="' WHERE user='".$user."'";
    
    $result1 = mysqli_query($db,$sql1);
    
    
    
    $name = $_POST['name'];
    $job = $_POST['job'];
    $profile = $_POST['profile'];
    
    $sql2 = "UPDATE person ";
    $sql2 .= "SET name='".$name;
    $sql2 .= "', job='".$job;
    $sql2 .= "', profile='".$profile;
    $sql2 .= "' WHERE user='".$user."'";
    
    $result2 = mysqli_query($db,$sql2);
    
    
    
    $school = $_POST['school'];
    $year = $_POST['year'];
    $major = $_POST['major'];
    $esummary = $_POST['esummary'];
    
    
    $sql3 = "UPDATE education ";
    $sql3 .= "SET school='".$school;
    $sql3 .="', year='".$year;
    $sql3 .="', major='".$major;
    $sql3 .="', esummary='".$esummary;
    $sql3 .="' WHERE user='".$user."'";
    
    $result3 = mysqli_query($db,$sql3);

if($result3)
{?>  <script>
    window.location.href="<?php echo url_for('file/enter.php?user='.$user); ?>";
    alert("succesfully updated");
</script>
    <?php 
}else {
    ?>
<script>alert("not updated");</script>

<?php 
}
}


?>