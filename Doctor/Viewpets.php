
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
    <h2 class="text-primary mb-4 text-start">Pet Details</h2>
    <form id="form1" name="form1" method="post" action="">
      <div class="card rounded shadow-sm" style="border-radius: 15px;">
        <div class="card-body">
          <table class="table table-bordered table-hover">
            <thead class="table-light">
              <tr>
                <th>Pet Name</th>
                <th>Photo</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Category</th>
                <th>Breed</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $select = "SELECT * FROM tbl_pet s 
                         INNER JOIN tbl_category c ON s.category_id = c.category_id  
                         INNER JOIN tbl_breed b ON s.breed_id = b.breed_id 
                         WHERE pet_id = " . $_GET['pid'];
              $result = $con->query($select);
              while ($row = $result->fetch_assoc()) {
              ?>
                <tr>
                  <td><?php echo $row["pet_name"]; ?></td>
                  <td><img src="../Assets/files/Pet/<?php echo $row["pet_photo"]; ?>" width="75" height="75" /></td>
                  <td><?php echo $row["pet_age"]; ?></td>
                  <td><?php echo $row["gender"]; ?></td>
                  <td><?php echo $row["height"]; ?></td>
                  <td><?php echo $row["weight"]; ?></td>
                  <td><?php echo $row["category_name"]; ?></td>
                  <td><?php echo $row["breed_name"]; ?></td>
                  <td>
                    <a href="Addprescription.php?bid=<?php echo $_GET['bid'] ?>" class="btn btn-info btn-sm">Add Prescription</a>
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