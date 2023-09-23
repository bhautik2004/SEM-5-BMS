<?php
include 'db_connect.php';
if (isset($_POST["add"])) {
    @$uname = $_POST['username'];
    @$uemail = $_POST['email'];
    @$password = $_POST['password'];
    $con = mysqli_connect("localhost", "root", "", "bank_project");
    $res = mysqli_query($con, "SELECT * FROM user_login WHERE username = '$uname'");
    $ress = mysqli_query($con, "SELECT * FROM user_login WHERE email = '$uemail'");
    $sql2 = "INSERT INTO user_login (username ,email , password ,cpassword ) VALUES('$uname' , '$uemail' , '$password' ,'$password')";
    if (!mysqli_num_rows($res) > 0) {
        if (!mysqli_num_rows($ress) > 0) {
            if (mysqli_query($con, $sql2)) {
                echo '<script>
                alert("New user Member Add Successfully")
                </script>';
            }
        } else {
            echo '<script>
            alert("This user Is Already Taken")
            </script>';
        }
    } else {
        echo '<script>
            alert("This Username Alredy Taken.")
            </script>';
    }
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User </title>
    <link rel="stylesheet" href="../css/info.css">
</head>
<body>
    <div class="dashboardlink">
        <a href="staffaction.php">Go To Dashboard</a>
    </div>
    <div class="header">
        <h1 align="center"> Add New User </h1>
    </div>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="input">
            <label>Enter Username </label>
            <input type="text" name="username" required>
        </div>
        <div class="input">
            <label>Enter Email </label>
            <input type="email" name="email" required>
        </div>
        <div class="input">
            <label>Enter Password </label>
            <input type="text" name="password" required>
        </div>
        <div class="input">
            <button type="submit" name="add" class="btn">Add</button>
        </div>
    </form>
</body>
</html>
