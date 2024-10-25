<?php
include("Head.php");
include('../Assets/Connection/connection.php');

if(isset($_POST['register']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	
	$pwd=$_POST['pwd'];
	$place=$_POST['place'];
	$district=$_POST['district'];
	//**
	
	$sel=" select * from tbl_user where user_email='".$email."'";
	$res=$con->query($sel);
	if($d=$res->fetch_assoc())
	{
		?>
        <script>
		alert('Already Exist');
		</script>
        <?php
	}
	else 
	{
	
$insert="insert into tbl_user(user_name,user_contact,user_email,user_address,user_password,place_id,district_id) values ('".$name."','".$contact."','".$email."','".$address."','".$pwd."','".$place."','".$district."')";
   if( $con->query($insert))
   {
	   ?>
       <script>
	   alert("Registration Completed");
	   window.location="Login.php"
	   </script>
       <?php
       }
	   else 
{?>
       <script>
	   alert("Invalid Registration");
	   window.location="User.php"
	   </script>
       <?php
       }}	
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
        <div class="col-md-8">
            <div class="card rounded shadow-sm">
                <div class="card-header bg-primary text-white rounded-top">
                    <h4 class="text-center">User Registration</h4>
                </div>
                <div class="card-body rounded-bottom">
                    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                        <div class="mb-3">
                            <label for="name" class="form-label"><strong>Name</strong></label>
                            <input required type="text" name="name" id="name" class="form-control rounded" title="Name Allows Only Alphabets, Spaces and First Letter Must Be Capital Letter" pattern="^[A-Z]+[a-zA-Z ]*$" />
                        </div>
                        
                        <div class="mb-3">
                            <label for="contact" class="form-label"><strong>Contact</strong></label>
                            <input required type="text" name="contact" id="contact" class="form-control rounded" pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaining 9 digits with 0-9" />
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label"><strong>Email</strong></label>
                            <input type="email" required name="email" id="email" class="form-control rounded" />
                        </div>
                        
                        <div class="mb-3">
                            <label for="address" class="form-label"><strong>Address</strong></label>
                            <textarea name="address" id="address" class="form-control rounded" cols="45" rows="5" required></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="district" class="form-label"><strong>District</strong></label>
                            <select name="district" id="district" class="form-select rounded" onChange="getPlace(this.value)" required>
                                <option value="">Select District</option>
                                <?php
                                $districtQry = "SELECT * FROM tbl_district";
                                $districtResult = $con->query($districtQry);
                                while ($districtRow = $districtResult->fetch_assoc()) {
                                ?>
                                    <option value="<?php echo $districtRow['district_id']; ?>">
                                        <?php echo $districtRow['district_name']; ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="place" class="form-label"><strong>Place</strong></label>
                            <select name="place" id="place" class="form-select rounded" required>
                                <option value="">Select Place</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="pwd" class="form-label"><strong>Password</strong></label>
                            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required name="pwd" id="pwd" class="form-control rounded" />
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" name="register" id="register" class="btn btn-primary rounded-pill">Register</button>
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


 <script src="../Assets/JQ/jQuery.js"></script>
<script>
  function getPlace(did) {
    $.ajax({
      url: "../Assets/AjaxPages/AjaxPlace.php?did=" + did,
      success: function (result) {

        $("#place").html(result);
      }
    });
  }

</script>
</html>
<?php
include("Foot.php");
?>