<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Style the header */
        header {
            background-color: lightseagreen;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: white;
        }


        nav {
            float: left;
            width: 20%;
            height: 690px;
            background: lightskyblue;
            padding: 20px;
            shape-outside: -moz-radial-gradient();
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            font-size: large;
            font-weight: bold;
        }

        article {
            float: left;
            padding: 20px;
            width: 80%;
            background-color: #f1f1f1;
            height: 690px;
            background-image: url('profile_background-1.jpg');
            background-clip: padding-box;
            opacity: 70%;
            font-family: cursive;
            font-size: x-large;
            font-stretch: expanded;
            font-weight: 800;
        }

        section:after {
            content: "";
            display: table;
            clear: both;
        }

        footer {
            background-color: lightseagreen;
            padding: 10px;
            text-align: center;
            color: white;
        }
    </style>
</head>

<body>



    <header>
        <h2>Profile</h2>
    </header>
    <section>
        <nav>
            <h2>Account</h2>
            <hr>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="#">View Profile</a></li>
                <li><a href="#">Edit Profile</a></li>
                <li><a href="#">Change Profile Picture</a></li>
                <li><a href="#">Change Password</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>

        <article>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <fieldset>
                    <legend>Forgot password</legend>
                    <label for="currPass">Current Password</label>
                    <input type="password" id="currPass" name="currPass" value="" required autofocus><br>
                    <hr>
                    <label for="newPass">New Password</label>
                    <input type="password" id="rePass" name="rePass" value="" required><br>
                    <hr>
                    <label for="email">Retype New Password</label>
                    <input type="password" id="rePass" name="rePass" value="" required><br>
                    <hr>
                    <input type="submit" value="Submit">
                </fieldset>
            </form>
        </article>
    </section>

    <footer>
        <p>Copyright &#169; 2017 </p>
    </footer>

</body>

</html>