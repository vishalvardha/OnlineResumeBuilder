<?php
function insert_into($subject)
{
    global $db;
    
    $errors= validate_subject($subject);
    if(!empty($errors)){
        
        return $errors;
    }
    
    $sql  = "INSERT INTO authentication ";
    $sql .= "(user,pswd) VALUES ";
    $sql .= "('".$subject['user']."','".$subject['pswd1']."')";
    
    $result = mysqli_query($db,$sql);
    return $result;
}



function insert_person($subject)
{
//     $errors= validate_ins($subject);
//    if(!empty($errors)){
//    
//        return $errors;
//    }
    global $db;
     $sql = "INSERT INTO person_details ";
    $sql .= "(p_id, name , job_title , p_summary ) VALUES ";
    $sql .="('".$subject['p_id']."','". $subject['name']."','".$subject['job_title']."','".$subject['p_summary']."')";
    
    $result = mysqli_query($db,$sql);
    
    return $result;
}
function insert_education($subject)
{
    global $db;
     $sql2 = "INSERT INTO education ";
    $sql2 .= "(school_name, y_o_a , major , e_summary, id ) VALUES ";
    $sql2 .="('".$subject['school_name']."','".$subject['y_o_a']."','".$subject['major']."','".$subject['e_summary']."','".$subject['p_id']."')";
    
    $result2 = mysqli_query($db,$sql2); 
    return $result2;
    
}
function insert_touch($subject)
{
     global $db;
    $sql3 = "INSERT INTO social ";    
    $sql3 .= "(id, email , twitter, linkedin, facebook , file ) VALUES ";
    $sql3 .="('".$subject['p_id']."','".$subject['email']."','".$subject['twitter']."',";
    $sql3 .= "'".$subject['linkedin']."','".$subject['facebook']."','".$subject['file_img']."')";
    $result3 = mysqli_query($db,$sql3);   
    return $result3;
}

function insert_work($subject)
{
    global $db;
    
     $sql1 = "INSERT INTO work_experience ";
    $sql1 .= "( job_title , s_date , e_date, j_summary,id ) VALUES ";
    $sql1 .="('".$subject['job_title']."','".$subject['s_date']."','".$subject['e_date']."','".$subject['j_summary']."','".$subject['p_id']."')";
    
    $result1 = mysqli_query($db,$sql1);
    return $result1;
}


function validate_subject($subject)
{
 $errors = [];
  if(is_blank($subject['user']) || is_blank($subject['pswd1'] || is_blank($subject['pswd2'])))
  {
      $errors[] = "you can't leave text boxes empty";
  }
    
  if(has_equal($subject['pswd1'],$subject['pswd2']))
  {
      
      $errors[] = "Password not matching";
  }
  if(!has_length_greater_than($subject['user'],5))
  {
      $errors[] = "user name length must be greater than 5";
  }
    return $errors;
}

function validate_ins($subject)
{
    $errors = [];
    /*if(is_blank($subject['name']&& is_blank($subject['profile']) && is_blank($subject['job']) ))
    { 
        
        $errors[] = "you can't leave text boxes empty";
    }*/
   
return $errors;
}
?>