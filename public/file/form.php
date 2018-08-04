<?php require_once('../../private/initialize.php');  ?>
<?php
$title = "Enter Details";
include(PRIVATE_PATH.'/shared/resume_header.php');?>
<?php 
$user = $_GET['user'];

$sql = "SELECT * FROM person ";
$sql .="WHERE user='".$user."'";

$result = mysqli_query($db,$sql);
$rows = mysqli_num_rows($result);

if($rows==1)
{
 ?>

<script>
alert('you have already built your resume\n Update now');
window.location.href="<?php echo url_for('file/enter.php?user='.$user); ?>";
</script>

<?php
}else{
?>
<header>
    <div class="content-wrap1">
    <img class="pic"src="<?php echo url_for('/images/a.png'); ?>" alt="pic of the company">
    <h1>Resume Builder</h1>
        <h1></h1>
   
        </div>
   
</header> 
 <?php echo display_errors($errors); ?>
<form action="<?php echo url_for('/file/savedata.php?user='.$user); ?>" method="post">
    
<section class="sec1">
    <div class="content-wrap">
     <h2><i class="fa fa-info-circle" aria-hidden="true"></i> Person Details</h2>  
        <dl>
            <dt>Enter Name:</dt>
            <dd><input type="text" name="name"> </dd>   
        </dl>
        <dl>
            <dt>Job Title:</dt> 
            <dd><select name="job" class="selec"><option>select</option><option>Software Engineer</option><option>Front End Developer</option></select></dd>
        </dl>
        <dl>
            <dt>Profile Summary:</dt>
            <dd><textarea rows="8" cols="60" name="profile"></textarea></dd>
        </dl>
        </div>
</section>    
<section class="sec2">
    <div class="content-wrap">
    <h2><i class="fa fa-etsy" aria-hidden="true"></i> Work Experience</h2>    
        <dl>
            <dt>Job Title : </dt>
            <dd><select name="wjob" class="selec"><option>select</option><option>Software Engineer</option><option>Front End Developer</option></select></dd>
        </dl>
        <dl>
            <dt>Date of Job : </dt>
            <dd><input type="date" name ="date"></dd></dl>
        <dl>
            <dt>Job Summary : </dt>
            <dd><textarea rows="8" cols="60" name="wsummary"></textarea></dd></dl>
</div>
</section>
<section class="sec3">
    <div class="content-wrap">
    <h2><i class="fa fa-university" aria-hidden="true"></i> Education</h2>
        <dl>
        <dt> School Name : </dt>
        <dd><input type="text" name = "school"> </dd>
    </dl>
   <dl>
       <dt>Year of Attendence : </dt>
       <dd><input type="date" name ="year"></dd>
    </dl> 
    <dl>
        <dt>Major : </dt>
        <dd><input type="text" name="major"></dd>
    </dl>
    <dl>
        <dt>Summary : </dt>
        <dd><textarea rows="8" cols="60" name="esummary"></textarea></dd>
    </dl>
        </div>
</section>    
<section class="sec4">
    <div class="content-wrap">
    <h2><i class="fa fa-user-circle" aria-hidden="true"></i> Let's be in touch</h2>
        <dl>
            <dt><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; Email:</dt><dd><input type="email" name ="email"></dd>
        </dl>
     <dl>
           <dt><i class="fa fa-link" aria-hidden="true"></i>&nbsp; website:</dt><dd><input type="url" name ="site"></dd>
    </dl>
    <dl>
        <dt><i class="fa fa-twitter" aria-hidden="true"></i>&nbsp; Twitter:</dt><dd><input type="url" name="twit"></dd></dl>
    <dl><dt><i class="fa fa-linkedin-square" aria-hidden="true"></i>&nbsp; LinkedIn:</dt><dd><input type="url" name="link"></dd> </dl>
      <dl><dt><i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp; Facebook:</dt> <dd><input type="url" name ="face"></dd>
    </dl>
    <dl>
        <span style="color:black"><i class="fa fa-picture-o" aria-hidden="true"></i></span>&nbsp;<input type="file" name="browse" style="font-size:18px;">
    </dl>
        <input class="button" type="submit" name="submit">
        <input class="button" type="reset" name = "reset">
    </div>
</section>    
   
   <?php include(PRIVATE_PATH.'/shared/resume_footer.php');?>
    <?php } ?>