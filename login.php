<?php
include 'auth.php';

if(isset($_POST['login'])){
    if($_POST['username'] === $default_user && $_POST['password'] === $default_pass){
        $_SESSION['login'] = true;
        $_SESSION['user'] = $_POST['username'];
        header("Location: index.php");
    } else {
        $error = "Login gagal";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <div class="card">
        <h2>Login</h2>

        <?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>

        <form method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button name="login">Login</button>
        </form>
    </div>
</div>

</body>
</html>
