<?php
include("Head.php");

include('../Assets/Connection/connection.php');
session_start();
 $message="";

if(isset($_POST['update']))
{$current=$_POST["old_pwd"];
	$newpwd=$_POST["new_pwd"];
	$confirmpwd=$_POST["confirm_pwd"];
	

  	$select="select * from tbl_user where user_password='".$current."' and user_id='".$_SESSION['uid']."'";
	$result=$con->query($select);
	if($data=$result->fetch_assoc())
	{	
		if($newpwd==$confirmpwd)
		{
		
				$update="update tbl_user set user_password='".$_POST["new_pwd"]."' where user_id='".$_SESSION['uid']."'";
				if($con->query($update))
					{
						
											  ?>
       <script>
	alert("Password Updated... ");
	   window.location="Profile.php"
	   </script>
       <?php
					}
		}
		else
		{
				
					$message="Password not matching..";
		}
		
	}
	else
	{
			
			$message="incorrect password..";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card rounded shadow-sm">
                <div class="card-header bg-primary text-white rounded-top">
                    <h4 class="text-center">Change Password</h4>
                </div>
                <div class="card-body rounded-bottom">
                    <form id="form1" name="form1" method="post" action="">
                        <div class="mb-3 row">
                            <label for="old_pwd" class="col-sm-4 col-form-label">Old Password</label>
                            <div class="col-sm-8">
                                <input type="password" required name="old_pwd" id="old_pwd" class="form-control" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="new_pwd" class="col-sm-4 col-form-label">New Password</label>
                            <div class="col-sm-8">
                                <input type="password" required name="new_pwd" id="new_pwd" 
                                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                                       title="Must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters" 
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="confirm_pwd" class="col-sm-4 col-form-label">Confirm Password</label>
                            <div class="col-sm-8">
                                <input type="password" required name="confirm_pwd" id="confirm_pwd" 
                                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                                       title="Must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters" 
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="mb-3 row text-center">
                            <div class="col-sm-12">
                                <input type="submit" name="update" id="update" value="Update" class="btn btn-primary rounded-pill" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <span class="text-danger"><?php echo $message; ?></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (Optional, if you need JS components like modals) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
include("Foot.php");
?>