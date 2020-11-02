<?php
$degreeErr = "";
$count = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    foreach ($_POST['check_list'] as $selected) {
        $count = $count + 1;
    }
    if ($count < 2) {
        $degreeErr = "At least two of them must be selected";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="Viewport" content="width=device-width, initial-scale=1.0" />
    <title>Degree</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="width: 30%;">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" id="ssc" name="check_list[]" value="ssc">
            <label for="ssc"> SSC</label>
            <input type="checkbox" id="hsc" name="check_list[]" value="hsc">
            <label for="hsc"> HSC</label>
            <input type="checkbox" id="bsc" name="check_list[]" value="bsc">
            <label for="bsc"> BSc</label>
            <input type="checkbox" id="msc" name="check_list[]" value="msc">
            <label for="msc"> MSc</label><br>
            <span class="error"><?php echo $degreeErr; ?></span><br>
            <hr>
            <input type="submit" value="Submit">

        </fieldset>
    </form>
</body>
<footer>
</footer>

</html>