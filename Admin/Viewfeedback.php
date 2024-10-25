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
    <header class="bg-success text-white p-2 rounded mb-4">
      <h2 class="text-start">Feedback List</h2>
    </header>

    <div class="card rounded shadow-sm">
      <div class="card-body">
        <table class="table table-bordered">
          <thead class="table-light">
            <tr>
              <th>SlNo</th>
              <th>Content</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            $select = "SELECT * FROM tbl_feedback";
            $result = $con->query($select);
            while ($row = $result->fetch_assoc()) {
              $i++;
            ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row["feedback_content"]; ?></td>
                <td><?php echo $row["feedback_date"]; ?></td>
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