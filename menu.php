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
<div class="header_area">
      <div class="logo floatleft"><a href="#"><img src="images/logo.png" alt="" /></a></div>
      <div class="top_menu floatleft">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact us</a></li>
          <li><a href="#">Welcome:<?= $sid;?></a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
      <div class="social_plus_search floatright">
        <div class="social">
          <ul>
            <li><a href="#" class="twitter"></a></li>
            <li><a href="#" class="facebook"></a></li>
            <li><a href="#" class="feed"></a></li>
          </ul>
        </div>
        <div class="search">
          <form action="#" method="post" id="search_form">
            <input type="text" value="Search news" id="ser" />
            <input type="button" id="searchform" value="search" onclick="search()"/>
            
          </form>
        </div>
      </div>
    </div>
    <div class="main_menu_area">
      <ul id="nav">
        <li><a href="#">Categories</a>
          <ul>
          <?php 
          $sel=mysqli_query($con,"select * from category");
          while($arr=mysqli_fetch_assoc($sel))
          {
            ?>
            <li><a href="category-news.php?id=<?= $arr['id'];?>"><?= $arr['cname'];?></a></li>
            <?php 
          }
          ?>
            
          </ul>
        </li>
        <li><a href="#">sports</a></li>
        <li><a href="#">tech</a>
          <ul>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
          </ul>
        </li>
        <li><a href="#">business</a></li>
        <li><a href="#">Movies</a>
          <ul>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a>
              <ul>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
              </ul>
            </li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
          </ul>
        </li>
        <li><a href="#">entertainment</a></li>
        <li><a href="#">culture</a></li>
        
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>