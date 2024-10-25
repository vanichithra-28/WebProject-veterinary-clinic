<?php
include("Head.php");

include('../Assets/Connection/connection.php');
session_start();
    
$select="select * from tbl_user s inner join tbl_district c on s.district_id=c.district_id 
         inner join tbl_place b on s.place_id = b.place_id where user_id=".$_SESSION['uid'];
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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card rounded shadow-sm">
                <div class="card-header bg-primary text-white rounded-top">
                    <h4 class="text-center">User Profile</h4>
                </div>
                <div class="card-body rounded-bottom">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><strong>Name:</strong></td>
                                <td><?php echo $data['user_name']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Contact:</strong></td>
                                <td><?php echo $data['user_contact']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Email:</strong></td>
                                <td><?php echo $data['user_email']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Address:</strong></td>
                                <td><?php echo $data['user_address']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>District:</strong></td>
                                <td><?php echo $data['district_name']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Place:</strong></td>
                                <td><?php echo $data['place_name']; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <a href="Editprofile.php" class="btn btn-primary rounded-pill">Edit Profile</a>
                                    <a href="Changepassword.php" class="btn btn-secondary rounded-pill">Change Password</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (Optional, if you need JS components like modals) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
include("Foot.php");
?>