
<?php
include("Head.php");

include('../Assets/Connection/connection.php');

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
      <h2 class="text-start">Complaints List</h2>
    </header>

    <div class="card rounded shadow-sm">
      <div class="card-body">
        <table class="table table-bordered">
          <thead class="table-light">
            <tr>
              <th>SlNo</th>
              <th>Content</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            $select = "SELECT * FROM tbl_complaints WHERE complaint_status=0";
            $result = $con->query($select);
            while ($row = $result->fetch_assoc()) {
              $i++;
            ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row["complaint_content"]; ?></td>
                <td><?php echo $row["complaint_date"]; ?></td>
                <td>
                  <a href="Reply.php?uid=<?php echo $row["complaint_id"]; ?>" class="btn btn-primary btn-sm">Reply</a>
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