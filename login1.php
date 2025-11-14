<?php
include "connect.php";
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if ($username == ""|| $password == "") {
        $message = " please enter both username and password.";
    } else {
        $sql = "SELECT * FROM users1 WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);
        if ($result === false) {
            $message ="SQL error: " . $conn->error;
        } elseif ($result->num_rows > 0) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location:pharmacy.html");
            exit();
        } else {    

            $message = "Invalid username or password.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="URF-8">
        <title>Login_Pharmacy</title>
        <link rel="stylesheet" href="login.css">

            </head>
            <body>
                <div class="login-box">
                    <h2>LOGIN-FORM</h2>
                    <?php if (!empty($message)) { ?>
                        <div class="msg error"><?php echo $message; ?></div>
                        <?php } ?>
                        <form method="post" action="">
                            <input type="text" name= "username"  placeholder="username"><br>
                            <input type="text" name= "password" placeholder="password"><br>
                            <button type="submit">login</button>
                    </form>
                    </div>
                    <body>
                        </html>
