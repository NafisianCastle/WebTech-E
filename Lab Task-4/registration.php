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
      background-color: #666;
      padding: 30px;
      text-align: center;
      font-size: 35px;
      color: white;
    }


    nav {
      float: left;
      width: 20%;
      height: 690px;
      background: darkgrey;
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
      background-color: #777;
      padding: 10px;
      text-align: center;
      color: white;
    }
  </style>
</head>

<body>
  <?php
  // define variables and set to empty values
  $nameErr = $emailErr = $genderErr = $websiteErr = "";
  $name = $email = $gender = $comment = $website = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }

    if (empty($_POST["website"])) {
      $website = "";
    } else {
      $website = test_input($_POST["website"]);
      // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
        $websiteErr = "Invalid URL";
      }
    }

    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }

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


  <header>
    <h2>X Company</h2>
    <a href="home.php">Home</a>
    <a href="login.php">Login</a>
    <a href="registration.php">Registration</a>
  </header>
  <section>
    <nav>
      <h2>Account</h2>
      <hr>
      <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="#">View Profile</a></li>
        <li><a href="#">Edit Profile</a></li>
        <li><a href="#">Change Profile Picture</a></li>
        <li><a href="#">Change Password</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </nav>

    <article>

      <h2>PHP Form Validation Example</h2>
      <p><span class="error">* required field</span></p>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website; ?>">
        <span class="error"><?php echo $websiteErr; ?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
      </form>
    </article>
  </section>

  <footer>
    <p>Copyright &#169; 2017 </p>
  </footer>

</body>

</html>