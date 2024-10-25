<option value="">...Select...</option>
<?php
include("../Connection/Connection.php");       
$sel="SELECT * FROM tbl_slot";
$res=$con->query($sel);
while ($row = $res->fetch_assoc()) {
  $slot_id = $row['slot_id'];

  
  $today = date('Y-m-d');
  $check = "SELECT * FROM tbl_booking WHERE slot_id = '$slot_id' AND booking_date = '".$_GET["date"]."'";
  $bookingRes = $con->query($check);
  $booked = $bookingRes->num_rows > 3;
  ?>
  <option value="<?php echo $slot_id; ?>" <?php echo ($booked) ? 'disabled' : ''; ?>>
	<?php echo $row['slot_time']  ?>
	<?php echo ($booked) ? '(Already Booked)' : ''; ?>
  </option>
  <?php
}
?>