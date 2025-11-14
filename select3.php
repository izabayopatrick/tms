<?php
include "connect.php";
$sql ="SELECT * from orer";
$result =$conn->query($sql);
?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Added medicine</title>
                <link rel="stylesheet" href="php.css">
                    </body>
                </header>
                </h2>ORDERED MEDECINE to EL DOLADO PHARMACY</h2>
                <?php if ($result->num_rows > 0) {?>
                    <table border="1" cellspacing="0" cellpadding="5">
                        <tr>
                            <th>Client Name</th>
                            <th>Client_Id</th>
                            <th>Medicine Name</th>
                            <th>Quantity</th>
                            <th>Price</th>

                </tr>
                <?php while($row = $result-> fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['clientname']; ?></td>
                        <td><?php echo $row['clientid']; ?></td>
                        <td><?php echo $row['medicinename']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                </tr>
                <?php }?>
                </table>
                <?php } else { ?>
                    <p>no medecine is added yet.</p>
                    <?php } ?> <nav>
                        <a href="pharmacy.html">Back to menu</a>
                    </nav>
                   