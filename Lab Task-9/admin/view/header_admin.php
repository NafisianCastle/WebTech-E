<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/header_admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.css">
</head>

<body>
    <script type="text/javascript" src="js/search.js"></script>
    <div class="header">
        <!--
        <div class="logo">
        <label>Tech Media</label>
        </div>
        !-->
        <label style="font-family: cursive;text-align: left; color: darkblue;  font-weight: bold; font-size: xx-large;">Tech
            Media</label>
        <a href="adminDashboard.php" class="logo"><img src=""></a>
        <div class="header-right">
            <input type="text" name="search" placeholder="Search.." onkeyup="search(this.value)">
            <a class="active" href="adminDashboard.php">Admin Dashboard</a>
            <a href="#">Notification</a>
            <a href="adminLogout.php">Logout</a>

        </div>
    </div>
</body>

</html>