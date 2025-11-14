<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $medicinename = $_POST['medicinename'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $expirydate = $_POST['expirydate'];

    $sql = "INSERT INTO medicine (medicinename, quantity,price,expirydate)
     VALUES ('$medicinename','$quantity','$price','$expirydate')";

    if ($conn->query($sql) === TRUE) {
        echo "A medicine added successfully!";
            header("location:select.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>