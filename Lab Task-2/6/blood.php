<?php
$bloodErr = "";
$count = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["gender"] == null) {
        $bloodErr = "Must be selected";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="Viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood Group</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="width: 30%;">
        <fieldset>
            <legend>Blood Group</legend>
            <select name="bg" id="bg">
                <option value="null"></option>
                <option value="a+">A+</option>
                <option value="b+">B+</option>
                <option value="a-">A-</option>
                <option value="b-">B-</option>
            </select>
            <span class="error"><?php echo $bloodErr; ?></span><br>
            <hr>
            <input type="submit" value="Submit">

        </fieldset>
    </form>
</body>
<footer>
</footer>

</html>