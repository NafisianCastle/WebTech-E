<?php
$emailErr = "";
$email = "INVALID";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<html>

<head>
    <meta charset="UTF-8" />
    <meta email="Viewport" content="width=device-width, initial-scale=1.0" />
    <title>Email</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="width: 30%;">
        <fieldset>
            <legend>Email</legend>
            <input type="email" id="email" name="email" value="" autofocus><br>
            <span class="error"><?php echo $emailErr; ?></span><br>
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>