<!DOCTYPE html> 
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
  
    <link rel="icon" href="register.jpg" type="image/x-icon">
  
      <link rel="stylesheet" href="style.css">

</head><body>
  <body><br><br><br><br><br><br><br>
<div class="container">
  <section id="content">
    <form role="form" method="post" action="admin.php?q=index.php">
      <h1>Admin Panel</h1>
      <div>
        <input type="text" name="uname" placeholder="Admin email" class="form-control" required="required" />
      </div>
      <div>
        <input type="password" name="password" placeholder="Password" class="form-control" required="required" />
      </div>
      <div>
        <input type="submit" name="btnLogin" value="Log in" /> 
      
      </div>
    </form><!-- form -->
    <div class="button">
     
    </div><!-- button -->
  </section><!-- content -->
</div><!-- container -->
</body>
  
    <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>

</body></div>
</html>