<?php 
extract($_POST);
if(isset($save))
{

	if($np=="" || $cp=="" || $password=="")
	{
	$err="<font color='red'>Please Fill all the fileds first!!</font>";	
	}
	else
	{
$password=md5($password);	

$sql=mysqli_query($con,"select * from user where password='$password'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{
	$np=md5($np);
	$sql=mysqli_query($con,"update user set password='$np' where email='$email'");
	$err="<font color='blue'>Password updated </font>";

	}
	else
	{
	$err="<font color='red'>New password do not match !!</font>";
	}
}

else
{

$err="<font color='red'>Wrong Old Password </font>";

}
}
}

?>
<div class="panel title">
<h2 align="center">Update Password</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your Old Password</div>
		<div class="col-sm-5">
		<input type="password" name="password" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your New Password</div>
		<div class="col-sm-5">
		<input type="password" name="np" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"> Confirm New Password</div>
		<div class="col-sm-5">
		<input type="password" name="cp" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		
		<input type="submit" value="Update Password" name="save" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>
