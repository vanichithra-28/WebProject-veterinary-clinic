<?php
include("Head.php");

include('../Assets/Connection/connection.php');
session_start();


if(isset($_POST['add']))
{
	$content=$_POST['content'];
	

	$insert="insert into tbl_feedback(feedback_content,feedback_date,user_id) values ('".$content."',curdate(),'".$_SESSION['uid']."')";
   if( $con->query($insert))
   {
	   ?>
       <script>
	   alert("Feedback sent");
	   window.location="Feedback.php"
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
            <h4 class="text-start">Feedback Form</h4>
        </div>
        <div class="card-body">
            <form id="form1" name="form1" method="post" action="">
                <div class="mb-3 row">
                    <label for="content" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                        <input type="text" name="content" id="content" class="form-control" required />
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" name="add" id="add" value="Send" class="btn btn-primary rounded-pill" />
                </div>
            </form>
        </div>
    </div>

    <div class="card mt-5 rounded shadow-sm">
        <div class="card-header bg-success text-white">
            <h4 class="text-start">Feedback List</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SlNo</th>
                        <th>Content</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    $select = "SELECT * FROM tbl_feedback WHERE user_id=" . $_SESSION['uid'];
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