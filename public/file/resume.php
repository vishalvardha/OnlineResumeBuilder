<?php require_once('../../private/initialize.php'); 

$id = $_GET['id'];


$sql = "SELECT * FROM work_experience ";
$sql .= "WHERE id='".$id."'";

$result = mysqli_query($db,$sql); ?>
<?php
$sql1 =  "SELECT * FROM person_details ";
$sql1 .= "WHERE p_id='".$id."'";

$result1 = mysqli_query($db,$sql1);
$subject1 = mysqli_fetch_assoc($result1);


$sql2 =  "SELECT * FROM social ";
$sql2 .= "WHERE id='".$id."'";

$result2 = mysqli_query($db,$sql2);
$subject2 = mysqli_fetch_assoc($result2);


$sql3 =  "SELECT * FROM education ";
$sql3 .= "WHERE id='".$id."'";

$result3 = mysqli_query($db,$sql3);
//$subject3 = mysqli_fetch_assoc($result3);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $subject1['name']; ?> | Resume</title>
<link href="https://fonts.googleapis.com/css?family=Caveat|Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/rstyle.css'); ?>">
        <link rel="stylesheet" href="<?php echo url_for('stylesheets/font-awesome/css/font-awesome.min.css'); ?>">
</head>
<body>
    <!-- // Intro -->
    <header>
        <div class="content-wraper">
      <img class = "profile-img" src="<?php echo url_for("images/$id.png"); ?>" alt = "sdlkfhsdjfskdfks">;
                
        <div class="col-wide">
        <h1><?php echo $subject1['name']; ?></h1>
        <h2><?php echo $subject1['job_title']; ?></h2>
        <p><?php echo $subject1['p_summary']; ?></p>
    </div>
            </div>
        <a href="javascript:forprint()" class="down btn" ><i class="fa fa-file-pdf-o fa-1.5x" aria-hidden="true"></i>&nbsp;Download PDF</a>
            </header>
    
    <main> 
        <!-- // Work Experience -->
        <section class="work">
            <div class="content-wraper">
            <h2>Work Experience</h2>
        <?php  $projects = array();
    while ($project =  mysqli_fetch_assoc($result))
    {
        $projects[] = $project;
    }
    foreach ($projects as $subject0):
    
                ?>
            <!-- Job Details: copy this whole block to add more jobs -->
            <h3><?php echo $subject0['job_title']; ?></h3>
            <h4><?php echo $subject0['s_date']."  -  ". $subject0['e_date']; ?></h4>
            
            <!-- Add as many paragraphs as you need. -->
            <p><?php echo $subject0['j_summary']; ?></p>
            <?php endforeach; ?>
           
            <!-- end of Job Details block. -->
            </div>
        </section>
        <!-- // Education -->
        <section class="edu">
               <div class="content-wraper">
            <h2>Education</h2>
            <?php  $projects = array();
    while ($project =  mysqli_fetch_assoc($result3))
    {
        $projects[] = $project;
    }
    foreach ($projects as $subject3):?>
            <!-- School details: copy this whole block to add more schools. -->
            <h3><?php echo $subject3['school_name'];?> </h3>
            <h4><?php echo $subject3['y_o_a']; ?></h4>
            <p><?php echo $subject3['major'];  ?></p>
            <p><?php echo $subject3['e_summary']; ?></p>
              <?php endforeach; ?>
            </div>
        </section>
    </main>
    
    <!-- // Footer & contact info -->
    <footer>
           <div class="content-wraper">
        <h2>Let's Keep in Touch!</h2>
        
        <!-- Social media and contact links. Add or remove any networks. -->
        <div>
            <a href="mailto:<?php echo $subject2['email']; ?>"><?php echo $subject2['email']; ?></a>
            <a href="<?php echo $subject2['twitter']; ?>" target="_blank">Twitter</a>
            <a href="<?php echo $subject2['linkedin']; ?>" target="_blank">LinkedIn</a>
            <a href="<?php echo $subject2['facebook']; ?>" target="_blank">Facebook</a>
        </div>

        <p>Copyright 2017 by <?php echo $subject1['name']; ?></p>
        </div>
    </footer>
    <br>
     <div align="center" style="color:black;">
       &nbsp;&nbsp;&nbsp;  <a href="<?php echo url_for('/file/enter.php?id='.$id); ?>"><i class="fa fa-backward" aria-hidden="true"></i>Back to Main</a>
		</div>
</body>
</html>


<script>
function forprint(){
if (!window.print){

return
}
window.print()
}
</script>