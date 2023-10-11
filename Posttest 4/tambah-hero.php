<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tambah-hero.css"  >
    <title>Tierlist Karakter Game Guardian Tales</title>
</head>
<body>
    <div class="fContainer">
        <nav class="wrapper">
            <div class="brand">
                <div class="kiri">tierlist</div>
                <div class="tengah">karakter</div>
                <div class="kanan"><img src="guardian-tales.jpg" alt=""></div>
            </div>
            <ul class="navigation">
                <li><a href="tambah-hero.php" class="active">Tambah Hero</a></li>
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="about-me.html">About Me</a></li>
                <button class="theme-toggle" onclick="toggleTheme()">Light Mode</button>
            </ul>
        </nav>
    </div>
<section class="comment">
    <div class="tambah">
        <div class="isi">
            <div class="atas">
                <p>Tambah Hero</p> 
            </div>
            <form action="tampilkan.php" method="post">
                <label for="" class="left">Nama Hero : </label>
                <input type="text" name="nama" required><br>
                <label for="" class="left">Raritas : </label>
                <div class="starwrapper">
                <input type="radio" name="raritas" value="⭐" required>⭐
                <input type="radio" name="raritas" value="⭐⭐" required>⭐⭐
                <input type="radio" name="raritas" value="⭐⭐⭐" required>⭐⭐⭐<br>
                </div>
                <label for="" class="left">Rating Arena : </label>
                <input type="number" name="arena" step="any" required><br>
                <label for="" class="left">Rating Colloseum : </label>
                <input type="number" name="colo" step="any" required><br>
                <label for="" class="left">Rating Raid : </label>
                <input type="number" name="raid" step="any" required><br>
                <input type="submit" value="SUBMIT" name="submit">
            </form>

        </div>
    </div>
</section>
<div class="gerak">
Teo
</div>
<footer>
    <div class="footer">
        <div class="fatas"> 
            2023 All Rights Reserved by Teo
        </div>
        <div class="fbawah">
            Guardian Tales is copyrighted by Kakao Games Corp. This wiki is in no way affiliated with Kakao Games Corp.
        </div>
    </div>
    </footer>
    <script type="text/javascript" src="tambah-hero.js"></script>
</body>
</html>

