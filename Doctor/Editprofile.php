<?php
include("Head.php");

include('../Assets/Connection/connection.php');


// session_start();

$select="select * from tbl_doctor s inner join tbl_department c on s.department_id=c.department_id where doctor_id=".$_SESSION['did'];
$result=$con->query($select);
$data=$result->fetch_assoc();

if(isset($_POST['update']))
{
	$name=$_POST['name'];
	$contact=$_POST['contact'];

	$email=$_POST['email'];
	$address=$_POST['address'];
	$department=$_POST['department'];
	$pwd=$_POST['pwd'];
$update = "UPDATE tbl_doctor SET doctor_name = '".$name."', 
    doctor_email = '".$email."', 
    doctor_contact = '".$contact."', 
    doctor_address = '".$address."'
WHERE doctor_id =".$_SESSION['did'];
   if( $con->query($update))
   {
	   ?>
       <script>
	   alert("Data updated");
	   window.location="Editprofile.php"
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
<body class="bg-light">
  <div class="container mt-5">
    <h2 class="text-primary mb-4">Doctor Information</h2>
    <form id="form1" name="form1" method="post" action="">
      <div class="card rounded shadow-sm">
        <div class="card-body">
          <table class="table">
            <tr>
              <td><label for="name">Name</label></td>
              <td>
                <input required type="text" value="<?php echo $data['doctor_name']?>" name="name" id="name" 
                       class="form-control" title="Name Allows Only Alphabets, Spaces and First Letter Must Be Capital Letter" 
                       pattern="^[A-Z]+[a-zA-Z ]*$" />
              </td>
            </tr>
            <tr>
              <td><label for="contact">Contact</label></td>
              <td>
                <input required type="text" value="<?php echo $data['doctor_contact']?>" name="contact" 
                       class="form-control" pattern="[7-9]{1}[0-9]{9}" 
                       title="Phone number with 7-9 and remaining 9 digit with 0-9" id="contact" />
              </td>
            </tr>
            <tr>
              <td><label for="email">Email</label></td>
              <td>
                <input type="email" value="<?php echo $data['doctor_email']?>" required name="email" 
                       class="form-control" id="email" />
              </td>
            </tr>
            <tr>
              <td><label for="address">Address</label></td>
              <td>
                <textarea name="address" id="address" class="form-control" cols="45" rows="5" required><?php echo $data['doctor_address']?></textarea>
              </td>
            </tr>
            <tr>
              <td><label for="department">Department</label></td>
              <td>
                <input type="text" value="<?php echo $data['department_name']?>" required name="department" 
                       class="form-control" id="department" />
              </td>
            </tr>
            <tr>
              <td colspan="2" class="text-center">
                <input type="submit" name="update" id="update" value="Update" class="btn btn-primary" />
              </td>
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