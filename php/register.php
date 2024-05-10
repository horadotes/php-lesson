<?php

require('dbconfig.php');

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$gender = $_POST['gender'];

$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, gender)
    VALUES (:firstname, :lastname, :gender)");
$stmt->bindParam(':firstname', $first_name);
$stmt->bindParam(':lastname', $last_name);
$stmt->bindParam(':gender', $gender);
$stmt->execute();

$conn = null;

header("location: ../index.php?");