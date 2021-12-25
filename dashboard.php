<?php
session_start();
$sid=$_SESSION['sid'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>The News Reporter</title>
  <?php include("pages/head-link.php"); ?>
</head>
<body>
<div class="body_wrapper">
  <div class="center">
         <?php include("menu.php");?>
         
    <div class="content_area">
      <div class="col-sm-6">
           </div>
    </div>
    <?php include("pages/footer.php");?>
  </div>
</div>
<?php include("pages/foot.php");?>
</body>
</html>