<?php
require_once '../model.php';


if (isset($_POST['createUser'])) {
    $data['name'] = $_POST['name'];
    $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);


    if (addUser($data)) {
        echo 'Successfully added!!';
    }
} else {
    echo 'You are not allowed to access this page.';
}
