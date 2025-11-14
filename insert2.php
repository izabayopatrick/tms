<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $clientname = $_POST['clientname'];
    $clientid = $_POST['clientid'];
    $medicinename = $_POST['medicinename'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "INSERT INTO orer (clientname,clientid,medicinename,quantity,price)
     VALUES ('$clientname','$clientid','$medicinename','$quantity','$price')";

    if ($conn->query($sql) === TRUE) {
        echo "A medicine ordered successfully!";
            header("location:select2.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>