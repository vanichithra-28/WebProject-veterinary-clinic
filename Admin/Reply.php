<?php
include("Head.php");

include('../Assets/Connection/connection.php');
// session_start();

if(isset($_POST['submit']))
{
	$content=$_POST['reply'];
	$update="update tbl_complaints set complaint_reply='".$content."', complaint_status=1 where complaint_id='".$_GET['uid']."'";
   if( $con->query($update))
   {
	   ?>
       <script>
	   alert("Reply Added");
	  window.location="Viewcomplaints.php"
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
  <div class="container mt-5">
    <h2 class="text-info mb-4 text-start">Submit Your Reply</h2>
    <form id="form1" name="form1" method="post" action="">
      <div class="card rounded shadow-sm">
        <div class="card-body">
          <div class="mb-3">
            <label for="reply" class="form-label">Reply</label>
            <input type="text" name="reply" id="reply" class="form-control" required />
          </div>
          <div class="text-center">
            <input type="submit" name="submit" id="submit" value="Add" class="btn btn-primary" />
          </div>
        </div>
      </div>
    </form>
  </div>
</body>

</html>
<?php
include("Foot.php");
?>