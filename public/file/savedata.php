<?php 
if(ispost())
{
    $subject1 = [];
    $subject1['p_id'] = $id;
    $subject = [];
   
    $subject['p_id'] = $id;
    $subject['name'] = $_POST['name'];
    $subject['job_title'] = $_POST['job_title'];
    $subject['p_summary'] = $_POST['p_summary'];
    
   $result = insert_person($subject);
    
    
      $subject['job_title'] = $_POST['job_title'];
    $subject['s_date'] = $_POST['s_date'];
        $subject['e_date'] = $_POST['e_date'];
    $subject['j_summary'] = $_POST['j_summary'];
    
    $result = insert_work($subject);
     
    if(!empty($_POST['job_title1']) && !empty($_POST['s_date1'])&& !empty($_POST['e_date1']) && !empty($_POST['j_summary1']) )
    {
       
        $subject1['job_title'] = $_POST['job_title1'];
        $subject1['s_date'] = $_POST['s_date1'];
        $subject1['e_date'] = $_POST['e_date1'];
        $subject1['j_summary'] = $_POST['j_summary1'];
        
        $result = insert_work($subject1);
        
        
    }
    
    
    $subject['school_name'] = $_POST['school_name'];
    $subject['y_o_a'] = $_POST['y_o_a'];
    $subject['major'] = $_POST['major'];
    $subject['e_summary'] = $_POST['e_summary'];
    
    $result = insert_education($subject);
    
    if(!empty($_POST['school_name1']) && !empty($_POST['y_o_a1'])&& !empty($_POST['major1']) && !empty($_POST['e_summary1']) )
    {
        $subject1['school_name'] =  $_POST['school_name1'];
        $subject1['y_o_a'] =        $_POST['y_o_a1'];
        $subject1['major'] =        $_POST['major1'];
        $subject1['e_summary'] =    $_POST['e_summary1'];
        
        $result = insert_education($subject1);
    }
    
   
    
    
    
    $filetmp  = $_FILES['file_img']['tmp_name'];
    $filename = $_FILES['file_img']['name'];
    $filetype = $_FILES['file_img']['type'];
    $filepath = "/xampp/htdocs/resume/public/images/".$id.".png";
    
    if(move_uploaded_file($filetmp,$filepath))
    {
       $subject['email'] = $_POST['email'];
    $subject['twitter'] = $_POST['twitter'];
    $subject['linkedin'] = $_POST['linkedin'];
    $subject['facebook'] = $_POST['facebook'];
    $subject['file_img'] = $filepath;
     $result = insert_touch($subject); 
        if($result):
        ?><script>alert("Successfully loaded");</script>
         <?php endif; 
    }else{
        echo "false";
    }
    
}


?>
