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
        <h2>X Company</h2>
        <a href="home.php">Home</a>
        <a href="login.php">Login</a>
        <a href="registration.php">Registration</a>
    </header>
    <section>

        <article>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <fieldset>
                    <legend>Forgot password</legend>
                    <label for="email">Enter email</label>
                    <input type="email" id="email" name="email" value="" required autofocus><br>
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