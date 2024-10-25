<?php

include("Head.php");
include('../Assets/Connection/connection.php');
session_start();


if(isset($_POST['book']))
{
	$date=$_POST['date'];
	$slot=$_POST['slot'];
	$doctor=$_POST['doctor'];
	

	$insert="insert into tbl_booking(booking_date,booking_to_date,slot_id,pet_id,doctor_id) values (curdate(),'".$date."','".$slot."','".$_GET['pid']."','".$doctor."')";
   if( $con->query($insert))
   {
	   $sel="select * from tbl_booking";
	   $res=$con->query($sel);
	   $data=$res->fetch_assoc();
	   
	   ?>
       <script>
	   window.location="Payment.php?bid=<?php echo $data['booking_id']?>"
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
            <div class="card rounded shadow-sm">
                <div class="card-header bg-primary text-white rounded-top">
                    <h4 class="text-center">Booking Form</h4>
                </div>
                <div class="card-body rounded-bottom">
                    <form id="form1" name="form1" method="post" action="">
                        <table class="table">
                            <tr>
                                <td><strong>Date</strong></td>
                                <td>
                                    <input type="date" name="date" id="date" class="form-control" min="<?php echo date('Y-m-d') ?>" onchange="getBookDate(this.value)" />
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Slot</strong></td>
                                <td>
                                    <select name="slot" id="slot" class="form-control">
                                        <option value="">Select slot</option>
                                        <?php
                                        $sel = "SELECT * FROM tbl_slot";
                                        $res = $con->query($sel);
                                        while ($row = $res->fetch_assoc()) {
                                            $slot_id = $row['slot_id'];
                                            $today = date('Y-m-d');
                                            $check = "SELECT * FROM tbl_booking WHERE slot_id = '$slot_id' AND booking_date = '$today'";
                                            $bookingRes = $con->query($check);
                                            $booked = $bookingRes->num_rows > 3;
                                            ?>
                                            <option value="<?php echo $slot_id; ?>" <?php echo ($booked) ? 'disabled' : ''; ?>>
                                                <?php echo $row['slot_time'] ?>
                                                <?php echo ($booked) ? '(Already Booked)' : ''; ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Doctor</strong></td>
                                <td>
                                    <select name="doctor" id="doctor" class="form-control">
                                        <option value="">Select Doctor</option>
                                        <?php
                                        $select = "SELECT * FROM tbl_doctor"; 
                                        $result = $con->query($select);
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <option value="<?php echo $row['doctor_id']; ?>">
                                                <?php echo $row['doctor_name']; ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <input type="submit" name="book" id="book" value="Book" class="btn btn-primary rounded-pill" />
                                </td>
                            </tr>
                        </table>
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
 <script src="../Assets/JQ/jQuery.js"></script>
<script>
  function getBookDate(did) {
    $.ajax({
      url: "../Assets/AjaxPages/AjaxBooking.php?date=" + did,
      success: function (result) {

        $("#slot").html(result);
      }
    });
  }

</script>
<?php
include("Foot.php");
?>