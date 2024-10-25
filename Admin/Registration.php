<?php
include("Head.php");

include('../Assets/Connection/connection.php');


if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['pwd'];
	$sel=" select * from tbl_admin where admin_email='".$email."'";
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
	
	$insert="insert into tbl_admin(admin_name,admin_email,admin_pwd) values ('".$name."','".$email."','".$password."')";
   if( $con->query($insert))
   {
	   ?>
       <script>
	   alert("Data inserted");
	   window.location="Registration.php"
	   </script>
       <?php
       }	
}}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h2 class="text-primary mb-4 text-start">Admin Registration</h2>

    <form id="form1" name="form1" method="post" action="">
      <div class="card rounded shadow-sm mb-4" style="border-radius: 15px;">
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <td><label for="name">Name</label></td>
              <td><input type="text" name="name" id="name" class="form-control" /></td>
            </tr>
            <tr>
              <td><label for="email">Email</label></td>
              <td><input type="text" name="email" id="email" class="form-control" /></td>
            </tr>
            <tr>
              <td><label for="pwd">Password</label></td>
              <td><input type="password" name="pwd" id="pwd" class="form-control" /></td>
            </tr>
            <tr>
              <td colspan="2" class="text-center">
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success" />
              </td>
            </tr>
          </table>
        </div>
      </div>

      <div class="card rounded shadow-sm" style="border-radius: 15px;">
        <div class="card-body">
          <table class="table table-bordered table-hover">
            <thead class="table-light">
              <tr>
                <th>Sl. No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 0;
              $select = "SELECT * FROM tbl_admin";
              $result = $con->query($select);
              while ($row = $result->fetch_assoc()) {
                $i++;
              ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row["admin_name"]; ?></td>
                  <td><?php echo $row["admin_email"]; ?></td>
                  <td><?php echo $row["admin_pwd"]; ?></td>
                </tr>
              <?php
              }
              ?>
            </tbody>
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