<!DOCTYPE html>
<html>

<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="phpstyle.css">
</head>

<body>
    <form action="signup-check.php" method="post">
        <h2>SIGN UP</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label>Name</label>
        <?php if (isset($_GET['name'])) { ?>
            <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
        <?php } else { ?>
            <input type="text" name="name" placeholder="enter name"><br>
        <?php } ?>

        <label>Email</label>
        <?php if (isset($_GET['email'])) { ?>
            <input type="email" name="email" placeholder="Email" value="<?php echo $_GET['email']; ?>"><br>
        <?php } else { ?>
            <input type="email" name="email" placeholder="Email"><br>
        <?php } ?>


        <label>Password</label>
        <input type="password" name="password" placeholder="enter password"><br>

        <input type="password" name="re_password" placeholder="enter the password again"><br>

        <button type="submit">Sign Up</button>
        <a href="index1.php" class="create">Already have an account?</a>
    </form>
</body>

</html>