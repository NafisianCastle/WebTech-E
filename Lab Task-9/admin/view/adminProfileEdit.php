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
        <form action="controller/createUser.php" method="POST" enctype="multipart/form-data">
            <fieldset style="border-color: dodgerblue; border-radius: 8px;border-style: inset;">
                <legend>Add Editor </legend>
                <table>
                    <tr>
                        <td>
                            <label for=" name">Username:</label><br>
                            <input type="text" id="uname" name="uname" value="nafis"><br>
                            <label for="name">Name:</label><br>
                            <input type="text" id="name" name="name" value="nafisur rahman"><br>
                            <label for="email">Email:</label><br>
                            <input type="email" id="email" name="email" value="nafis@gmail.com"><br>
                            <label for="phone">Phone:</label><br>
                            <input type="text" id="phone" name="phone" value="0145789246"><br><br>
                            <input type="submit" name="editProfile" value="Save Changes">
                        </td>
                        <td>
                            <label for="fileToUpload">Upload Image:</label>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </td>
                    </tr>
                </table>

            </fieldset>
            <br>
        </form>
    </div>
    <?php
    include '../HnF/Footer.php';
    ?>
</body>

</html>