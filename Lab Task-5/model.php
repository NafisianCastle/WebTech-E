<?php

require_once 'db_connect.php';


function showAllUsers()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `user` ';
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
function searchProduct($data){
	$conn = db_conn();
	if(empty($data))
	{
		$selectQuery = "SELECT Name, Selling_price - Buying_Price AS profit FROM products where Name = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$data]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
	}
	else{
		$selectQuery = "SELECT Name, Selling_price - Buying_Price AS profit FROM products WHERE Displayable = 'Yes' AND CONCAT(Name,Selling_price,Buying_Price,Displayable) LIKE '%".$data."%'";
	try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
    }
}