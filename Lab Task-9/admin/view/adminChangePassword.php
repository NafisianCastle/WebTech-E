<?php
session_start();
if ($_SESSION['username'] == "" || $_SESSION["usertype"] != "admin") {
    header("location:adminLogin.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/adminDashboard.css">
    <link rel="stylesheet" type="text/css" href="css/header_admin.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_admin.css">
    <link rel="stylesheet" type="text/css" href="../HnF/Footer.css">
</head>

<body>
    <?php
    include 'header_admin.php';
    include 'sidebar_admin.html';
    ?>
    <div class="main">
        <form method="post" action="#">
            <div class="form-input">
                <label>Old Password</label>
                <br>
                <input type="text" name="password" value="2524" disabled>
                <label class="text_error"><?php echo $passwordErr; ?></label>
            </div>
            <div class="form-input">
                <label>Enter Password</label>
                <br>
                <input type="password" name="password" placeholder="Password">
                <label class="text_error"><?php echo $passwordErr; ?></label>
            </div>
            <div class="form-input">
                <label>Re-type Password</label>
                <br>
                <input type="password" name="retypePassword" placeholder="Password">
                <label class="text_error"><?php echo $passwordErr; ?></label>
            </div>

            <div>
                <input type="submit" value="Save Change" name="submit">

            </div>
        </form>
    </div>


    <?php
    include '../HnF/Footer.php';
    ?>

</body>


</html>