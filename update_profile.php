<?php 
extract($_REQUEST);
if(isset($update))
{

$query="update user set name='$name',mobile='$mob', where email='".$_SESSION['email']."'";


mysqli_query($con,$query);



$err="<font color='blue'>Profie updated successfully !!</font>";


}


//select old data
//check user alereay exists or not
$sql=mysqli_query($con,"select * from user where email='".$_SESSION['email']."'");
$res=mysqli_fetch_assoc($sql);

?><div class="panel title">
<h2 align="center">Update Your Profile</h2>

		<form method="post">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your New Name [First Name]</td>
					<Td><input class="form-control" value="<?php echo $res['name'];?>"  type="text" name="n"/></td>
				</tr>
				<tr>
					<td>Enter Your Email </td>
					<Td><input class="form-control" type="email" readonly="true" value="<?php echo $res['email'];?>"  name="e"/></td>
				</tr>
				
				<tr>
					<td>Enter Your Gender </td>
					<Td><input class="form-control" type="gender" readonly="true" value="<?php echo $res['gender'];?>"  name="gmail"/></td>
				</tr>
				
				<tr>
					<td>Enter Your Mobile Number </td>
					<Td><input class="form-control" type="text" value="<?php echo $res['mob'];?>"  name="mob"/></td>
				</tr>
				
				<tr>
				
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-default" value="Update My Profile" name="update"/>
<input type="reset" class="btn btn-default" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	