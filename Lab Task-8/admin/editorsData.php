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
    include 'header_admin.html';
    include 'sidebar_admin.html';
    ?>

    <div class="main">
        <br>
        <form>
            <table id="list">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Counry</th>
                    <th>DOB</th>
                    <th>Image</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>nafis</td>
                    <td>nafisur Rahman</td>
                    <td>1234</td>
                    <td>nfa@gmail.com</td>
                    <td>012345678902</td>
                    <td>khilgaon</td>
                    <td>Dhaka</td>
                    <td>Bangladesh</td>
                    <td>12-03-99</td>
                    <td>null</td>
                    <td><a href="editEditor.php">Edit</a></td>
                    <td><a href="deleteEditor.php">Delete</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>nafis</td>
                    <td>nafisur Rahman</td>
                    <td>1234</td>
                    <td>nfa@gmail.com</td>
                    <td>012345678902</td>
                    <td>khilgaon</td>
                    <td>Dhaka</td>
                    <td>Bangladesh</td>
                    <td>12-03-99</td>
                    <td>null</td>
                    <td><a href="editEditor.php?name=<?php echo $Editor['Name'] ?>">Edit</a></td>
                    <td><a href="deleteEditor.php?name=<?php echo $Editor['Name'] ?>">Delete</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>nafis</td>
                    <td>nafisur Rahman</td>
                    <td>1234</td>
                    <td>nfa@gmail.com</td>
                    <td>012345678902</td>
                    <td>khilgaon</td>
                    <td>Dhaka</td>
                    <td>Bangladesh</td>
                    <td>12-03-99</td>
                    <td>null</td>
                    <td><a href="editEditor.php?name=<?php echo $Editor['Name'] ?>">Edit</a></td>
                    <td><a href="deleteEditor.php?name=<?php echo $Editor['Name'] ?>">Delete</a></td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    include '../HnF/Footer.php';
    ?>
</body>

</html>