<?php 
 include("admin/includes/database.php");//include db file 
 extract($_POST);
 if(isset($log)){
    if(empty($Email) || empty($Password)){
      $errMsg="Plz fill blank fields";
    }
    else {
        
         $sel=mysqli_query($con,"select Email,Password from users where Email='$Email' and Password='$Password'");
         $arr=mysqli_fetch_array($sel);
         //if(mysqli_num_rows($sel)>0)
         if($arr['Email']==$Email && $arr['Password']==$Password){
               session_start();
               $_SESSION['sid']=$Email;
               header("location:dashboard.php");
         }
         else {
            $errMsg="Enter correct email or password";
         }
    }
 }
?>

<?php 
  extract($_POST);
  include("admin/includes/database.php");
  if(isset($regis)){
   
    
    
      
               if(mysqli_query($con,"insert into users(Name,Email,Password) values('$Name','$Email','$Password')"))
         {
          $success="successfully Registed";
            
            
         }
         else {
             unlink("user");
            
             $errMsg="Please enter blank fields";
         }
        
      
    }
    

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
      <div class="col-sm-6">
      <h2>Login Here</h2>
      <form method="post">
      <div class="form-group">
      <label>Email Id</label>
      <input type="text" placeholder="Enter email" name="Email" class="form-control"/>
      </div>
      <div class="form-group">
      <label>Password</label>
      <input type="password" placeholder="Enter password" name="Password" class="form-control"/>
      </div>
      <input type="submit" value="login" name="log" class="btn btn-success"/>
      </form>
      </div>
      <div class="col-sm-6">
      <h2>Regis Here</h2>
      <?php 
  if(!empty($errMsg))
  {
 ?>
  <div class="alert alert-danger"> <?= $errMsg ;?></div>
 <?php 
  }
  
?>
<?php
if(!empty($success))
{
?>
<div class="alert alert-danger"> <?= $success ;?></div>
<?php 
}
?>
      <form method="post">
      <div class="form-group">
      <label>Name</label>
      <input type="text" placeholder="Enter name" name="Name" class="form-control"/>
      </div>
      <div class="form-group">
      <label>Email Id</label>
      <input type="text" placeholder="Enter email" name="Email" class="form-control"/>
      </div>
      <div class="form-group">
      <label>Password</label>
      <input type="password" placeholder="Enter password" name="Password" class="form-control"/>
      </div>
      <input type="submit" value="register here" name="regis" class="btn btn-success"/>
      </form>

      </div>
    </div>
    <?php include("pages/footer.php");?>
  </div>
</div>
<?php include("pages/foot.php");?>
</body>
</html>