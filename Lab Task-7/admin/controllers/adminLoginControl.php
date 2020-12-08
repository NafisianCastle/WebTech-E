<?php
session_start();
include("../../dbConnect.php");

try {
    $connect = db_conn();
    if (isset($_POST["submit"])) {
        if (empty($_POST["username"]) || empty($_POST["password"])) {
            echo '<label>All fields are required</label>';
        } else {
            $query = "SELECT * FROM admin WHERE username = :username AND pass = :password";
            $statement = $connect->prepare($query);
            $statement->execute(
                array(
                    'username'     =>     $_POST["username"],
                    'password'     =>     $_POST["password"]
                )
            );
            $count = $statement->rowCount();
            if ($count > 0) {
                $_SESSION["username"] = $_POST["username"];
                header("location:../adminDashboard.php");
            } else {
                echo '<label>Wrong Data</label>';
            }
        }
    }
} catch (PDOException $error) {
    echo $error->getMessage();
}
