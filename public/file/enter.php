<?php require_once('../../private/initialize.php');
       include('session.php');
?>
<?php
$title = "Home";
include(PRIVATE_PATH.'/shared/resume_header.php');
$id = $_GET['id'];
include(PUBLIC_PATH.'/file/savedata.php');
?>
<header>
    <a onclick="logout()" class="button1"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;Account</a>

    <h1> Online Resume Builder</h1>
</header>   
<div id = "asd">
<div id = "hide" style = "display:none">
  
    <a href = ""><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Personal Details </a><br>
    <a href = ""><i class="fa fa-bold" aria-hidden="true"></i>&nbsp;Build Resume</a><br>
    <a href = ""><i class="fa fa-question" aria-hidden="true"></i>&nbsp;Contact</a><br><br>
    
  <a style="float:left" href = ""><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;settings </a>
  <a style = "display:inline-block" href = "<?php echo url_for('/file/logout.php'); ?>" ><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;logout </a>
 </div>
</div>
  <div class="whole">
    
<div class="imgre">
      
  
<input type="button" class="button2" value="build Resume" onclick="document.getElementById('id01').style.display='block'; document.querySelector('body').style.overflow = 'hidden';">
    <img src="<?php echo url_for('/images/build.jpg'); ?>" alt="resume" style="width:54em;height:403px;">

</div>
<div class="table">
   <a href=""><i class="fa fa-home" aria-hidden="true"></i>&nbsp; Home</a>
<a href=""><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;Settings</a>
<a href=""><i class="fa fa-question" aria-hidden="true"></i>&nbsp;Contact</a>
    <a onclick="document.getElementById('id01').style.display='block'; document.querySelector('body').style.overflow = 'hidden';"><i class="fa fa-bold" aria-hidden="true"></i>&nbsp;Build Resume</a>
    <a href="<?php echo url_for('file/update.php?user='.$user); ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp;Update Resume</a>
    <a href="<?php echo url_for('file/select.php?id='.$id); ?>"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Show Resume</a>
    <a href="<?php echo url_for('file/delete.php?user='.$user); ?>"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete Resume</a>
    <a href=""><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp;Feedback</a>
    </div>
<p>&nbsp;&nbsp;Resume.com's free resume builder is the best way to create a professional resume that will help you land your dream job, or at least get you one step closer to it. Our easy step-by-step process will guide you on how to build a resume using templates and key terms that are relevant to the job and industry.</p>

<p>&nbsp;&nbsp;Simply follow the prompts to enter your summary, objective, education, employment history, professional skills, etc. and leave the formatting to us. This is a great way to build a resume for free online and you can save your resume as a PDF, or share it to your social networks.</p>
 
<form method="post" action = "<?php echo url_for('/file/enter.php?id='.$id); ?>" enctype="multipart/form-data"> 
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span style = "cursor: pointer;" onclick="document.getElementById('id01').style.display='none';document.querySelector('body').style.overflow = 'auto';" class="close">&times;</span>
      
                <div id = "one" style = "display:block">
                        <h4><i class="fa fa-info-circle" aria-hidden="true"></i> Person Details</h4>  
                            <dl>
                                <dt>Enter Name:</dt>
                                <dd><input type="text" name="name"> </dd>   
                            </dl>
                            <dl>
                                <dt>Job Title:</dt> 
                                <dd><select name="job_title" class="selec"><option>select</option><option>Software Engineer</option><option>Front End Developer</option></select></dd>
                            </dl>
                            <dl>
                                    <dt>Profile Summary:</dt>
                                    <dd><textarea rows="8" cols="60" name="p_summary"></textarea></dd>
                            </dl>

                            <a class="modal" href = "javascript:toggle('one','two')" > Next </a>
                </div>
                <div id = "two" style= "display:none">
                            <h4><i class="fa fa-etsy" aria-hidden="true"></i> Work Experience 1</h4>    
                            <dl>
                                    <dt>Job Title : </dt>
                                    <dd><select name="job_title" class="selec"><option>select</option><option>Software Engineer</option><option>Front End Developer</option></select></dd>
                            </dl>
<!--
                            <dl>
                                    <dt>Date of Job : </dt>
                                    <dd><input type="date" name ="date"></dd>
                            </dl>
-->
                    <div style="float:left">
                         <label>Start Date:</label>
                        <input class = "modalmar" type="date" name = "s_date">
                        </div>
                        <div >
                       <label>End Date:</label>
                        <input class = "modalmar" type="date" name=  "e_date">
                        </div>
                            <dl>
                                    <dt>Job Summary : </dt>
                                    <dd><textarea rows="8" cols="60" name="j_summary"></textarea></dd>
                            </dl>
