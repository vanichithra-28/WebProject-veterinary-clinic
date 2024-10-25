
<?php
include("Head.php");
include('../Assets/Connection/connection.php');

session_start();

if(isset($_POST['add']))
{
	$name=$_POST['name'];
	$photo=$_FILES['photo']['name'];
	$temp_photo=$_FILES["photo"]["tmp_name"];
	move_uploaded_file($temp_photo,"../Assets/files/Photo/".$photo);
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$height=$_POST['height'];
	$weight=$_POST['weight'];
	$category=$_POST['category'];
	$breed=$_POST['breed'];
	$insert="insert into tbl_pet(pet_name,pet_photo,pet_age,gender,height,weight,category_id,breed_id,user_id) values ('".$name."','".$photo."','".$age."','".$gender."','".$height."','".$weight."','".$category."','".$breed."','".$_SESSION['uid']."')";
   if( $con->query($insert))
   {
	   ?>
       <script>
	   alert("Data inserted");
	   window.location="Addpets.php"
	   </script>
       <?php
       }	
	   
}
if (isset($_GET['delete_id'])) {
  
    $delete_id = ($_GET['delete_id']); 
  $delete = "DELETE FROM tbl_pet WHERE pet_id = $delete_id";

  if ($con->query($delete)) {
    echo '<script>alert("Deleted successfully!"); window.location="Addpets.php";</script>';
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

<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card rounded shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="text-start">Pet Registration Form</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" name="name" id="name" 
                                       title="Name Allows Only Alphabets, Spaces and First Letter Must Be Capital Letter" 
                                       pattern="^[A-Z]+[a-zA-Z ]*$"/>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="photo" id="photo" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="age" class="col-sm-2 col-form-label">Age</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="age" id="age" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Sex</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="gender" id="gender" value="Male" />
                                    <label class="form-check-label" for="gender">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="gender" id="gender2" value="Female" />
                                    <label class="form-check-label" for="gender2">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="height" class="col-sm-2 col-form-label">Height</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="height" id="height" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="weight" class="col-sm-2 col-form-label">Weight</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="weight" id="weight" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="category" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <select name="category" id="category" class="form-select" onChange="getBreed(this.value)" required>
                                    <option value="">Select Category</option>
                                    <?php
                                    $select = "SELECT * FROM tbl_category"; 
                                    $result = $con->query($select);
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="breed" class="col-sm-2 col-form-label">Breed</label>
                            <div class="col-sm-10">
                                <select name="breed" id="breed" class="form-select" required>
                                    <option value="">Select Breed</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" name="add" id="add" value="Add" class="btn btn-primary rounded-pill" />
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-5 rounded shadow-sm">
                <div class="card-header bg-success text-white">
                    <h4 class="text-start">Pet List</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SlNo</th>
                                <th>Name</th>
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
                            $i=0;
                            $select="SELECT * FROM tbl_pet s 
                                      INNER JOIN tbl_category c ON s.category_id=c.category_id 
                                      INNER JOIN tbl_breed b ON s.breed_id = b.breed_id 
                                      WHERE user_id=".$_SESSION['uid'];
                            $result=$con->query($select);
                            while($row=$result->fetch_assoc()) {
                                $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row["pet_name"]; ?></td>
                                <td><img src="../Assets/files/Photo/<?php echo $row["pet_photo"];?>" width="75" height="75" /></td>
                                <td><?php echo $row["pet_age"]; ?></td>
                                <td><?php echo $row["gender"]; ?></td>
                                <td><?php echo $row["height"]; ?></td>
                                <td><?php echo $row["weight"]; ?></td>
                                <td><?php echo $row["category_name"]; ?></td>
                                <td><?php echo $row["breed_name"]; ?></td>
                                <td>
                                    <a href="Addpets.php?delete_id=<?php echo $row["pet_id"]; ?>" onClick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-sm">Delete</a>
                                    <br>
                                    <a href="Book.php?pid=<?php echo $row["pet_id"]; ?>" class="btn btn-warning btn-sm mt-1">Book Appointment</a>
                                    <br>
                                    <a href="Viewappoinment.php?pid=<?php echo $row["pet_id"]; ?>" class="btn btn-success btn-sm mt-1">View Appointment</a>
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
    </div>
</div>

<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>


 <script src="../Assets/JQ/jQuery.js"></script>
<script>
  function getBreed(did) {
    $.ajax({
      url: "../Assets/AjaxPages/AjaxBreed.php?did=" + did,
      success: function (result) {

        $("#breed").html(result);
      }
    });
  }

</script>
</html>
<?php
include("Foot.php");
?>