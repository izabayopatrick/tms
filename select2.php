<?php
include "connect.php";
if (isset($_POST['delete'])) {
    $clientid = $_POST['clientid'];
    $sql = "DELETE FROM orer WHERE clientid= '$clientid'";
    if ($conn->query($sql) ===TRUE) {
        echo "<p style='color:green; text-align:LEFT;'>medicine is ordered successfully!</p>";
    } else {
        echo "<p style='color:red; text-align:center;'>Error: " . $conn->error . "<p>";
    }
}   
$sql ="SELECT * from orer";
$result =$conn->query($sql);
?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>order medicine</title>
            <link rel="stylesheet" href="php.css">
                    
                    </body>
                </header>
                </h2></h2>
                <?php if ($result->num_rows > 0) {?>
                    <table border="1" cellspacing="0" cellpadding="8">
                        <tr>
                            <th>Client Name</th>
                            <th>Client_Id</th>
                            <th>Medicine Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>

                </tr>
                <?php while($row = $result-> fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['clientname']; ?></td>
                        <td><?php echo $row['clientid']; ?></td>
                        <td><?php echo $row['medicinename']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['price']; ?></td>

               <td>
                <form method="post" action="">
                    <input type="hidden" name="clientid" value="<?php echo $row['clientid'];?>">
                    <button type="submit" name="delete">Delete</button>
                </form>
                
                <form method="GET" action ="update1.php">
                    <input type="hidden" name="clientid"value="<?php echo $row['clientid'];?>">
                    <button type="submit" class="update-btn" name="update">Update</button>
                    </form>
                </td>
                </tr>
                <?php }?>
                </table>
                <?php } else { ?>
                    <p>no medecine is ordered yet.</p>
                    <?php } ?>
                    <nav>
                        <a href="select1.php">Back to menu</a>
                    </nav>
                </body>
                    </html>

