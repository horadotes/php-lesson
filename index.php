<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
    <style>
        table {
            margin-top: 2em;
        }
    </style>
    <?php require('php/dbconfig.php'); ?>
</head>
<body>
    <h1>Users</h1>
    <a href="registration.php">
        <button>Register New User</button>
    </a>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $conn->prepare("SELECT id, firstname, lastname, gender, created_at, updated_at FROM users");
            $stmt->execute();
            while ($row = $stmt->fetch()) {
                echo "<tr>";
                echo "<td>" .
                    $row["firstname"] . " " . $row["lastname"] .
                    "</td>";
                echo "<td>" .
                    $row["gender"] .
                    "</td>";
                echo "<td>" .
                    $row["created_at"] .
                    "</td>";
                echo "<td>" .
                    $row["updated_at"] .
                    "</td>";
                echo "<td>" .
                    "<a href='update.php?id=" . $row["id"] . "&firstname=" . $row["firstname"] . "&lastname=" . $row["lastname"] . "&gender=" . $row["gender"] . "'>Edit</a>" .
                    "<a href='php/delete-user.php?id=" . $row["id"] . "'>Delete</a>" .
                    "</td>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
