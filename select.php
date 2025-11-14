<?php
include "connect.php";
if (isset($_POST['delete'])) {
    $medicinename = $_POST['medicinename'];
    $sql = "DELETE FROM medicine WHERE medicinename= '$medicinename'";
    if ($conn->query($sql) ===TRUE) {
        echo "<p style='color:green; text-align:LEFT;'>medicine is added successfully!</p>";
    } else {
        echo "<p style='color:red; text-align:center;'>Error: " . $conn->error . "<p>";
    }
}   
$sql ="SELECT * from medicine";
$result =$conn->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Added product</title>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Added medicine</title>
            <link rel="stylesheet" href="php.css">
                    
                    </body>
                </header>
                </h2></h2>
                <?php if ($result->num_rows > 0) {?>
                    <table border="1" cellspacing="0" cellpadding="5">
                        <tr>
                            <th>Medicine Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Expiry Date</th>
                            <th>Action</th>

                </tr>
                <?php while($row = $result-> fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['medicinename']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['expirydate']; ?></td>

               <td>
                <form method="post" action="">
                    <input type="hidden" name="medicinename" value="<?php echo $row['medicinename'];?>">
                    <button type="submit" name="delete">Delete</button>
                </form>
                
                <form method="GET" action ="update.php">
                    <input type="hidden" name="medicinename"value="<?php echo $row['medicinename'];?>">
                    <button type="submit" class="update-btn" name="update">Update</button>
                    </form>
                </td>
                </tr>
                <?php }?>
                </table>
                <?php } else { ?>
                    <p>no medecine is added yet.</p>
                    <?php } ?>
                    <nav>
                        <a href="pharmacy.html">Back to menu</a>
                    </nav>
                </body>
                    </html>

