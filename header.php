<header>
    <a href="index.php">Home</a>
    <a href="produk.php">Produk</a>
    <a href="about.php">About</a>

    <?php if(isset($_SESSION['login'])): ?>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    <?php endif; ?>
</header>
