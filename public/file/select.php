<?php require_once('../../private/initialize.php');
$id = $_GET['id'];
$title = "Resume Select";
include(PRIVATE_PATH.'/shared/resume_header.php');
$id = $_GET['id'];
?>
<header>
<h1>Select the Template</h1>
</header>
<h2>Select the following Templates</h2>
<div class="align">
<h3>styling Template</h3>
<img class="img-align" onclick="fune()" src="<?php echo url_for('/images/css.jpg');?>" alt="css"  width="250" height="200"><br>
<input class="button" type="button" onclick="fune()" value="select">
</div>
<div class="align">
<h3>Normal Resume</h3>
<img class="img-align" onclick="fune()" src="<?php echo url_for('/images/black.jpg');?>" alt="css"  width="250" height="200"><br>
<input class="button" type="button" onclick="fune()" value="select">
</div>

</section>



<?php include(PRIVATE_PATH.'/shared/resume_footer.php');
?>

<script>
function fune()
    {
        window.location.href = "<?php echo url_for('/file/resume.php?id='.$id ); ?>";
    }

</script>