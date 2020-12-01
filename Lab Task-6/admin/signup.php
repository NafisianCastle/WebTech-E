<?php
session_start();
$username = "";
$firstName = "";
$lastName = "";
$password = "";
$dateOfBirth = "";
$securityQuestion = "";
$gender = "";
$validateInfo = true;
$usernameErr = "";
$firstNameErr = "";
$lastNameErr = "";
$passwordErr = "";
$dateOfBirthErr = "";
$genderErr = "";

if (isset(($_POST['submit']))) {
    if (!empty($_POST["username"])) {

        $username = htmlspecialchars($_POST["username"]);
    } else {
        $usernameErr = "username required!";
        $validateInfo = false;
    }

    if (!empty($_POST["firstName"])) {
        $pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
        if (!preg_match('#[0-9]#', $_POST['firstName'])   && !preg_match($pattern, $_POST['firstName'])) {
            $firstName = htmlspecialchars($_POST['firstName']);
        } else {
            $firstNameErr = "numbers and special chars not allowed";
            $validateInfo = false;
        }
    } else {
        $firstNameErr = "Firstname required!";
        $validateInfo = false;
    }

    if (!empty($_POST["lastName"])) {
        $pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
        if (!preg_match('#[0-9]#', $_POST['lastName'])   && !preg_match($pattern, $_POST['lastName'])) {
            $lastName = htmlspecialchars($_POST['lastName']);
        } else {
            $lastNameErr = "numbers and special chars not allowed";
            $validateInfo = false;
        }
    } else {
        $lastNameErr = "Lastname required!";
        $validateInfo = false;
    }

    if (!empty($_POST["password"])) {
        if ($_POST['password'] == $_POST['retypePassword']) {
            $password = htmlspecialchars($_POST["password"]);
        } else {
            $passwordErr = "password Mismatch!";
            $validateInfo = false;
        }
    } else {
        $passwordErr = "password required!";
        $validateInfo = false;
    }



    if (!empty($_POST['dateOfBirth'])) {
        $dateOfBirth = htmlspecialchars($_POST['dateOfBirth']);
    } else {
        $dateOfBirthErr = "Enter Valid date!";
    }

    if (!empty($_POST['gender'])) {
        $gender = htmlspecialchars($_POST["gender"]);
    } else {
        $genderErr = "Gender not set!";
        $validateInfo = false;
    }
    if ($validateInfo) {
        $conn = new mysqli("localhost", "root", "", "socialsite");

        if ($conn->connect_error) {
            die("Connection failed: Server Down!!!" . $conn->connect_error);
        }

        $sql = "select username from userinfo where username = '" . $username . "';";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $usernameErr = "name exists try another name !";
            $validateInfo = false;
        } else {
            $sql = "insert into userinfo (username,firstname, lastname, password ,dateOfBirth,securityQuestion,gender) values ( '" . $username . "' , '" . $firstName . "', '" . $lastName . "' , '" . $password . "' , '" . $dateOfBirth . "' ,'" . $securityQuestion . "','" . $gender . "' )";
            $sql2 = "insert into about (username,education,subject,phonenumber,propic,coverpic) values ('" . $username . "', 'N/A','N/A','N/A','blankImage/propic.jpg','blankImage/coverpic.jpg')";
            if ($conn->query($sql) === TRUE) {
                echo "<script> alert('account created');  </script>";
            } else {
                die("Something is wrong!");
            }
            if ($conn->query($sql2) === TRUE) {
                echo "<script> alert('extra details created');  </script>";
            } else {
                echo $sql2;
                echo "Error: " . $sql . "<br>" . $conn->error;
                die("Something is wrong!");
            }
            $conn->close();
            header("location:signup.php");
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/basicStyling.css">

    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>

<body>
    <div class="row">
        <div class="column" id="col-1">
            <div class="container" id="createaccountText">
                <h1 class="big_font" id="signuptxt">Sign up</h1>
                <p class="med_font" id="aboutustxt">
                    This site is much more fun to use when
                    you have an account.
                    Sign up to explore the Tech Media now !
                </p>
            </div>
        </div>
        <div class="column" id="col-2">
            <div class="sign_up_form">
                <form method="post" action="#">
                    <div class="form-input">
                        <h1 class="font_bold">Create an account</h2>
                            <h5 style="padding-left: 80px;">It's Quick and easy.</h5>
                    </div>
                    <div class="form-input">
                        <label>Enter Username</label>
                        <br>
                        <input type="text" name="username" placeholder="Username">
                        <label class="text_error"> <?php echo $usernameErr; ?> </label>
                    </div>
                    <div class="form-input">
                        <label>Name</label>
                        <br>
                        <input type="text" name="firstName" placeholder="Your Name">
                        <label class="text_error"><?php echo $firstNameErr; ?></label>
                    </div>
                    <div class="form-input">
                        <label>Enter Password</label>
                        <br>
                        <input type="password" name="password" placeholder="Password">
                        <label class="text_error"><?php echo $passwordErr; ?></label>
                    </div>
                    <div class="form-input">
                        <label>Re-type Password</label>
                        <br>
                        <input type="password" name="retypePassword" placeholder="Password">
                        <label class="text_error"><?php echo $passwordErr; ?></label>
                    </div>
                    <div class="form-input">
                        <label>Select Date Of Birth</label>
                        <br>
                        <input type="date" name="dateOfBirth" value="YYYY-MM-DD">
                        <label class="text_error"><?php echo $dateOfBirthErr; ?></label>
                    </div>
                    <div class="form-input">
                        <label>Select Gender</label>
                        <br>
                        <input type="radio" name="gender" value="male">
                        <label>Male</label>
                        <input type="radio" name="gender" value="female">
                        <label>Female</label>
                        <label class="text_error">
                            <?php echo $genderErr; ?>
                        </label>
                    </div>
                    <div class="btn btn_success" id="signUpBtn">
                        <input type="submit" value="Sign Up" name="submit">
                        <span>or</span>
                        <a href="login.php" class="text_error">Log In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>