<?php
include('db_conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO sexaphone (Name, Email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
