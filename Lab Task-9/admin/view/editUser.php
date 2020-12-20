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
                <legend>Add User </legend>
                <table>
                    <tr>
                        <td>
                            <label for=" name">Username:</label><br>
                            <input type="text" id="uname" name="uname"><br>
                            <label for="name">Name:</label><br>
                            <input type="text" id="name" name="name"><br>
                            <label for="email">Email:</label><br>
                            <input type="email" id="email" name="email"><br>
                            <label for="phone">Phone:</label><br>
                            <input type="text" id="phone" name="phone"><br>
                            <label for="address">Address:</label><br>
                            <input type="text" id="address" name="address"><br>
                            <label for="city">City:</label><br>
                            <select name="city" id="city">
                                <option value="empty">Select your city:</option>
                                <option value="dhaka">Dhaka</option>
                            </select><br>
                            <label for="country">Select your country:</label><br>
                            <select name="country" id="country">
                                <option value="empty">Select your country:</option>
                                <option value="bd">Bangladesh</option>
                            </select><br>
                            <label for="birthday">Birthday:</label><br>
                            <input type="date" id="birthday" name="birthday"><br>
                            <label for="password">Password:</label><br>
                            <input type="password" id="password" name="password"><br><br>
                            <input type="submit" name="createUser" value="Create">
                            <input type="reset">
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
    include '../H&F/Footer.php';
    ?>
</body>

</html>