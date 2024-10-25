<?php
include("Head.php");
include('../Assets/Connection/connection.php');
session_start();
if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $pwd=$_POST['pwd'];
$selAdmin="select * from tbl_admin where admin_email='$email' and admin_pwd='$pwd'";
$resultAdmin=$con->query($selAdmin);
if($dataAdmin=$resultAdmin->fetch_assoc())
{
	$_SESSION['aid']=$dataAdmin['admin_id'];
	$_SESSION['aname']=$dataAdmin['admin_name'];
	header('location:../Admin/Homepage.php');
	
}

//user

$selUser="select * from tbl_user where user_email='$email' and user_password='$pwd'";
$resultUser=$con->query($selUser);
if($dataUser=$resultUser->fetch_assoc())
{
	$_SESSION['uid']=$dataUser['user_id'];
	$_SESSION['uname']=$dataUser['user_name'];
	header('location:../User/Homepage.php');

}
$selDoc="select * from tbl_doctor where doctor_email='$email' and doctor_pwd='$pwd'";
$resultDoc=$con->query($selDoc);
if($dataDoc=$resultDoc->fetch_assoc())
{
	$_SESSION['did']=$dataDoc['doctor_id'];
	$_SESSION['dname']=$dataDoc['doctor_name'];
	header('location:../Doctor/Homepage.php');

}
else 
{?>
       <script>
	   alert("Invalid Login");
	   window.location="Login.php"
	   </script>
       <?php
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
                    <h4 class="text-center">Login</h4>
                </div>
                <div class="card-body rounded-bottom">
                    <form id="form1" name="form1" method="post" action="">
                        <div class="mb-3">
                            <label for="email" class="form-label"><strong>Email</strong></label>
                            <input type="email" class="form-control rounded" required name="email" id="email" placeholder="Enter your email" />
                        </div>
                        
                        <div class="mb-3">
                            <label for="pwd" class="form-label"><strong>Password</strong></label>
                            <input type="password" class="form-control rounded" required name="pwd" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter your password" />
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" name="login" id="login" class="btn btn-primary rounded-pill">Login</button>
                        </div>
                        
                        <div class="text-center mt-3">
                            <p>Don't have an account? <a href="User.php" class="text-info">Register</a></p>
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