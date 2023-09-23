<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts Transaction Detail</title>
    <link rel="stylesheet" href="../css/info.css">
</head>
<body>
    <div class="dashboardlink">
        <a href="useraction.php">Go To Dashboard</a>
    </div>
    <div class="header">
        <h1> Account's Transaction Detail </h1>
    </div>
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <div class="input">
            <label>Enter Account Number </label>
            <input type="text" name="account_no" required>
        </div>
        <div class="input">
            <button type="submit" name="info" class="btn">Show</button>
        </div>
    </form>
<?php
include 'db_connect.php';
@$account_no = $_POST['account_no'];
if (isset($_POST['info'])) {
    $res = mysqli_query($con, "SELECT * FROM transaction WHERE account_no = '$account_no' ");
    if (mysqli_num_rows($res) > 0) {
        ?>
    <table align="center">
        <tr>
            <th>Date And Time</th>
            <th>Transaction Type</th>
            <th>Amount</th>
            <th>Total Amount After Transaction </th>
        </tr>
        <?php
while ($arr = mysqli_fetch_row($res)) {
            echo "<tr><td>";
            echo $arr[5];
            echo "</td><td>";
            echo $arr[2];
            echo "</td><td>";
            echo $arr[3];
            echo "</td><td>";
            echo $arr[4];
            echo "</td>";
        }
        echo "</table>";
    } else {
        echo '<script>
                alert(" Please Enter Valid Account Number ")
                location = "transaction.php";
              </script>';
    }
}
mysqli_close($con);
?>
</body>
</html>