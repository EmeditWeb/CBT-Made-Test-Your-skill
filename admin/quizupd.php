<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Test Your Skill || <?php 
include_once 'dbConnection.php';
session_start();
                if(isset($_SESSION['name']))
                {
                  echo $_SESSION['name']; 
                }
                else
                { 
                  echo '|| Test Your Skill';
                }
              ?> </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

<script>
$(function () {
    $(document).on( 'scroll', function(){
        console.log('scroll top : ' + $(window).scrollTop());
        if($(window).scrollTop()>=$(".logo").height())
        {
             $(".navbar").addClass("navbar-fixed-top");
        }

        if($(window).scrollTop()<$(".logo").height())
        {
             $(".navbar").removeClass("navbar-fixed-top");
        }
    });
});</script>
</head>

<body  style="background:#eee;">
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Admin Portal</span></div>
<?php
 include_once 'dbConnection.php';
$email=$_SESSION['email'];
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];;

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;<b>Hello,</b></span><a href="dash.php" class="log log1"><b>'.$name.'</b></a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;<b>Log Out</b></button></a></span>';
}?>

</div></div>
<!-- admin start-->

<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dash.php?q=0"><b>Dashboard</b></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a href="dash.php?q=0">Home<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="dash.php?q=1">User</a></li>
		<li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="dash.php?q=2">Ranking</a></li>
		<li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="dash.php?q=3">Feedback</a></li>
        <li class="dropdown <?php if(@$_GET['q']==4 || @$_GET['q']==5) echo'active"'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quiz<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="dash.php?q=4">Add Test</a></li>
            <li><a href="dash.php?q=5">Remove Test</a></li>
            <li><a href="dash.php?q=6">Update Test</a>
			
          </ul>
        </li><li class="pull-right"> <a href="logout.php?q=account.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</a></li>
		
      </ul>
          </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php
extract($_REQUEST);
 $eid=$_GET['eid'];
 $title=['title'];
$p=mysqli_query($con,"select * from quiz where eid='$eid'");
$res=mysqli_fetch_assoc($p);


if(isset($update))
{

$query="update quiz SET eid='$title'"; 
mysqli_query($con,$query);
echo "<div class='panel title' style='color:#660077' ' >Quiz Title Updated.</div>"; 
  }



?>
<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<center><h1 class="title" style="color:#660033">Update Quiz</h1><center><br />
<form name="form1" method="post" onSubmit="return check();">
  <table class="table table-striped">
    <tr>
      <td width="45%" height="32"><div align="center"><strong>Enter Subject Name </strong></div></td>
      <td width="2%" height="5">  
      <td width="53%" height="32">
        <input class="form-control" value="<?php echo $res['title']; ?>" name="subname" placeholder="enter language name" type="text" id="subname">
    <tr>
        <td height="26"> </td>
        <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input class="btn btn-primary" type="submit" name="update" value="Update" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</div>
</body>
</html>