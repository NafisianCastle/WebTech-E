<?php
$emailErr = "NO ERROR";
$email = "INVALID";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        $emailErr = "Name is required";
    } else if (!preg_match("/^[a-z ,.'-]+$/i", $_POST["email"])) {
        $emailErr = "Must start with a letter and can contain a-z, A-Z, period, dash only.";
    } else if (str_word_count($_POST["email"]) < 2) {
        $emailErr = "Name should be of at least two words.";
    } else {
        $email = test_input($_POST["email"]);
    }
    echo "Name: " . $email . "<br>";
    echo "Error Message: " . $emailErr;
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
    <title>Name</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="width: 30%;">
        <fieldset>
            <legend>Name</legend>
            <input type="email" id="email" email="email" value="" autofocus required><br>
            <span class="error"><?php echo $emailError; ?></span><br>
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>