
<?php
include("Head.php");
include('../Assets/Connection/connection.php');
if(isset($_POST['add']))
{
	$slot=$_POST['slot'];
	$count=$_POST['slot_count'];
//insert
	$insert="insert into tbl_slot(slot_time,slot_count) values ('".$slot."','".$count."')";
   if( $con->query($insert))
   {
	   ?>
       <script>
	   alert("Data inserted");
	   window.location="Slot.php"
	   </script>
       <?php
       }	
	   
	   
	}
	//delete
	if (isset($_GET['delete_id'])) {
  
    $delete_id = ($_GET['delete_id']); 
  $delete = "DELETE FROM tbl_slot WHERE slot_id = $delete_id";

  if ($con->query($delete))
   {
    ?>
       <script>
	   alert("Data deleted");
	   window.location="Slot.php"
	   </script>
       <?php
       }
	   else
	   {echo"error";
	   
	   }
	   
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body class="bg-light">
  <div class="container mt-5">
    <header class="bg-primary text-white p-3 rounded mb-4">
      <h2 class="text-start">Manage Slots</h2>
    </header>

    <form id="form1" name="form1" method="post" action="">
      <div class="card rounded shadow-sm mb-4" style="border-radius: 15px;">
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <td><label for="slot">Slot</label></td>
              <td><input type="time" name="slot" id="slot" class="form-control" /></td>
            </tr>
            <tr>
              <td><label for="slot_count">Slot Count</label></td>
              <td><input type="number" name="slot_count" id="slot_count" class="form-control" /></td>
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
              <th>Slot</th>
              <th>Slot Count</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            $select = "SELECT * FROM tbl_slot";
            $result = $con->query($select);
            while ($row = $result->fetch_assoc()) {
              $i++;
            ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row["slot_time"]; ?></td>
                <td><?php echo $row["slot_count"]; ?></td>
                <td>
                  <a href="Slot.php?delete_id=<?= $row["slot_id"] ?>" onClick="return confirm('Are you sure you want to delete this slot?');" class="btn btn-danger btn-sm">Delete</a>
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