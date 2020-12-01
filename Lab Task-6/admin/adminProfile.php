<?php
session_start();
//require_once 'controllers/adminProfileInfo.php';

//$profile = fetchProfile($_SESSION['username']);
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/adminDashboard.css">
</head>

<body>
    <?php
    include 'header_admin.html';
    include 'sidebar_admin.html';
    ?>
    <div class="main">
        <h1>Profile Details</h1>
        <table>
            <tr>
                <td>
                    <p>Name</p>
                </td>
                <td>
                    <p>:</p>
                </td>
                <td>
                    <p>nafisur rahman</p>
                    <?php echo $profile['name'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Username</p>
                </td>
                <td>
                    <p>:</p>
                </td>
                <td>
                    <p>nafis</p>
                    <?php echo $profile['name'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Password</p>
                </td>
                <td>
                    <p>:</p>
                </td>
                <td>
                    <p>2524</p>
                    <?php echo $profile['name'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Phone</p>
                </td>
                <td>
                    <p>:</p>
                </td>
                <td>
                    <p>0124567788</p>
                    <?php echo $profile['name'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Email</p>
                </td>
                <td>
                    <p>:</p>
                </td>
                <td>
                    <p>nafis@gmail.com</p>
                    <?php echo $profile['name'] ?>
                </td>
            </tr>
        </table>
    </div>



    <?php
    include '../footer.php';
    ?>

</body>


</html>