<?php
session_start();
include("../../dbConnect.php");

function search($input)
{
    $str = $input;
    $conn = db_conn();
    $selectQuery = "SELECT * FROM editor WHERE name LIKE '%{$str}%' ";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showProfile($username)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `admin` where username = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function showAllEditors()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM editor ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showEditor($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `editor` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function showAllUsers()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM user ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showUser($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function addEditor($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into user (Name, Surname, Username, Password, image)
VALUES (:name, :surname, :username, :password, :image)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':surname' => $data['surname'],
            ':username' => $data['username'],
            ':password' => $data['password'],
            ':image' => $data['image']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function updateEditor($id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE user set Name = ?, Surname = ?, Username = ?, image = ? where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['surname'], $data['username'], $data['image'], $id
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function deleteEditor($id)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM `user` WHERE `ID` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}


function addUser($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into user (Name, Surname, Username, Password, image)
VALUES (:name, :surname, :username, :password, :image)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':surname' => $data['surname'],
            ':username' => $data['username'],
            ':password' => $data['password'],
            ':image' => $data['image']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function updateUser($id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE user set Name = ?, Surname = ?, Username = ?, image = ? where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['surname'], $data['username'], $data['image'], $id
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function deleteUser($id)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM `user` WHERE `ID` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
