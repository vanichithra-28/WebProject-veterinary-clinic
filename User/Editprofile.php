<?php
include("Head.php");

include('../Assets/Connection/connection.php');


session_start();

$select="select * from tbl_user where user_id=".$_SESSION['uid'];
$result=$con->query($select);
$data=$result->fetch_assoc();

if(isset($_POST['update']))
{   $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
	
  $update = "UPDATE tbl_user SET user_name = '".$name."', user_email = '".$email."', user_contact = '".$contact."', user_address = '".$address."' WHERE user_id =".$_SESSION['uid'];

   if( $con->query($update))
   {
	   ?>
       <script>
	   alert("Data updated");
	   window.location="Profile.php"
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
        <div class="col-md-8">
            <div class="card shadow-sm rounded">
                <div class="card-header bg-primary text-white text-center rounded-top">
                    <h4>Edit Profile</h4>
                </div>
                <div class="card-body">
                    <form id="form1" name="form1" method="post" action="">
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control rounded" value="<?php echo $data['user_name']; ?>" 
                                   name="name" id="name" required 
                                   pattern="^[A-Z]+[a-zA-Z ]*$" 
                                   title="Name allows only alphabets, spaces, and the first letter must be capitalized" />
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control rounded" value="<?php echo $data['user_email']; ?>" 
                                   name="email" id="email" required />
                        </div>

                        <div class="form-group mb-3">
                            <label for="contact">Contact</label>
                            <input type="text" class="form-control rounded" value="<?php echo $data['user_contact']; ?>" 
                                   name="contact" id="contact" required 
                                   pattern="[7-9]{1}[0-9]{9}" 
                                   title="Phone number must start with 7-9 and contain 10 digits" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="address">Address</label>
                            <textarea name="address" class="form-control rounded" id="address" rows="3" required><?php echo $data['user_address']; ?></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" name="update" id="update" class="btn btn-success rounded-pill">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
include("Foot.php");
?>