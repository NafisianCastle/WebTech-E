<?php
$genderErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
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
    <title>Gender</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="width: 30%;">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other<br>
            <span class="error"><?php echo $genderErr; ?></span><br>
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>