<?php
session_start();
if(!isset($_SESSION['suser'])){
  header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>
    <link rel="stylesheet" href="../css/useraction.css">
</head>
<body>
    <a href="stafflogout.php" class="logout">logout</a>
    <div class="header">
        <h1> Welcome Dear <?php echo $_SESSION['suser']; ?> </h1>
    </div>
    <div class="container">
        <h3><a href="account_list.php"> All Account Holder's List </a></h3>
        <h3><a href="deposit.php"> Deposit Money Into Customer Account</a></h3>
        <h3><a href="withdraw.php"> Withdraw Money From Customer Account</a></h3>
        <h3><a href="updateinfo.php">Update an Account Information</a></h3>
        <h3><a href="account_close.php"> Close an Account</a></h3>
        <h3><a href="account_approve.php">Approve Pending Account</a></h3>
        <h3><a href="staff_add.php"> Add New Staff Member</a></h3>
        <h3><a href="useradd.php"> Add New User</a></h3>
        <h3><a href="staffpassword_change.php">Change Password</a></h3>
        <h3><a href="userrequests.php"> User Requests </a></h3>
    </div>
</body>
</html>