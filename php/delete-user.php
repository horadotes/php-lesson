<?php

require("dbconfig.php");

try {
    if(isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM users WHERE id = :id";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();
    } else {
        echo "Invalid ID parameter";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

header("location: ../index.php?");