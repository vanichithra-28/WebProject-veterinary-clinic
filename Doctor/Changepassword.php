<?php
include("Head.php");

include('../Assets/Connection/connection.php');

// session_start();
 $message="";

if(isset($_POST['update']))
{$current=$_POST["oldpwd"];
	$newpwd=$_POST["newpwd"];
	$confirmpwd=$_POST["confirmpwd"];
	

  	$select="select * from tbl_doctor where doctor_pwd='".$current."' and doctor_id='".$_SESSION['did']."'";
	$result=$con->query($select);
	if($data=$result->fetch_assoc())
	{	
		if($newpwd==$confirmpwd)
		{
		
				$update="update tbl_doctor set doctor_pwd='".$_POST["newpwd"]."' where doctor_id='".$_SESSION['did']."'";
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

<body class="bg-primary">
  <div class="container mt-5">
    <h2 class="text-primary mb-5 text-start">Change Your Password</h2>
    <form id="form1" name="form1" method="post" action="">
      <div class="card rounded shadow-sm" style="border-radius: 15px;">
        <div class="card-body">
          <table class="table table-borderless">
            <tr>
              <td><label for="oldpwd" class="form-label">Old Password</label></td>
              <td><input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                         title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
                         required name="oldpwd" id="oldpwd" class="form-control form-control-sm" /></td>
            </tr>
            <tr>
              <td><label for="newpwd" class="form-label">New Password</label></td>
              <td><input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                         title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
                         required name="newpwd" id="newpwd" class="form-control form-control-sm" /></td>
            </tr>
            <tr>
              <td><label for="confirmpwd" class="form-label">Confirm Password</label></td>
              <td><input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                         title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
                         required name="confirmpwd" id="confirmpwd" class="form-control form-control-sm" /></td>
            </tr>
            <tr>
              <td colspan="2" class="text-center"><input type="submit" name="update" id="update" value="Update" class="btn btn-success btn-sm" /></td>
            </tr>
            <tr>
              <td colspan="2" class="text-danger text-center"><?php echo $message?></td>
            </tr>
          </table>
        </div>
      </div>
    </form>
  </div>
</body>

</html>

<?php
include("Foot.php");
?>