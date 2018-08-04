<?php require_once('../../private/initialize.php');  ?>
<?php
$title = "Update Resume";
include(PRIVATE_PATH.'/shared/resume_header.php');?>
<?php 
$user = $_GET['user'];

$sql = "SELECT * FROM work ";
$sql .= "WHERE user='".$user."'";

$result = mysqli_query($db,$sql);
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



$sql1 =  "SELECT * FROM person ";
$sql1 .= "WHERE user='".$user."'";

$result1 = mysqli_query($db,$sql1);
$subject1 = mysqli_fetch_assoc($result1);


$sql2 =  "SELECT * FROM touch ";
$sql2 .= "WHERE user='".$user."'";

$result2 = mysqli_query($db,$sql2);
$subject2 = mysqli_fetch_assoc($result2);


$sql3 =  "SELECT * FROM education ";
$sql3 .= "WHERE user='".$user."'";

$result3 = mysqli_query($db,$sql3);
$subject3 = mysqli_fetch_assoc($result3);





?>
<header>
    <div class="content-wrap1">
    <img class="pic"src="<?php echo url_for('/images/a.png'); ?>" alt="pic of the company">
    <h1>Update Resume</h1>
        <h1></h1>
   
        </div>
</header>    
<form action="<?php echo url_for('/file/updatedata.php?user='.$user); ?>" method="post">
    
<section class="sec1">
    <div class="content-wrap">
     <h2><i class="fa fa-info-circle" aria-hidden="true"></i> Person Details</h2>  
        <dl>
            <dt>Enter Name:</dt>
            <dd><input type="text" name="name" value="<?php echo $subject1['name']; ?>"> </dd>   
        </dl>
        <dl>
            <dt>Job Title:</dt> 
            <dd><select name="job" class="selec" value="<?php echo $ubject1['job']; ?>"><option>select</option><option>Software Engineer</option><option>Front End Developer</option></select></dd>
        </dl>
        <dl>
            <dt>Profile Summary:</dt>
            <dd><textarea rows="8" cols="60" name="profile" value="<?php echo $subject1['profile']; ?>"></textarea></dd>
        </dl>
        </div>
</section>    
<section class="sec2">
    <div class="content-wrap">
    <h2><i class="fa fa-etsy" aria-hidden="true"></i> Work Experience</h2>    
        <dl>
            <dt>Job Title : </dt>
            <dd><select name="wjob" class="selec"  value="<?php echo $subect['wjob']; ?>"><option>select</option><option>Software Engineer</option><option>Front End Developer</option></select></dd>
        </dl>
        <dl>
            <dt>Date of Job : </dt>
            <dd><input type="date" name ="date" value="<?php echo $subject['date']; ?>"></dd></dl>
        <dl>
            <dt>Job Summary : </dt>
            <dd><textarea rows="8" cols="60" name="wsummary" value="<?php echo $subject['wsummary']; ?>"></textarea></dd></dl>
</div>
</section>
<section class="sec3">
    <div class="content-wrap">
    <h2><i class="fa fa-university" aria-hidden="true"></i> Education</h2>
        <dl>
        <dt> School Name : </dt>
        <dd><input type="text" name = "school" value="<?php echo $subject3['school']; ?>"> </dd>
    </dl>
   <dl>
       <dt>Year of Attendence : </dt>
       <dd><input type="date" name ="year" value="<?php echo $subject3['year']; ?>"></dd>
    </dl> 
    <dl>
        <dt>Major : </dt>
        <dd><input type="text" name="major" value="<?php echo $subject3['major']; ?>"></dd>
    </dl>
    <dl>
        <dt>Summary : </dt>
        <dd><textarea rows="8" cols="60" name="esummary" value="<?php echo $subject3['esummary']; ?>"></textarea></dd>
    </dl>
        </div>
</section>    
<section class="sec4">
    <div class="content-wrap">
    <h2><i class="fa fa-user-circle" aria-hidden="true"></i> Let's be in touch</h2>
        <dl>
            <dt><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; Email:</dt><dd><input type="email" name ="email" value="<?php echo $subject2['email']; ?>"></dd>
        </dl>
     <dl>
           <dt><i class="fa fa-link" aria-hidden="true"></i>&nbsp; website:</dt><dd><input type="url" name ="site" value="<?php echo $subject2['site']; ?>"></dd>
    </dl>
    <dl>
        <dt><i class="fa fa-twitter" aria-hidden="true"></i>&nbsp; Twitter:</dt><dd><input type="url" name="twit" value="<?php echo $subject2['twit']; ?>"></dd></dl>
    <dl><dt><i class="fa fa-linkedin-square" aria-hidden="true"></i>&nbsp; LinkedIn:</dt><dd><input type="url" name="link" value="<?php echo $subject2['link']; ?>"></dd> </dl>
      <dl><dt><i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp; Facebook:</dt> <dd><input type="url" name ="face" value="<?php echo $subject2['face']; ?>"></dd>
    </dl>
    <dl>
        <span style="color:black"><i class="fa fa-picture-o" aria-hidden="true"></i></span>&nbsp;<input type="file"  style="font-size:18px;" value="<?php echo $subject2['browse']; ?>">
    </dl>
        <input class="button" type="submit" name="update" value="Update" >
        <input class="button" type="reset" name = "reset">
    </div>
</section>    

   <?php include(PRIVATE_PATH.'/shared/resume_footer.php');?>
    