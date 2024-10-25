<?php
include("Head.php");

include("../Assets/Connection/Connection.php");
$district="";
$aid=0;
if(isset($_POST["btn_submit"]))
{
    $district=$_POST["txt_district"];
	$aid=$_POST["txt_aid"];
	$sel=" select * from tbl_district where district_name='".$district."'";
	$res=$con->query($sel);
	if($d=$res->fetch_assoc())
	{
		?>
        <script>
		alert('Already Exist');
		</script>
        <?php
	}
	else if($aid='')
	{
		
	$insQry="insert into tbl_district(district_name)values('".$district."')";
	
	if($con->query($insQry))
	{
	 ?>
       <script>
	   alert("Data inserted");
	   window.location="District.php";
	   </script>
       <?php
       
	}
	}
	
	else 
	{
		$upQry="update tbl_district set district_name='".$district."' where district_id=".$aid;
		if($con->query($upQry))
		{
			$aid=0;
			?>
        <script>
		window.location="District.php";
		</script>
        <?php
        }
	}
}
if(isset($_GET["did"]))
{
	$did=$_GET["did"];
	$delQry="Delete from tbl_district where district_id=".$did;
	if($con->query($delQry))
	{
		?>
        <script>
		window.location="District.php";
		</script>
        <?php
	}
}
if(isset($_GET["eid"]))
{
	$eid=$_GET["eid"];
	$selQryOne="Select * from tbl_district where district_id=".$eid;
	$resultOne=$con->query($selQryOne);
	$dataOne=$resultOne->fetch_assoc();
	$district=$dataOne["district_name"];
	$aid=$dataOne["district_id"];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>District</title>
</head>
<body class="bg-light">
  <div class="container mt-5">
    <header class="bg-primary text-white p-3 rounded mb-4">
      <h2 class="text-start">District Management</h2>
    </header>

    <div class="card rounded shadow-sm">
      <div class="card-body">
        <form id="form1" name="form1" method="post" action="">
          <div class="mb-3">
            <label for="txt_district" class="form-label">District</label>
            <input type="text" value="<?php echo $district;?>" name="txt_district" id="txt_district" class="form-control" />
            <input type="hidden" name="txt_aid" value="<?php echo $aid; ?>" />
          </div>
          <div class="text-center">
            <input type="submit" name="btn_submit" id="btn_submit" value="Submit" class="btn btn-success" />
          </div>
        </form>

        <p>&nbsp;</p>

        <table class="table table-bordered mt-4">
          <thead class="table-light">
            <tr>
              <th class="text-center">Sno</th>
              <th class="text-center">District Name</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $SelQry = "SELECT * FROM tbl_district";
            $result = $con->query($SelQry);
            $i = 0;
            while ($data = $result->fetch_assoc()) {
              $i++;
            ?>
              <tr align="center">
                <td><?php echo $i; ?></td>
                <td><?php echo $data["district_name"]; ?></td>
                <td>
                  <a href="District.php?did=<?php echo $data["district_id"]; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure you want to delete this district?');">Delete</a>
                  <a href="District.php?eid=<?php echo $data["district_id"]; ?>" class="btn btn-info btn-sm">Edit</a>
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