<?php

include("adheader.php");
include("dbconnection.php");
session_start();
if(isset($_POST['submit']))
{
	$sql = "UPDATE nurse SET password='$_POST[newpassword]' WHERE password='$_POST[oldpassword]' AND nurseid='$_SESSION[nurseid]'";
	$qsql= mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<div class='alert alert-success'>
		 Password updated successfully
	</div>";
	}
	else
	{
		echo "<div class='alert alert-warning'>
		 nurse record update Failed
	</div>";		
	}
}
?>
<div class="container-fluid">
    <div class="block-header">
        <h2 class="text-center"> Nurse's Password</h2>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
<form method="post" action="" name="frmnurseprofile" onSubmit="return validateform()">


		<div class="body">
			<div class="row clearfix">
				<div class="col-sm-12">   
					<div class="form-group">
						<div class="form-line">
							<input class="form-control" type="password" name="oldpassword" id="oldpassword" placeholder="Old Password" />
						</div>
					</div>
				
				</div>	
				
			</div>
			<div class="row clearfix"> 
				<div class="col-sm-12">                           
				 <div class="form-group">
						<div class="form-line">
							<input class="form-control" type="password" name="newpassword" id="newpassword" placeholder="New Password" />
						</div>
					</div>    
				</div>                      
			</div>  
			<div class="row clearfix"> 
			<div class="col-sm-12">                              
				 <div class="form-group">
						<div class="form-line">
							<input class="form-control" type="password" name="password" id="password" placeholder="Confirm Password" />
						</div>
					</div>
					</div>                          
			</div>                     
			<div class="col-sm-12">
				<input type="submit" class="btn btn-raised g-bg-cyan" name="submit" id="submit" value="Submit" />
				
			</div>
		</div>
	</div>

</form>


 <div class="clear"></div>
  </div>
</div>
<?php
include("adfooter.php");
?>
<script type="application/javascript">
function validateform1()
{
	if(document.frmnursechange.oldpassword.value == "")
	{
		alert("Old password should not be empty..");
		document.frmnursechange.oldpassword.focus();
		return false;
	}
	else if(document.frmnursechange.newpassword.value == "")
	{
		alert("New Password should not be empty..");
		document.frmnursechange.newpassword.focus();
		return false;
	}
	else if(document.frmnursechange.newpassword.value.length < 8)
	{
		alert("New Password length should be more than 8 characters...");
		document.frmnursechange.newpassword.focus();
		return false;
	}
	else if(document.frmnursechange.newpassword.value != document.frmnursechange.password.value )
	{
		alert(" New Password and confirm password should be equal..");
		document.frmnursechange.password.focus();
		return false;
	}
	else
	{
		return true;
	}
}
</script>
