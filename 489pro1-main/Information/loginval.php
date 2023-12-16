<?php


$conn = new mysqli('localhost', 'root', '', 'pharmacyq1');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("SELECT `username`, `password` FROM `patient` WHERE `username` = ? AND `password` = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        header("location:exit.html");
    } else {
        
    }
    $stmt->close();
    $conn->close();

}

?>

