<?php
include "connect.php";
$sql ="SELECT * from medicine";
$result =$conn->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>AVAILABLE MEDICINE</title>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Added medicine</title>
                <link rel="stylesheet" href="php.css">
                    </body>
                </header>
                </h2>AVAILABLE MEDECINE IN EL DOLADO PHARMACY</h2>
                <?php if ($result->num_rows > 0) {?>
                    <table border="1" cellspacing="0" cellpadding="5">
                        <tr>
                            <th>Medicine Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Expiry Date</th>

                </tr>
                <?php while($row = $result-> fetch_assoc()) { ?>
                    <tr>g
                        <td><?php echo $row['medicinename']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['expirydate']; ?></td>
                </tr>
                <?php }?>
                </table>
                <?php } else { ?>
                    <p>no medecine is added yet.</p>
                    <?php } ?>
                    <nav>
                        <a href="login.php">LOGOUT</a>
                    </nav>
                    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Medicine - El Dolado Pharmacy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        header {
            background-color: #f0f1f5ff;
            color: white;
            padding: 1rem;
            text-align:center;
        }

        header h1 {
            margin: 0;
            font-size: 2rem;
            width: 80%;
            color:black;

        }

        .form-container {
            max-width: 800px;
            margin: 1.5rem auto;
            background-color: white;
            padding: 0.5rem;
            border-radius: 12px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: left;
            color: #1e40af;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 1rem;
            color: #1f2937;
            margin-bottom: 0.5rem;
        }

        input[type="text"],
        input[type="number"] {
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            font-size: 1rem;
            width: 100%;
            box-sizing: border-box;
        }

        input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 5px rgba(59, 130, 246, 0.3);
        }

        button {
            grid-column: span 3;
            background-color: #3b82f6;
            color: white;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 1rem;
        }

        button:hover {
            background-color: #1d4ed8;
        }

        @media (max-width: 600px) {
            .form-row {
                grid-template-columns: 1fr;
            }

            button {
                grid-column: span 1;
            }

            .form-container h2 {
                font-size: 1.5rem;
            }

            input[type="text"],
            input[type="number"],
            button {
                font-size: 0.9rem;
                padding: 0.6rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>EL DOLADO PHARMACY</h1>
    </header>
    <main>
        <section class="form-container">
            <h2>ORDER MEDICINE FOR AFFORDABLE PRICE</h2>
            <form action="insert2.php" method="post">
                <div class="form-row">
                    <div class="form-group">
     <label for="clientname">Client Name</label>
     <input type="text" id="clientname" name="clientname" placeholder="Enter client name" required><br>
    <label for="clientid">Client_Id</label>
     <input type="number" id="clientid" name="clientid" placeholder="Enter client id" required><br>
                       
     <label for="medicinename">Medicine Name</label>
     <input type="text" id="medicinename" name="medicinename" placeholder="Enter medicine name" required><br>
    <label for="quantity">Quantity</label>
    <input type="text" id="quantity" name="quantity" placeholder="Enter quantity"required><br>                     
     <label for="price">Amount</label>
     <input type="text" id="price" name="price" placeholder="Enter amount" required><br>
                    </div>
                </div>
                <button type="submit"> order now</button>
            </form>
        </section>
    </main>
</body>
</html>
                </body>
                    </html>