<!--                    <button onclick = "show('add')" style="float:right; border-radius:6px" ><i class="fa fa-plus fa-2x" aria-hidden="true"></i>Add Experience</button><br>-->
                    <input type = "button" onclick="show('add')" class = "addButtons"  value ="Add Experience">
                    <div id = "add" style="display:none">
                     <h4><i class="fa fa-etsy" aria-hidden="true"></i> Work Experience 2</h4>    
                            <dl>
                                    <dt>Job Title : </dt>
                                    <dd><select name="job_title1" class="selec"><option>select</option><option>Software Engineer</option><option>Front End Developer</option></select></dd>
                            </dl>
<!--
                            <dl>
                                    <dt>Date of Job : </dt>
                                    <dd><input type="date" name ="date"></dd>
                            </dl>

-->                       <div style="float:left">
                         <label>Start Date:</label>
                        <input class = "modalmar" type="date" name = "s_date1">
                        </div>
                        <div >
                       <label>End Date:</label>
                        <input class = "modalmar" type="date" name = "e_date1">
                        </div>
                            <dl>
                                    <dt>Job Summary : </dt>
                                    <dd><textarea rows="8" cols="60" name="j_summary1"></textarea></dd>
                            </dl>
                    </div>

                    <a class = "modal" href = "javascript:toggle('two','one')"> Back </a>
                      <a class = "modal" href = "javascript:toggle('two','three')"> Next </a>
 
</div>
<div id  = "three" style="display:none">
     <h4><i class="fa fa-university" aria-hidden="true"></i> Education 1</h4>
        <dl>
        <dt> School Name : </dt>
        <dd><input type="text" name = "school_name"> </dd>
    </dl>
   <dl>
       <dt>Year of Attendence : </dt>
       <dd><input type="date" name ="y_o_a"></dd>
    </dl> 
    <dl>
        <dt>Major : </dt>
        <dd><input type="text" name="major"></dd>
    </dl>
    <dl>
        <dt>Summary : </dt>
        <dd><textarea rows="8" cols="60" name="e_summary"></textarea></dd>
    </dl>
<!--     <button onclick = "show('add1')" style="float:right; border-radius:6px" ><i class="fa fa-plus fa-2x" aria-hidden="true"></i>Add Education</button><br>-->
     <input type = "button" onclick="show('add1')" class = "addButtons"  value ="Add Experience">
    <div id  = "add1" style="display:none">
     <h4><i class="fa fa-university" aria-hidden="true"></i> Education 2</h4>
        <dl>
        <dt> School Name : </dt>
        <dd><input type="text" name = "school_name1"> </dd>
    </dl>
   <dl>
       <dt>Year of Attendence : </dt>
       <dd><input type="date" name ="y_o_a1"></dd>
    </dl> 
    <dl>
        <dt>Major : </dt>
        <dd><input type="text" name="major1"></dd>
    </dl>
    <dl>
        <dt>Summary : </dt>
        <dd><textarea rows="8" cols="60" name="e_summary1"></textarea></dd>
    </dl>
        </div>
  <a class = "modal" href = "javascript:toggle('three','two')"> Back </a>
  <a  class = "modal" href = "javascript:toggle('three','four')"> Next </a>

      </div>
          
    <div id = "four" style = "display:none">
<h4><i class="fa fa-user-circle" aria-hidden="true"></i> Let's be in touch</h4>  
        <dl>
            <dt style="width:90px;"><a href="javascript:show1('email','twit','link','face')"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></dt>
            <dd><input id = "email" type="email" name = "email" style = "display:none"></dd>
        </dl>
        <dl>
            <dt style="width:90px"><a href = "javascript:show1('twit','email','link','face')"><i class="fa fa-twitter" aria-hidden="true"></i></a></dt>
            <dd><input id = "twit" type = "url" name = "twitter" style = "display:none"></dd>
        </dl>
        <dl>
            <dt style="width:90px"><a href = "javascript:show1('link','twit','email','face')"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></dt>
            <dd><input id = "link" type = "url" name = "linkedin" style = "display:none"></dd>
        </dl>
        <dl>
            <dt style="width:90px"><a href = "javascript:show1('face','link','twit','email')"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></dt>
            <dd><input id = "face" type = "url" name = "facebook" style = "display:none"></dd>
        
        </dl>
        
        <dl>
        <span style="color:black"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
            <dt><input type="file" name= "file_img"></dt>
    </dl>
         <a class = "modal" href = "javascript:toggle('four','three')"> Back </a>
         <input type = "submit" >
        <input type = "reset">
    </div>
    </div>
  </div>
</div>
      </form>           

<?php include(PRIVATE_PATH.'/shared/resume_footer.php'); ?>