<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=project_db", "root", "2524");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
try {
    if (isset($_REQUEST["term"])) {
        $sql = "SELECT * FROM user WHERE name LIKE :term";
        $stmt = $pdo->prepare($sql);
        $term = $_REQUEST["term"] . '%';
        $stmt->bindParam(":term", $term);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
?>
            <table id="list">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $stmt->fetch()) {
                        //echo "<p>" . $row["name"] . "</p>";
                    ?>
                        <tr>
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["name"] ?></td>
                            <td><?php echo $row["username"] ?></td>
                            <td><?php echo $row["pass"] ?></td>
                            <td><?php echo $row["phone"] ?></td>
                            <td><?php echo $row["email"] ?></td>
                            <td><?php echo $row["address"] ?></td>
                            <td><?php echo $row["city"] ?></td>
                            <td><?php echo $row["country"] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
<?php
        } else {
            echo "<p>No matches found</p>";
        }
    }
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
unset($stmt);
unset($pdo);
?>