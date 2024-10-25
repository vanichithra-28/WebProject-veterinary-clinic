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
        <div class="col-md-8">
            <div class="card rounded shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="text-start">Prescription Details</h4>
                </div>
                <div class="card-body">
                    <form id="form1" name="form1" method="post" action="">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>SlNo</th>
                                    <th>Medicine Name</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $presid = $_GET['bid'];
                                $i = 0;
                                $select = "SELECT * FROM tbl_prescription WHERE booking_id = '{$presid}'";
                                $result = $con->query($select);
                                while ($row = $result->fetch_assoc()) {
                                    $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row["presc_content"]; ?></td>
                                    <td><?php echo $row["presc_date"]; ?></td>
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