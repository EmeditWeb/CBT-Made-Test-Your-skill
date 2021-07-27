
<?php 
extract($_REQUEST);
if(isset($submit))
{
$ref=@$_GET['q'];
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$id=uniqid();
$date=date("Y-m-d");
$time=date("h:i:sa");
$feedback = $_POST['feedback'];
$q=mysqli_query($con,"INSERT INTO feedback VALUES  ('$id' , '$name', '$email' , '$subject', '$feedback' , '$date' , '$time')")or die ("Error");

$err="<font color='blue'>Your Feedback has been sent successfully!!</font>";


}


//select old data
//check user alereay exists or not
$sql=mysqli_query($con,"select * from user where email='".$_SESSION['email']."'");
$res=mysqli_fetch_assoc($sql);
?><div class="col-md-11 panel title" >
<h2 align="center"> Your Feedback</h2>

		<form method="post">

		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" align="center"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
				<div class="col-md-3" required="required"><b>Name:</b><br /><br /><br><b>Subject:</b></div>
<div class="col-md-6">
<!-- Text input-->
<div class="form-group title">
  <input   readonly="true" id="name" name="name" class="form-control input-md" value="<?php echo $res['name'];?>"><br />    
   <input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text" required="required">    

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3" required="required"><b>E-Mail address:</b></div>
<div class="col-md-6">
<!-- Text input-->
<div class="form-group title">
  <input id="email" name="email" readonly="true" value="<?php echo $res['email'];?>" class="form-control input-md" type="email">    
 </div>
</div>
</div><!--End of row-->

<div class="form-group title" required="required"> 
<textarea rows="5" cols="5" name="feedback" class="form-control" required="required" placeholder="Write your feedback here..." ></textarea>
</div>
<div class="form-group" align="center" >
<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
</div>
</form>
<!-- End of Form -->