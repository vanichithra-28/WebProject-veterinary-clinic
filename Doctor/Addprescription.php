<?php
include("Head.php");

include('../Assets/Connection/connection.php');


if(isset($_POST['add']))
{
	$content=$_POST['content'];
	$insert="insert into tbl_prescription(presc_content,presc_date,booking_id) values ('".$content."',curdate(),'".$_GET['bid']."')";
   if( $con->query($insert))
   {
	   ?>
            <script>
	   alert("Data inserted");
	  window.location="Viewallbooking.php"
	   </script>
        <?php
     }	
	   
}
// if (isset($_GET['delete_id'])) {
  
//     $delete_id = ($_GET['delete_id']); 
//   $delete = "DELETE FROM tbl_prescription WHERE presc_id = $delete_id";

//   if ($con->query($delete)) {
//     echo '<script>alert("Deleted successfully!"); window.location="Addprescription.php";</script>';
//   } else {
//     echo '<script>alert("Error deleting pet details: ' . $con->error . '");</script>';
//   }
// }


if (isset($_GET['delete_id'])) {
	$delete_id = intval($_GET['delete_id']); 
	$delete = "DELETE FROM tbl_prescription WHERE presc_id = $delete_id";
	if ($con->query($delete)) {
		echo '<script>alert("Deleted successfully!"); window.location="Addprescription.php?bid=' . $presid . '";</script>';
	} else {
		echo '<script>alert("Error deleting: ' . $con->error . '");</script>';
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
    <h2 class="text-primary mb-4 text-start">Add Prescription</h2>
    
    <form id="form1" name="form1" method="post" action="">
      <div class="card rounded shadow-sm mb-4" style="border-radius: 15px;">
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <td><label for="content">Prescription</label></td>
              <td><input type="text" name="content" id="content" class="form-control" /></td>
            </tr>
            <tr>
              <td colspan="2" class="text-center">
                <input type="submit" name="add" id="add" value="Add" class="btn btn-success" />
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
                <th class="text-center">Sl No</th>
                <th class="text-center">Medicine Name</th>
                <th class="text-center">Date</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $presid = $_GET['bid'];
              $i = 0;
              $select = "SELECT * FROM tbl_prescription WHERE booking_id='" . $presid . "'";
              $result = $con->query($select);
              while ($row = $result->fetch_assoc()) {
                $i++;
              ?>
                <tr>
                  <td class="text-center"><?php echo $i; ?></td>
                  <td><?php echo $row["presc_content"]; ?></td>
                  <td><?php echo $row["presc_date"]; ?></td>
                  <td>
                    <a href="Addprescription.php?delete_id=<?= $row["presc_id"] ?>" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure you want to delete?');">Delete</a>
                  </td>
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