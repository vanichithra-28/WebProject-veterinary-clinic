<?php
include("Head.php");

include('../Assets/Connection/connection.php');

// session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body class="bg-light">
  <div class="container mt-5">
    <h2 class="text-primary mb-4 text-start">Booking List</h2>
    <form id="form1" name="form1" method="post" action="">
      <div class="card rounded shadow-sm" style="border-radius: 15px;">
        <div class="card-body">
          <table class="table table-bordered table-hover">
            <thead class="table-light">
              <tr>
                <th width="61">Sl No</th>
                <th width="106">Date</th>
                <th width="126">Pet Owner</th>
                <th width="130">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 0;
              $select = "SELECT * FROM tbl_booking s 
                         INNER JOIN tbl_pet c ON s.pet_id = c.pet_id 
                         INNER JOIN tbl_user u ON c.user_id = u.user_id 
                         WHERE doctor_id = " . $_SESSION['did'] . " 
                         AND booking_status = 1";
              $result = $con->query($select);
              while ($row = $result->fetch_assoc()) {
                $i++;
              ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row["booking_date"]; ?></td>
                  <td><?php echo $row["user_name"]; ?></td>
                  <td>
                    <a href="Viewpets.php?pid=<?= $row["pet_id"] ?>&bid=<?= $row["booking_id"] ?>" class="btn btn-info btn-sm">View Pet</a>
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