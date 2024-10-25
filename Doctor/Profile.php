<?php
include("Head.php");

include('../Assets/Connection/connection.php');
// session_start();
    
$select="select * from tbl_doctor s inner join tbl_department c on s.department_id=c.department_id where doctor_id=".$_SESSION['did'];
$result=$con->query($select);
$data=$result->fetch_assoc();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="container mt-5">
    <div class="card rounded-lg shadow-lg">
        <div class="card-header bg-primary text-white text-center py-4">
            <h3 class="mb-0">Doctor Profile</h3>
        </div>
        <div class="card-body px-5 py-4">
            <form id="form1" name="form1" method="post" action="">
                <div class="row mb-4 justify-content-center">
                    <div class="col-md-4 text-center">
                        <img src="../Assets/files/Photo/<?php echo $data['doctor_photo']; ?>" class="rounded-circle img-fluid shadow" width="120" height="120" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-end"><strong>Name:</strong></label>
                    <div class="col-md-8">
                        <p class="form-control-plaintext"><?php echo $data['doctor_name']; ?></p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-end"><strong>Contact:</strong></label>
                    <div class="col-md-8">
                        <p class="form-control-plaintext"><?php echo $data['doctor_contact']; ?></p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-end"><strong>Email:</strong></label>
                    <div class="col-md-8">
                        <p class="form-control-plaintext"><?php echo $data['doctor_email']; ?></p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-end"><strong>Address:</strong></label>
                    <div class="col-md-8">
                        <p class="form-control-plaintext"><?php echo $data['doctor_address']; ?></p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-end"><strong>Department:</strong></label>
                    <div class="col-md-8">
                        <p class="form-control-plaintext"><?php echo $data['department_name']; ?></p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col text-center">
                        <a href="Editprofile.php" class="btn btn-info px-4 rounded-pill">Edit Profile</a>
                        <a href="Changepassword.php" class="btn btn-danger px-4 rounded-pill">Change Password</a>
                    </div>
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