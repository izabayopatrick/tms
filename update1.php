<?php
include "connect.php";
if (isset($_POST['update'])){
    $clientname=$_POST['clientname'];
    $clientid=$_POST['clientid'];
    $medicinename=$_POST['medicinename'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];


    $sql="UPDATE orer SET clientname='$clientname',medicinename='$medicinename',quantity='$quantity',price='$price' 
    WHERE clientid='$clientid'";
    if($conn->query($sql)=== TRUE){
  header("Location:select2.php");
    exit();
    }
    else{
    echo"<p style='color:red;text-arign:center;'>Error updating: " .$conn->error . "</p>";
    }}

    if(isset($_GET['clientid'])){
    $clientid=$_GET['clientid'];
    $sql="SELECT *FROM orer WHERE clientid='$clientid'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
}
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Update</title>
<link rel="stylesheet" href="update.css
">
</head>
    <body>

    <h2 style ="text-align:center;">UPDATE MEDICINE </h2>

    <?php if (!empty ($row)){ ?>

        <form method="POST" action=" ">
              <label>Client Name</label>

       <input type="text"name="clientname"value="<?php echo $row['clientname'];?>"><br><br>
      <label>Client_Id</label>

       <input type="number"name="clientid"value="<?php echo $row['clientid'];?>"><br><br>
     
        <label>Medicine Name:</label>

        <input type="text"name="medicinename"value="<?php echo $row['medicinename'];?>"><br><br>
        <label>Quantity</label>

       <input type="text"name="quantity"value="<?php echo $row['quantity'];?>"><br><br>

       <label>Price</label>

       <input type="text"name="price"value="<?php echo $row['price'];?>"><br><br>
       
       <button type="submit"name="update">update</button>

       </form>

       <?php } else{ ?>

<p style ="text-align:center;"> No medicine to update.</p>

    <?php } ?>

</body>

</html>