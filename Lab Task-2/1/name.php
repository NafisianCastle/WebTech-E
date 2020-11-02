<?php
$nameErr = "NO ERROR";
$name = "INVALID";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else if (!preg_match("/^[a-z ,.'-]+$/i", $_POST["name"])) {
        $nameErr = "Must start with a letter and can contain a-z, A-Z, period, dash only.";
    } else if (str_word_count($_POST["name"]) < 2) {
        $nameErr = "Name should be of at least two words.";
    } else {
        $name = test_input($_POST["name"]);
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
    <meta name="Viewport" content="width=device-width, initial-scale=1.0" />
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
            <input type="text" id="name" name="name" value="" autofocus><br>
            <span class="error"><?php echo $nameErr; ?></span><br>
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>