<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>FEEDBACK || Test Your Skill</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>

 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>

<body>

<!--header start-->
<div class="row header">
<div class="col-lg-12">
<span class="logo">CBT Made</span><?php
 include_once 'dbConnection.php';
session_start();
  if((!isset($_SESSION['email']))){
echo '<a href="#" class="pull-right sub1 btn title3" data-toggle="modal" data-target="#myModal" style="border-radius: 1em;"><span class="glyphicon glyphicon-log-in" aria-hidden="true" ></span>&nbsp;<b>LOGIN</b></a>&nbsp;';}
else
{
echo '<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3" style="border-radius: 1em;"><span class="glyphicon glyphicon-log-out" aria-hidden="true" ></span>&nbsp;Signout</a>&nbsp;';}
?>
<a href="index.php" class="pull-right btn sub1 title3" style="border-radius: 1em;"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;<b>Home</a></div>
<div class="col-md-2">
</div>
<div class="col-md-4">


</div></div>

<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">LOGIN</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

<!--header end-->

<div style="background-image:url(image/for1.jpg); min-height:500px;">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background-image:url(image/bg1.jpg); min-height:430px;">
<h2 align="center" style="font-family:'typo'; color:#000066">FEEDBACK/REPORT A PROBLEM</h2>
<div style="font-size:14px">
<?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo' 
You can send us your feedback through e-mail on the following e-mail id:<br />
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<a href="mailto:feedback@testyourskill.com" style="color:#000000">feedback@emeditweb.com</a><br /><br />
</div><div class="col-md-1"></div></div>
<p>Or you can directly submit your feedback by filling the form below:-</p>
<form role="form" method="POST" action="feed.php?q=feedback.php" onsubmit="myFunction()">
<div class="row">
<div class="col-md-3" required="required"><b>Name:</b><br /><br /><br /><b>Subject:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group title">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" required="required"><br />    
   <input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text" required="required">    

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3" required="required"><b>E-Mail address:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group title">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email" required="required">    
 </div>
</div>
</div><!--End of row-->

<div class="form-group title" required="required"> 
<textarea rows="5" cols="8" name="feedback" class="form-control" required="required" placeholder="Write feedback here..." ></textarea>
</div>
<div class="form-group" align="center" ">
<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
</div>
</form>';}?>
</div><!--col-md-6 end-->
<div class="col-md-3"></div></div>
</div></div>
</div><!--container end-->
<script>
function myFunction() {
  alert("Are You Sure You Wanna Proceed With Your Feedback?!!");
}
</script>

<!--Footer start-->
<div class="row footer">
<div class="col-md-4 box">
<a href="#" data-toggle="modal" data-target="#abtus">About Us</a>
</div>
<div class="col-md-4 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-4 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
    
      <div class="modal-body">
        <p>
    <div class="row">
    <div class="col-md-4">
     <img src="image/developer.jpg" width=100 height=100 alt="Developer" title="Emmanuel Itighise" class="img-rounded">
     </div>
     <div class="col-md-5">
  <a href="https://www.facebook.com/emmanuel.itighise.7" target="_blank" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Emmanuel Itighise</a>
    <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+234 9050118734</h4>
    <h4 style="font-family:'typo' ">itighiseemmanuele@gmail.com</h4>
    <h4 style="font-family:'typo' ">Senior Programmer At EmeditWeb ,Nigeria.</h4></div></div>
    </p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--Modal For About Us -->
<div class="modal fade title1" id="abtus">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h1 class="modal-title" style="font-family:'typo' "><span style="color:orange"><center><b>About Us</b></center></span></h1>
      </div>
    
      <div class="modal-body">
        <p>
    <div class="row">
    <div class="col-md-4">
     <img src="image/bg2.jpg" width=100 height=100 alt="About Us" title="About Us Interface" class="img-rounded">
     </div>
     <div class="col-md-5">
    <a style="color:orange; font-family:'typo' ; font-size:20px" title="Find on Facebook"><b>Test Your Skill</b></a>
    <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="">Test Your Skill Is A Cbt Programme System Developed By EmeditWeb. Its Aim Is To Bring The Students And Teachers Into A Circle Of Vast Experience, where Teachers Can Set Quiz And Monitor The Students as well as Study Thier Ranking And Students Can Also Submit Feedback To The Teacher and Developers On Issues Experienced During the E-Excercise.</h4>
    <h4 style="font-family:'typo' ">Copyright &copy;<script>document.write(new Date().getFullYear());</script> - <a href="mailto:info@emeditweb.com">info@emeditweb.com</a></h4></div></div>
    </p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->

</body>
</html>
