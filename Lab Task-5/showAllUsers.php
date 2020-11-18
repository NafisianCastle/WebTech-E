<?php
require_once 'controller/UserInfo.php';

$Users = fetchAllUsers();

?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Username</th>
                <th>Password</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Users as $i => $User) : ?>
                <tr>
                    <td><a href="showUser.php?id=<?php echo $User['ID'] ?>"><?php echo $User['Name'] ?></a></td>
                    <td><?php echo $User['Surname'] ?></td>
                    <td><?php echo $User['Username'] ?></td>
                    <td><?php echo $User['Password'] ?></td>
                    <td><img width="100px" src="uploads/<?php echo $User['image'] ?>" alt="<?php echo $User['Name'] ?>"></td>
                    <td><a href="editUser.php?id=<?php echo $User['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteUser.php?id=<?php echo $User['ID'] ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>


        </tbody>


    </table>


</body>

</html>