<?php
include("Head.php");

include('../Assets/Connection/connection.php');
if (isset($_GET['delete_id'])) {
  
    $delete_id = ($_GET['delete_id']); 
  $delete = "DELETE FROM tbl_user WHERE user_id = $delete_id";

  if ($con->query($delete)) {
    echo '<script>alert("Deleted successfully!"); window.location="user.php";</script>';
  } else {
    echo '<script>alert("Error deleting pet details: ' . $con->error . '");</script>';
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
    <h2 class="text-success mb-4 text-start">Registered Users</h2>
    <form id="form1" name="form1" method="post" action="">
      <div class="card rounded shadow-sm">
        <div class="card-body">
          <table class="table table-bordered">
            <thead class="table-light">
              <tr>
                <th scope="col">SlNo</th>
                <th scope="col">Registered Users</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $i = 0;
              $select = "SELECT * FROM tbl_user";
              $result = $con->query($select);
              while ($row = $result->fetch_assoc()) {
                $i++;
              ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row["user_name"]; ?></td>
                  <td><a href="user.php?delete_id=<?= $row["user_id"] ?>" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure you want to delete?');">Delete</a></td>
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