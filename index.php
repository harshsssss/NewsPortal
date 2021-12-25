<?php 
 include("admin/includes/database.php");
?>
<script>
function search(){
  var ser=document.getElementById("ser").value;
  if(ser!=undefined){
    location.href="search.php?ser="+ser;
  }
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>NewsTheme</title>
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
    <form action="#" method="post">
      <button type="button" onclick="search()">Search</button>
      <input type="text" name="s" id="ser" />
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
    <div id="content">
      <!-- begin recent post --><br><br><br>
      <div class="recent post">
        <h2 class="title">Recent News</h2>
        <h2><a href="#"> Online Creating Websites</a></h2>
        <p>Online proprietary tools provided by web hosting companies. These are typically intended for users to build their private site. Some companies allow the site owner to install alternative tools (commercial or open-source) — the more complex of these may also be described as content management systems.</p>
        <img src="images/_thumb1.jpg" alt="" class="alignleft" />
        <p>offline software that runs on a computer, creating pages and which can then publish these pages on any host. (These are often considered to be "website design software", rather than "website builders".)</p>
        <p>The first websites were created in the early 1990s.[1] These sites were manually written in HTML.

Over time, software was created to help design web pages: e.g. Microsoft released FrontPage in November 1995.</p>
        <p>By 1998, Dreamweaver had been established as the industry leader; however, some have criticized the quality of the code produced by such software as being overblown and reliant on tables. As the industry moved towards W3C standards, Dreamweaver and others were criticized for not being compliant.</p>
        <p>HTML tools are divided into those that allow editing of the source code and those that only have a WYSIWYG mode.</p>
      </div>
      <!-- end recent post -->
      <div class="posts">
        <!-- begin post -->
        <div class="post">
          <p class="date">Saturday, june 29, 2021 10:16</p>
          <h2><a href="#"> Chinese eats all Reptiles</a></h2>
          <a href="#"><img src="images/_thumb2.jpg" alt="" class="thumbnail" /></a>
          <p>China's vast and diverse landscape is home to a profound variety and abundance of wildlife. As of one of 17 megadiverse countries in the world.</p>
          <p>Many species of animals are endemic to China, including the country's most famous wildlife species, the giant panda. In all, about one-sixth of mammal species and two-thirds of amphibian species in China are endemic to the country.</p>
          <div class="details"> </div>
        </div>
        <!-- end post -->
        <!-- begin post -->
        <div class="post">
          <p class="date">Saturday, june 29, 2021 10:16</p>
          <h2><a href="#">How to be an Effective Photoblogger</a></h2>
          <a href="#"><img src="images/_thumb3.jpg" alt="" class="thumbnail" /></a>
          <p>A frog is any member of a diverse and largely carnivorous group of short-bodied, tailless amphibians composing the order Anura (literally without tail in Ancient Greek). </p>
          <p></p>
          <div class="details">  </div>
        </div>
        <!-- end post -->
        <!-- begin post -->
        <div class="post">
          <p class="date">Monday, june 29, 2021 10:16</p>
          <h2><a href="#">Creating Niche Website Project</a></h2>
          <a href="#"><img src="images/_thumb4.jpg" alt="" class="thumbnail" /></a>
          <p>A web project is the process of developing and creating a Web site, activities in a network which are aimed at a pre-defined goal. The network can be both accessible for everyone, as in the Internet, or only for certain people, as an intranet. </p>
          
          <div class="details"> </div>
        </div>
        <!-- end post -->
        <!-- begin post -->
        <div class="post">
          <p class="date">Saturday, june 29, 2021 10:16</p>
          <h2><a href="#">Politicans Game </a></h2>
          <a href="#"><img src="images/rd.jpg" alt="" class="thumbnail" /></a>
          <p>Politics is the set of activities that are associated with making decisions in groups, or other forms of power relations between individuals, such as the distribution of resources or status.</p>
          <p>The branch of social science that studies politics and government is referred to as political science.</p>
          <div class="details"> </div>
        </div>
        <!-- end post -->
        <div class="break"></div>
      </div>
    </div>
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
    <p class="l">Copyright &copy; 2021 - <a href="#">The Indian</a> &middot; All Rights Reserved</p>
    
  </div>
</div>
<!-- END footer -->
</body>
</html>
