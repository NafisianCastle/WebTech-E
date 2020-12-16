<?php
session_start();
if ($_SESSION['username'] == "" || $_SESSION["usertype"] != "admin") {
    header("location:adminLogin.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/adminDashboard.css">
    <link rel="stylesheet" type="text/css" href="css/header_admin.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_admin.css">
    <link rel="stylesheet" type="text/css" href="../HnF/Footer.css">
</head>

<body>
    <?php
    include 'header_admin.html';
    include 'sidebar_admin.html';
    ?>

    <div class="main">
        <form style="padding: 15px;" action="Registration.php">
            <div style="background-color:  #e6f0ff; text-align: left; border-radius: 2px; width: 500px; padding: 6px; left: 30%; position: relative;">
                <label style="font-size: 25px;"><span style="font-weight: bold;">Mr. Cat</span></label><br>
                <label style="font-size: 10px;">Date: 19.11.2020</label>
                <label style="font-size: 10px;">Time: 11:34pm</label>
                <div style="background-color: white; border-radius: 2px;">
                    <p>All the top border properties in one declaration
                        This example demonstrates a shorthand property for setting all of the properties for the top border in one declaration.

                        Set the style of the bottom border
                        This example demonstrates how to set the style of the bottom border.

                        Set the width of the left border
                        This example demonstrates how to set the width of the left border.

                        Set the color of the four borders
                        This example demonstrates how to set the color of the four borders. It can have from one to four colors.

                        Set the color of the right border
                        This example demonstrates how to set the color of the right border.</p><br>
                </div><br>
                <label style="font-size: 18px;"><span style="font-weight: bold;">Scooby:</span> </label>
                <label> Its a dummy comment.</label>
                <input type="submit" name="submit" value="Hide this comment">
                <br><br>
                <input type="submit" name="submit" value="Hide this post">
            </div>
        </form>

        <form style="padding: 15px;" action="Registration.php">
            <div style="background-color:  #e6f0ff; text-align: left; border-radius: 2px; width: 500px; padding: 6px; left: 30%; position: relative;">
                <label style="font-size: 25px;"><span style="font-weight: bold;">Mr. Scooby</span></label><br>
                <label style="font-size: 10px;">Date: 19.11.2020</label>
                <label style="font-size: 10px;">Time: 11:34pm</label>
                <div style="background-color: white; border-radius: 2px;">
                    <p>All modern browsers support the following 140 color names (click on a color name, or a hex value, to view the color as the background-color along with different text colors)</p><br>
                </div><br>
                <label style="font-size: 18px;"><span style="font-weight: bold;">Scooby:</span> </label>
                <label> Its a dummy comment.</label>
                <input type="submit" name="submit" value="Hide this comment">
                <br><br>
                <input type="submit" name="submit" value="Hide this post">
            </div>
        </form>

        <form style="padding: 15px;" action="Registration.php">
            <div style="background-color:  #e6f0ff; text-align: left; border-radius: 2px; width: 500px; padding: 6px; left: 30%; position: relative;">
                <label style="font-size: 25px;"><span style="font-weight: bold;">Mr. Brad</span></label><br>
                <label style="font-size: 10px;">Date: 19.11.2020</label>
                <label style="font-size: 10px;">Time: 11:34pm</label>
                <div style="background-color: white; border-radius: 2px;">
                    <p>Web pages can be created and modified by using professional HTML editors.

                        However, for learning HTML we recommend a simple text editor like Notepad (PC) or TextEdit (Mac).

                        We believe in that using a simple text editor is a good way to learn HTML.

                        Follow the steps below to create your first web page with Notepad or TextEdit.</p><br>
                </div><br>
                <label style="font-size: 18px;"><span style="font-weight: bold;">Scooby:</span> </label>
                <label> Its a dummy comment.</label>
                <input type="submit" name="submit" value="Hide this comment">
                <br><br>
                <input type="submit" name="submit" value="Hide this post">
            </div>
        </form>
    </div>

    <?php
    include '../HnF/Footer.php';
    ?>

</body>


</html>