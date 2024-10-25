<?php
include("Head.php");

include("../Assets/Connection/Connection.php");

if(isset($_POST["btn_submit"]))
{
	$place=$_POST["txt_place"];
	
	$district=$_POST["sel_dist"];
	$insQry="insert into tbl_place(place_name,district_id)values('".$place."','".$district."')";
     
	 if($con->query($insQry))
	 {
		 ?>
       <script>
	   alert("Data inserted");
	   window.location="place.php"
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
<body class="bg-light">
  <div class="container mt-5" style="max-width: 600px;">
    <header class="bg-primary text-white p-3 rounded mb-4">
      <h2 class="text-start">Place Management</h2>
    </header>

    <div class="card rounded shadow-sm">
      <div class="card-body">
        <form id="form1" name="form1" method="post" action="">
          <div class="mb-3">
            <label for="sel_dist" class="form-label">District</label>
            <select name="sel_dist" id="sel_dist" class="form-select">
              <option>----- Select ------</option>
              <?php
              $selOptionQry = "SELECT * FROM tbl_district";
              $OptionResult = $con->query($selOptionQry);
              while ($Optiondata = $OptionResult->fetch_assoc()) {
              ?>
                <option value="<?php echo $Optiondata["district_id"]; ?>">
                  <?php echo $Optiondata["district_name"]; ?>
                </option>
              <?php
              }
              ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="txt_place" class="form-label">Place</label>
            <input type="text" name="txt_place" id="txt_place" class="form-control" />
          </div>

          <div class="text-center">
            <input type="submit" name="btn_submit" id="btn_submit" value="Submit" class="btn btn-success me-2" />
            <input type="submit" name="btn_cancel" id="btn_cancel" value="Cancel" class="btn btn-secondary" />
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
<?php
include("Foot.php");
?>