<?php
$dateErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["dd"]) || empty($_POST["mm"]) || empty($_POST["yyyy"])) {
        $dateErr = "date is required";
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
            <legend>Date of Birth</legend>
            <table>
                <tr>
                    <td>
                        <label for="dd">dd</label><br>
                        <input type="number" id="dd" name="dd" min="1" max="31">/
                    </td>
                    <td>
                        <label for="mm">mm</label><br>
                        <input type="number" id="mm" name="mm" min="1" max="12">/
                    </td>
                    <td>
                        <label for="yyyy">yyyy</label><br>
                        <input type="number" id="yyyy" name="yyyy" min="1953" max="1998">
                    </td>
                </tr>
            </table>

            <span class="error"><?php echo $dateErr; ?></span><br>
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>