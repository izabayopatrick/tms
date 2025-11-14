<?php
include "connect.php";

if (isset($_post['delete'])){
    $medicinename = $_POST['medicinename'];
    $sql="DELETE FROM orer where medicinename= '$medicinename'";
   {
    echo"medicine deleted successfully!<br><a href='select.php'>Goback</a>";
   } else{ 
        echo "Error: " . $conn->error;
    } 
}
    $conn->close();
    ?>