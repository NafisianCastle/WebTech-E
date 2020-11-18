<?php

require_once 'controller/userInfo.php';
$user = fetchUser($_GET['id']);

?>
<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>

  <form action="controller/updateUser.php" method="POST" enctype="multipart/form-data" style="width:30%;">
    <fieldset>
      <legend>Add User</legend>
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name"><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email"><br>
      <label for="phone">Phone:</label><br>
      <input type="text" id="phone" name="phone"><br>
      <label for="address">Address:</label><br>
      <input type="text" id="address" name="address"><br>
      <label for="city">City:</label><br>
      <select name="city" id="city">
        <option value="empty">Select your city:</option>
        <option value="dhaka">Dhaka</option>
      </select><br>
      <label for="country">Select your country:</label><br>
      <select name="country" id="country">
        <option value="empty">Select your country:</option>
        <option value="bd">Bangladesh</option>
      </select><br>
      <label for="birthday">Birthday:</label><br>
      <input type="date" id="birthday" name="birthday"><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" name="createUser" value="Create">
      <input type="reset">
    </fieldset>
  </form>

</body>

</html>