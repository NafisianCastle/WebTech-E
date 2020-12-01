<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="adminLogin.css">
</head>

<body>

    <div class="container form-input" id="login_form_admin">
        <form method="post" action="controllers/adminLoginControl.php">
            <h2 class="center_align upper_txt">Adminstrator Login</h2>
            <div class="credential_input">
                <br><br>
                <label class="med_font">Username</label>
                <br>
                <input type="text" name="username" placeholder="Enter Admin Username">
                <br>
                <label class="sml_font text_error"> <?php echo $usernameErr; ?></label>
                <br>
                <label class="med_font">Password</label>
                <br>
                <input type="text" name="password" placeholder="Enter Admin Password">
                <br>
                <label class="sml_font text_error"> <?php echo $passwordErr; ?></label>
                <div class="login_btn">
                    <input type="submit" name="submit" value="Login">
                </div>
            </div>

        </form>
    </div>
</body>

</html>