<?php
include("Head.php");

include('../Assets/Connection/connection.php');
$aid=0;
if(isset($_POST['add']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$photo=$_FILES["photo"]["name"];
	$temp_photo=$_FILES["photo"]["tmp_name"];
	move_uploaded_file($temp_photo,"../Assets/files/Photo/".$photo);
	$pwd=$_POST['password'];
	$department_id=$_POST['department'];
	
		$sel=" select * from tbl_doctor where doctor_email='".$email."'";
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
	
	
	$insert="insert into tbl_doctor(doctor_name,doctor_email,doctor_contact,doctor_address,doctor_photo,doctor_pwd,department_id) values ('".$name."','".$email."','".$contact."','".$address."','".$photo."','".$pwd."','".$department_id."')";
  
   if( $con->query($insert))
   {
	   ?>
       <script>
	   alert("Data inserted");
	   window.location="Doctor.php"
	   </script>
       <?php
   
      }
	  	
}}

//delete
if (isset($_GET['delete_id'])) {
  
    $delete_id = ($_GET['delete_id']); 
  $delete = "DELETE FROM tbl_doctor WHERE doctor_id = $delete_id";

  if ($con->query($delete)) {
    echo '<script>alert("Deleted successfully!"); window.location="Doctor.php";</script>';
  } else {
    echo '<script>alert("Error deleting doctor: ' . $con->error . '");</script>';
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
    <header class="bg-primary text-white p-3 rounded mb-4">
      <h2 class="text-start">Add Doctor</h2>
    </header>

    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <div class="card rounded shadow-sm mb-4" style="border-radius: 15px;">
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <td><label for="name">Name</label></td>
              <td><input required type="text" name="name" id="name" title="Name Allows Only Alphabets, Spaces, and First Letter Must Be Capital Letter" pattern="^[A-Z]+[a-zA-Z ]*$" class="form-control" /></td>
            </tr>
            <tr>
              <td><label for="email">Email</label></td>
              <td><input required type="email" name="email" id="email" class="form-control" /></td>
            </tr>
            <tr>
              <td><label for="contact">Contact</label></td>
              <td><input required type="text" name="contact" pattern="[7-9]{1}[0-9]{9}" title="Phone number starting with 7-9 followed by 9 digits" id="contact" class="form-control" /></td>
            </tr>
            <tr>
              <td><label for="address">Address</label></td>
              <td><textarea name="address" id="address" cols="45" rows="5" required class="form-control"></textarea></td>
            </tr>
            <tr>
              <td><label for="photo">Photo</label></td>
              <td><input type="file" name="photo" id="photo" required class="form-control-file" /></td>
            </tr>
            <tr>
              <td><label for="password">Password</label></td>
              <td><input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required name="password" id="password" class="form-control" /></td>
            </tr>
            <tr>
              <td><label for="department">Department</label></td>
              <td>
                <select name="department" id="department" required class="form-control">
                  <option value="">Select Department</option>
                  <?php
                  $depQry = "SELECT * FROM tbl_department";
                  $depResult = $con->query($depQry);
                  while ($depRow = $depResult->fetch_assoc()) {
                  ?>
                    <option value="<?php echo $depRow['department_id']; ?>">
                      <?php echo $depRow['department_name']; ?>
                    </option>
                  <?php
                  }
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <td colspan="2" class="text-center">
                <input type="submit" name="add" id="add" value="Add" class="btn btn-success" />
              </td>
            </tr>
          </table>
        </div>
      </div>
    </form>

    <div class="card rounded shadow-sm">
      <div class="card-body">
        <table class="table table-bordered">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Contact</th>
              <th>Address</th>
              <th>Photo</th>
              <th>Department</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            $select = "SELECT * FROM tbl_doctor s INNER JOIN tbl_department c ON s.department_id = c.department_id";
            $result = $con->query($select);
            while ($row = $result->fetch_assoc()) {
              $i++;
            ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row["doctor_name"]; ?></td>
                <td><?php echo $row["doctor_email"]; ?></td>
                <td><?php echo $row["doctor_contact"]; ?></td>
                <td><?php echo $row["doctor_address"]; ?></td>
                <td><img src="../Assets/files/Photo/<?php echo $row["doctor_photo"]; ?>" width="75" height="75" /></td>
                <td><?php echo $row["department_name"]; ?></td>
                <td>
                  <a href="Doctor.php?delete_id=<?= $row["doctor_id"] ?>" onClick="return confirm('Are you sure you want to delete?');" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
<?php
include("Foot.php");
?>