<?php
include("Head.php");

include('../Assets/Connection/connection.php');

session_start();

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
        <div class="col-md-10">
            <div class="card rounded shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="text-start">Appointment Details</h4>
                </div>
                <div class="card-body">
                    <form id="form1" name="form1" method="post" action="">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>SlNo</th>
                                    <th>Book Date</th>
                                    <th>To Date</th>
                                    <th>Slot</th>
                                    <th>Doctor</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                $pid = $_GET['pid'];
                                $select = "SELECT * FROM tbl_booking s 
                                           INNER JOIN tbl_slot c ON s.slot_id = c.slot_id
                                           INNER JOIN tbl_doctor d ON s.doctor_id = d.doctor_id 
                                           WHERE pet_id = $pid";
                                $result = $con->query($select);
                                while ($row = $result->fetch_assoc()) {
                                    $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row["booking_date"]; ?></td>
                                    <td><?php echo $row["booking_to_date"]; ?></td>
                                    <td><?php echo $row["slot_time"]; ?></td>
                                    <td><?php echo $row["doctor_name"]; ?></td>
                                    <td>
                                        Payment Completed <br>
                                        <a href="Viewpresc.php?bid=<?php echo $row["booking_id"]; ?>" class="btn btn-link">View Prescription</a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
include("Foot.php");
?>