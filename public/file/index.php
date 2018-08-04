<?php require_once('../../private/initialize.php'); ?>
<?php
 session_start();
if(ispost())
{
    $subject=[];
$subject['user'] = escape('user');
$subject['pswd'] = escape('pswd');
   
  
    
$sql = "SELECT * FROM authentication ";
$sql .="WHERE user='".$subject['user']."' AND pswd='".$subject['pswd']."'";
  $a = [];
$result = mysqli_query($db,$sql);
$a = mysqli_fetch_assoc($result);
$rows = mysqli_num_rows($result);
    if($rows==1)
    {
        $_SESSION['login_user'] = $subject['user'];
      redirect_to(url_for('file/enter.php?id='.$a['id']));
        
    }else{?>
<script>

alert("user name or password not found");
</script>
<?php
    }
    


}

?>


<?php
$title = "Resume Builder";
include(PRIVATE_PATH.'/shared/resume_header.php');
?>
    <div class="whole">
      
    <header>
    <h1>Resume Builder</h1>
    </header>
    <form action="<?php echo url_for('file/index.php'); ?>" method="post" class="full">
    <section class="full">
    <h2>Build Resume</h2>
    <dl>
        <dt>Username<span>*</span>:        </dt>    
        <dd><input type="text" name="user"></dd>
    </dl>
    <dl>
        <dt>Password<span>*</span>:</dt>
        <dd><input type="password" name="pswd"></dd>
    </dl>
    <div>
    <input class="button" type="submit" name="submit">
    <input class="button" type="reset" name="reset">
    </div>
        <br>
    <a href="<?php echo url_for('file/signup.php'); ?>">Sign up?</a>
        </section>
    </form>
</section>
    <footer>
    <span>&copy; all rights reservered <?php echo "20".date('y'); ?> By Vishal <b style="background:blue; border-radius:40%">under the guidence of Pavan Vadla</b></span>
    </footer>

</body>
</div>

</html>