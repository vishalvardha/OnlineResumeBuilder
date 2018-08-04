<?php 
//require_once('initialize.php');
function url_for($script_path)
{
   
    if($script_path[0]!='/')
    {
        $script_path = "/".$script_path;
        
    }
    return WWW_ROOT.$script_path;
    
}

function ispost()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function isget()
{
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function redirect_to($str)
{
         header("Location: " . $str);
  exit;
}


function escape($user)
{
    global  $db;
    return mysqli_real_escape_string($db,$_POST[$user]);
}

function display_errors($errors)
{ 
    
    $output = '';
    if(!empty($errors))
    {
        $output="<div class=\"errors\">";
        $output.="please fix errors";
        $output.="<ul>";
        foreach($errors as $error)
        {
            $output .= "<li>".$error."</li>";
        }
            
        $output .="</ul>";
        $output .="</div>";
    }
return $output;
}
?>