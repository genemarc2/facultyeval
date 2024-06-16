<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', "facultysystem");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="indexstyle.css">
</head>
<body>
    <div class="login-container">
        <h2>Login to Evaluation System</h2>
        <form action="home.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
            <button type="submit" name="login">Login</button>
            </div>
        </form>
    </div>

<?php 
    if (isset($POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

    $select = mysqli_query($conn, "SELCET * FROM tb_users WHERE username = '$username' AND password = '$password'");
    $row = mysqli_fetch_array($select);

    if(is+array($row)){
        $_SESSION["username"] = $row ['username'];
        $_SESSION["password"] = $row ['password'];
    }   else{
        echo '<script type = "text/javascropt">';
        echo '</script>';
    }
    }
    if(isset($_SESSION["username"])){
        header("Location:home.php");
    }
?>

</body>
</html>
