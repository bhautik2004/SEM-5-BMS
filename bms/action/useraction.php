<?php
session_start();
if(!isset($_SESSION['user'])){
  header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="../css/useraction.css">
</head>
<body>
    <a href="userlogout.php" class="logout">LogOut</a>
    <div class="header">
        <h1> Welcome Dear <?php echo $_SESSION['user']; ?> </h1>
    </div>
    <div class="container">
        <h3><a href="accountopen.php"> Open an Acccount</a></h3>
        <h3><a href="transfer.php"> Transfer Money</a></h3>
        <h3><a href="check_balance.php"> Ckeck Balance</a></h3>
        <h3><a href="transaction.php"> Check Transaction Detail</a></h3>
        <h3><a href="debit_request.php"> Request For Debit Card</a></h3>
        <h3><a href="chequebook_request.php"> Request For Cheque Book</a></h3>
        <h3><a href="info.php"> Show Account's Information</a></h3>
        <h3><a href="aadhar_link_status.php">Check Aadhar Card Is Linked or Not</a></h3>
        <h3><a href="aadhar_link.php">Link "AADHAR CARD"</a></h3>
        <h3><a href="password_change.php">Change Password</a></h3>
    </div>
</body>
</html>