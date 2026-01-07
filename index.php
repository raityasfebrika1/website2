<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Mini Shop</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <div class="card">
        <h2>Selamat Datang di TES makan</h2>

        <?php if(isset($_SESSION['login'])): ?>
            <p>Halo <b><?= $_SESSION['user']; ?></b>, selamat berbelanja.</p>
        <?php else: ?>
            <p>Silakan login untuk masuk ke sistem.</p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
