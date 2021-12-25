<?php 
 include("admin/includes/database.php");
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
         <?php include("pages/menu.php");?>
        
         
    <div class="content_area">
      <div class="main_content floatleft">
           
           <?php 
           $nid=$_GET['id'];
           $sel=mysqli_query($con,"select * from news where id=$nid");
           $arr=mysqli_fetch_assoc($sel);
           ?>
           <td><img src='admin/upload/<?= $arr['image'];?>'/></td>
           
           <h1> <?= $arr['title'];?></h1>
           
           <article>
             <?= $arr['description'];?>
           </article>
      </div>
       <?php include("pages/sidebar.php");?>
    </div>
    <?php include("pages/footer.php");?>
  </div>
</div>
<?php include("pages/foot.php");?>
</body>
</html>