<?php
session_start();
include_once "./db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>7TEEN STORE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <img class="logo" src="diamond.png" alt="logo">
        <div class="nav">
            <ul class="navbar" id="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#merch">Merch</a></li>
                <li><a href="#album">Album</a></li>
                <li><a href="#contactUs">Contact</a></li>

                <?php if (isset($_SESSION["id"])) : ?>
                    <li class="dropdown">
                        <a href="#" class="hover-dropdown">Hi, <?= $_SESSION["name"] ?></a>
                        <ul class="dropdown-content">
                            <li><a href="#"><?= $_SESSION["email"] ?></a></li>
                            <li><a href="list_produk.php">Daftar Produk</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                <?php endif; ?>

                <mode class="darklight">
                    <input type="checkbox" onclick="ubahMode()">
                </mode>
            </ul>
            <mode class="darklight">
                <input type="checkbox" onclick="ubahMode()">
            </mode>
        </div>
        <button class="hamburger-button">
            <img src="./hamburger-icon.svg" alt="Hamburger Icon" id="hamburger-button">
        </button>
    </nav>
    <header id="header">
        <section id="home" class="home">
            <div class="header-title">7Teen Merch Store</div>
        </section>
    </header>
    <section id="about" class="about">
        <h2 class="about-title">SAY THE NAME</h2>
        <h2 class="about-svt">SEVENTEEN!</h2>
        <p class="about1">Welcome to Seventeen Store, your top destination for all merchandise
            <br />Officially our famous music group, Seventeen! We are an official online
            <br />specialty to give fans exclusive access to high quality products
            <br />Inspired by Seventeen.
        </p>
        <h4 class="misi"> </h4>
        <p class="about1">Our mission is to meet the needs of loyal Seventeen fans with high quality
            <br />products that reflect the spirit and aesthetics of the group. We work hard to
            <br />provide a variety of choices, from clothing to accessories, collectibles, and
            <br />more. We always try to provide service Amazing customers and a great
            <br />shopping experience.
        </p>
    </section>
    <section id="about" class="about">
        <h2 class="about-title2">ABOUT THE CREATOR</h2>
    </section>
    <section id="aboutnew" class="aboutnew">
        <div class="cont">
            <div class="imagee">
                <img src="sophy.jpg" alt="image">
            </div>
        </div>
        <div class="newabout" class="newabout">
            <div>Name : Sophy Awaliah
                <br />NIM : 2209106072
                <br />Date of birth : January 10, 2004
                <br />E-mail : sophyaww17@gmail.com
            </div>
    </section>
    <section id="merch" class="merch">
        <h2 class="merch-title">M E R C H A N D I S E</h2>
        <div class="merch-container">
            <div class="image-gallery">
                <?php $query1 = mysqli_query($conn, "SELECT * FROM produk WHERE tipe_produk = 'merch' ORDER BY id DESC LIMIT 5");
                ?>
                <?php while ($merch = mysqli_fetch_assoc($query1)) : ?>
                    <div class="image-box">
                        <img src="./uploads/<?= $merch["gambar"] ?>" alt="image">
                        <p class="svt1">IDR <?= number_format($merch["harga"]) ?></p>
                        <h4 class="svt"><?= strtoupper($merch["nama_produk"]) ?></h4>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section id="merch" class="merch">
        <div class="merch-container">
            <div class="image-gallery">
                <?php $query2 = mysqli_query($conn, "SELECT * FROM produk WHERE tipe_produk = 'merch' ORDER BY id DESC LIMIT 5,5");
                ?>
                <?php while ($merch = mysqli_fetch_assoc($query2)) : ?>
                    <div class="image-box">
                        <img src="./uploads/<?= $merch["gambar"] ?>" alt="image">
                        <p class="svt1">IDR <?= number_format($merch["harga"]) ?></p>
                        <h4 class="svt"><?= strtoupper($merch["nama_produk"]) ?></h4>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section id="album" class="album">
        <h2 class="album-title">A L B U M</h2>
        <div class="album-container">
            <div class="image-gallery">
                <?php $query3 = mysqli_query($conn, "SELECT * FROM produk WHERE tipe_produk = 'album' ORDER BY id DESC LIMIT 5");
                ?>
                <?php while ($album = mysqli_fetch_assoc($query3)) : ?>
                    <div class="image-box">
                        <img src="./uploads/<?= $album["gambar"] ?>" alt="image">
                        <p class="seven1">IDR <?= number_format($album["harga"]) ?></p>
                        <h4 class="seven"><?= strtoupper($album["nama_produk"]) ?></h4>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section id="album" class="album">
        <div class="album-container">
            <div class="image-gallery">
                <?php $query4 = mysqli_query($conn, "SELECT * FROM produk WHERE tipe_produk = 'album' ORDER BY id DESC LIMIT 5,5");
                ?>
                <?php while ($album = mysqli_fetch_assoc($query4)) : ?>
                    <div class="image-box">
                        <img src="./uploads/<?= $album["gambar"] ?>" alt="image">
                        <p class="seven1">IDR <?= number_format($album["harga"]) ?></p>
                        <h4 class="seven"><?= strtoupper($album["nama_produk"]) ?></h4>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <button id="scroll-to-top"><svg fill="#ffffff" height="15px" width="15px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330" xml:space="preserve">
            <path id="XMLID_224_" d="M325.606,229.393l-150.004-150C172.79,76.58,168.974,75,164.996,75c-3.979,0-7.794,1.581-10.607,4.394
           l-149.996,150c-5.858,5.858-5.858,15.355,0,21.213c5.857,5.857,15.355,5.858,21.213,0l139.39-139.393l139.397,139.393
           C307.322,253.536,311.161,255,315,255c3.839,0,7.678-1.464,10.607-4.394C331.464,244.748,331.464,235.251,325.606,229.393z" />
        </svg></button>
    <section id="contactUs" class="contactUs">
        <div class="contact-heading">
            <h2>Contact Us</h2>
            <p>If you have input, criticism or suggestions for our shop, please fill them in below.</p>
            <p>We really appreciate your opinion, we hope you also enjoy shopping in our store.</p>
            <p>Thank you to all of you</p>
        </div>
        <form action="" method="">
            <input type="text" name="user" placeholder="Full Name" />
            <input type="email" name="email" placeholder="Your E-Mail" />
            <textarea name="message" placeholder="Type Your Message Here..."></textarea>
            <button class="main-btn contact-btn">Send</button>
        </form>
    </section>
    <footer>
        <div class="social">
            <a href="https://www.instagram.com/saythename_17"><span class="fab fa-instagram"></span></a>
            <a href="https://twitter.com/pledis_17"><span class="fab fa-twitter"></span></a>
            <a href="https://www.youtube.com/channel/UCfkXDY7vwkcJ8ddFGz8KusA"><span class="fab fa-youtube"></span></a>
        </div>
        <div class="credit">
            <p> &copy; 2023 SEVENTEEN OFFICIAL STORE</p>
            <p>ALL RIGHT RESERVED</p>
        </div>
        </section>
    </footer>
</body>

<script>
    function ubahMode() {
        const ubah = document.body;
        ubah.classList.toggle("dark");
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="./script.js"></script>

</html>