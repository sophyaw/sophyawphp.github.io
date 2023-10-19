<?php
session_start();

if (!isset($_SESSION['id']) && !isset($_SESSION['user_name'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>HOME</title>
    <link rel="stylesheet" href="phpstyle.css">
</head>

<body>
    <nav>
        <img class="logo" src="diamond.png" alt="logo">
    </nav>
    <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
    <div class='home'>
        <a href="index.php">Back to Store</a>
    </div>
</body>

</html>