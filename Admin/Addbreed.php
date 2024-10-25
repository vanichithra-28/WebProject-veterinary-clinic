<?php
include("Head.php");
include('../Assets/Connection/connection.php');



if(isset($_POST['submit']))
{
	$name=$_POST['breed'];
	
	$category=$_POST['category'];
	

	$insert="insert into tbl_breed(breed_name,category_id)values('".$name."','".$category."')";
   if( $con->query($insert))
   {
	   ?>
       <script>
	   alert("Data inserted");
	   window.location="Addbreed.php"
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
    <div class="card rounded shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="text-start">Add Breed</h4>
        </div>
        <div class="card-body">
            <form id="form1" name="form1" method="post" action="">
                <div class="mb-3 row">
                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <select name="category" id="category" class="form-select" required>
                            <option value="">Select Category</option>
                            <?php
                            $select = "SELECT * FROM tbl_category"; 
                            $result = $con->query($select);
                            while ($row = $result->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $row['category_id']; ?>">
                                    <?php echo $row['category_name']; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="breed" class="col-sm-2 col-form-label">Breed Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="breed" id="breed" class="form-control" required />
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary rounded-pill" />
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html><?php
include("Foot.php");
?>