<?php require_once('../../private/initialize.php'); 

if(ispost())
{ $subject = [];
   $subject['user'] = $_POST["user"];
    $subject['pswd1'] = $_POST["pswd1"];
    $subject['pswd2'] = $_POST["pswd2"];
    
    $result = insert_into($subject);
        if($result === true)
        {
            redirect_to(url_for('/file/index.php'));
        }else{
            $errors  = $result;
           
        }
}
?>




<?php
$title = "Sign Up";
include(PRIVATE_PATH.'/shared/resume_header.php');
?>

        <header>
        <h1>Sign Up</h1> 
        </header>
<?php echo display_errors($errors); ?>
<form action="<?php echo url_for('file/signup.php'); ?>" method="post" class="full">
    <h2>Enter the details</h2>
<dl>
    <dt>Enter username<span>*</span>:  </dt>    
    <dd><input type="text" name=user>   </dd>
</dl>
<dl>
    <dt>Enter Password<span>*</span>: </dt>    
    <dd><input type="password" name= pswd1>     </dd>
</dl>
<dl>
<dt>Re-enter Password<span>*</span>:  </dt>
<dd><input type="password" name="pswd2"></dd>
    </dl>
    <div>
    <input class="button" type="submit" name="submit">
    <input class="button" type="reset" name="reset">
    </div>
    <br>
</form>
</section>
<?php include(PRIVATE_PATH.'/shared/resume_footer.php'); ?>