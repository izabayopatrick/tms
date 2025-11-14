<?php
include "connect.php";
if (isset($_POST['update'])){
    $medicinename=$_POST['medicinename'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $expirydate=$_POST['expirydate'];


    $sql="UPDATE medicine SET quantity='$quantity',price='$price',expirydate='$expirydate' 
    WHERE medicinename='$medicinename'";
    if($conn->query($sql)=== TRUE){
  header("Location:select.php");
    exit();
    }
    else{
    echo"<p style='color:red;text-arign:center;'>Error updating: " .$conn->error . "</p>";
    }}

    if(isset($_GET['medicinename'])){
    $medicinename=$_GET['medicinename'];
    $sql="SELECT *FROM medicine WHERE medicinename='$medicinename'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
}
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Update</title>
<link rel="stylesheet" href="update.css">
</head>
    <body>

    <h2 style ="text-align:top;">UPDATE MEDICINE </h2>

    <?php if (!empty ($row)){ ?>

        <form method="POST" action=" ">
     
        <label>Medicine Name:</label>

        <input type="text"name="medicinename"value="<?php echo $row['medicinename'];?>"><br><br>
        <label>Quantity</label>

       <input type="text"name="quantity"value="<?php echo $row['quantity'];?>"><br><br>

       <label>Price</label>

       <input type="text"name="price"value="<?php echo $row['price'];?>"><br><br>

        <label>Expiry Date</label>

       <input type="date"name="expirydate"value="<?php echo $row['expirydate'];?>"><br><br>

       <button type="submit"name="update">update</button>

       </form>

       <?php } else{ ?>

<p style ="text-align:center;"> No medicine to update.</p>

    <?php } ?>

</body>

</html>