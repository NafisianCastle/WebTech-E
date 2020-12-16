<?php
session_start();
include("../dbConnect.php");
$err = "";
try {
    $connect = db_conn();
    if (isset($_POST["submit"])) {
        $query = "SELECT * FROM admin WHERE username = :username AND pass = :password";
        $statement = $connect->prepare($query);
        $statement->execute(
            array(
                'username'     =>     $_POST["username"],
                'password'     =>     $_POST["password"]
            )
        );
        $count = $statement->rowCount();
        if ($count > 0) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["usertype"] = "admin";
            header("location:adminDashboard.php");
        } else {
            $_SESSION["usertype"] = "";
            $_SESSION["username"] = "";
            $err = "Wrong username or password";
        }
    }
} catch (PDOException $error) {
    echo $error->getMessage();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/adminLogin.css">
    <link rel="stylesheet" type="text/css" href="css/basicStyling.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/adminLogin.js"></script>
</head>

<body>

    <div class="container form-input" id="login_form_admin">
        <form method="post" action="adminLogin.php">
            <h2 class="center_align upper_txt">Administrator Login</h2>
            <div class="credential_input">
                <br>
                <label class="med_font">Username</label><br>
                <input class="form-control pwd" type="text" name="username" id="username" placeholder="Enter Admin Username"><br>
                <label class="med_font">Password</label><br>
                <input class="form-control pwd" type="password" id="password" name="password" placeholder="Enter Admin Password">
                <button type="button" id="show_password" name="show_password" class="btn btn-primary">Show</button>
                <br>
                <label class="sml_font text_error"> <?php echo $err; ?></label>
                <div class="login_btn">
                    <input type="submit" name="submit" value="Login" onclick="validate()">
                </div>
            </div>
        </form>
    </div>
</body>

</html>