<?php

require("dbconfig.php");

try {
    if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $id = (int)$_POST['id'];
        $newFirstname = $_POST['firstname'];
        $newLastname = $_POST['lastname'];
        $newGender = $_POST['gender'];
        $datetimetoday = date("Y-m-d H:i:s");

        $sql = "UPDATE users SET firstname=:newfirstname, lastname=:newlastname, gender=:newgender, updated_at=:datetimetoday WHERE id=:id";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':newfirstname', $newFirstname);
        $stmt->bindParam(':newlastname', $newLastname);
        $stmt->bindParam(':newgender', $newGender);
        $stmt->bindParam(':datetimetoday', $datetimetoday);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        echo "User updated successfully";
    } else {
        echo "Invalid ID parameter";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

header("location: ../index.php?");