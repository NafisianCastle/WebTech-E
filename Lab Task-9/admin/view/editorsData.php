<?php
session_start();
if ($_SESSION['username'] == "" || $_SESSION["usertype"] != "admin") {
    header("location:adminLogin.php");
}
require_once '../controllers/showUserInfo.php';
//require_once '../model.php';
$editors = fetchAllUsers();
//$editors = showAllEditors();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/adminDashboard.css">
    <link rel="stylesheet" type="text/css" href="css/header_admin.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_admin.css">
    <link rel="stylesheet" type="text/css" href="../HnF/Footer.css">
    <style>
        #list {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #list td,
        #list th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #list tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #list tr:hover {
            background-color: #ddd;
        }

        #list th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: dodgerblue;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    include 'header_admin.php';
    include 'sidebar_admin.html';
    ?>

    <form>
        <div class="main">
            <table id="list">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($editors as $i => $editor) : ?>
                        <tr>
                            <td><?php echo $editor["id"] ?></td>
                            <td><?php echo $editor["name"] ?></td>
                            <td><?php echo $editor["username"] ?></td>
                            <td><?php echo $editor["pass"] ?></td>
                            <td><?php echo $editor["phone"] ?></td>
                            <td><?php echo $editor["email"] ?></td>
                            <td><?php echo $editor["address"] ?></td>
                            <td><?php echo $editor["city"] ?></td>
                            <td><?php echo $editor["country"] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>


            </table>
        </div>
    </form>

    <?php
    include '../HnF/Footer.php';
    ?>
</body>

</html>