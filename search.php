<?php 
 include("admin/includes/database.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>NewsTheme - Demo Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="ie.css" /><![endif]-->
</head>
<body>
<!-- BEGIN navigation -->
<div id="navigation">
  <div class="wrapper">
    <ul>
    <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="page.php">Sports News</a></li>
      <li><a href="Nationalnews.php">National News</a></li>
      <li><a href="local.php">Local News</a></li>
      <li><a href="Bollywoodnews.php">Bollywood News</a></li>
      <li><a href="contact.php">Contact Page</a></li>
    </ul>
    <form action="#">
      <button type="submit">Search</button>
      <input type="text" name="s" id="s" />
    </form>
  </div>
</div>
<!-- END navigation -->
<!-- BEGIN wrapper -->
<div class="wrapper">
  <!-- BEGIN header -->
  <div id="header">
    <h1><a href="#">NewsTheme</a></h1>
    <div class="smss"><a href="#"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/smss.gif" alt="" /></a></div>  
  </div>
  <!-- END header -->
  <!-- BEGIN body -->
  <div id="body">
    <!-- BEGIN content -->
    
           
                     
    <h1> Search Results</h1>
           <?php 
           $ser=$_GET['ser'];
           $sel=mysqli_query($con,"select * from news where title like '%$ser%'");
           if(mysqli_num_rows($sel)>0){
               while($arr=mysqli_fetch_assoc($sel)){
               ?>
                   <h2> <?= $arr['title'];?></h2>

              <td><img src='admin/upload/<?= $arr['image'];?>' height=400 width=600/></td>
              
                   <h2> <?= $arr['title'];?></h2>
                   
                   <article> <?= substr($arr['description'],0,150);?>..... </article>
                   
                   <a href='newsbollywood.php?id=<?= $arr['id'];?>'> Read More </a>
                   
                   
                   <hr/>
               <?php 
               }
           }
           else {

                }
           ?>

      <!-- begin post -->
    
                     
           <!-- end post -->
    
    <!-- END content -->
    <!-- BEGIN sidebar -->
    <div id="sidebar">
      <!-- begin Advertisement -->
            <!-- end Advertisement -->
      <!-- begin subscribe -->
      <br><br><br>
      <div class="sidebar floatright">
                <div class="single_sidebar">
          <div class="news-letter">
            <h2>Sign Up for Newsletter</h2>
            <p>Sign up to receive our free newsletters!</p>
            <form action="#" method="post">
              <input type="text" value="Name" id="name" />
              <input type="text" value="Email Address" id="email" />
              <input type="submit" value="SUBMIT" id="form-submit" />
            </form>
            <p class="news-letter-privacy">We do not spam. We value your privacy!</p>
          </div>
        </div>
        <div class="single_sidebar">
          
        </div>
        <br>
        <br>
        <div class="single_sidebar"> <img src="images/add1.png" alt="" /> </div>
        <br>
        <br>
        <div class="single_sidebar">
         
          <img src="images/add2.png" alt="" /> </div>
      </div>
      <br><br><br><h2>Subscribe Here</h2>
      <form class="subscribe" action="#">
        <a href="#">Subscribe via RSS Feed or</a>
        <input type="text" name="email" value="Enter E-mail Here.." />
        <button type="submit">Submit</button>
      </form>
      <!-- end subscribe -->
      <!-- begin popular posts -->
      
      <!-- end popular posts -->
      <!-- begin tags -->
      
    </div>

    <!-- END sidebar -->
  </div>
  <!-- END body -->
  <div class="break"></div>
</div>
<!-- END wrapper -->
<!-- BEGIN footer -->
<div id="footer">
  <div class="wrapper">
    <p class="l">Copyright &copy; 2009 - <a href="#">Website Name</a> &middot; All Rights Reserved</p>
    <p class="r">Template by: <a href="http://www.wpthemedesigner.com/">WordPress Designer</a> | Get More <a href="#">Free CSS Templates</a></p>
  </div>
</div>
<!-- END footer -->
</body>
</html>
