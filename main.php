<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/stylesheets/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="assets/scripts/videoplayer/main.js"></script>
</head>

<body>
    <!--Navbar section-->
    <div class="navbar">
        <ul>
            <li class="active">
                <a href="main.php"> <br>HOME</a>
            </li>
            <li>
                <!--Pop-up function-->
                <a href="" onclick="window.open('https://www.paypal.com/bm/cgi-bin/webscr?cmd=_flow&SESSION=Czx2eTVTMzVfw_Jf1vP_AbQWtDHoqrXDyvUpO42dqU7wKvndrluCW9lQcre&dispatch=5885d80a13c0db1f8e263663d3faee8d795bb2096d7a7643a72ab88842aa1f54&rapidsState=Donation__DonationFlow___StateDonationBilling&rapidsStateSignature=c7ef04dd1d458d16164c8150a0d973abc538938f','Return Heroes'); return false"><br>DONATE</a>
            </li>
            <li>
                <!--Pop-up function-->
                <a href="https://discord.gg/g53RJf" onclick="window.open('https://discord.gg/g53RJf','Return Heroes', 'width=400,height=425,scrollbars=no,toolbar=no,location=no'); return false"><br>JOIN OUR DISCORD</a>
            </li>
            <li>
                <!--Not linked yet-->
                <a href="#about"><br>ABOUT US</a>
            </li>
        </ul>
    </div>
    <!--End navbar section-->

    <!--Videoplayer section-->
    <div class="header">
    </div>
    <video controls autoplay loop class="video" controls preload="auto" width="600" height="338" data-setup="{}" onloadstart="this.volume=0.08">
            <source src="assets/videos/trailer.mp4" type='video/mp4'>
        </video>
    <image class="logo" src="assets/images/logo/returnheroes_logo.png" />

    <a href="homepage.php"><img class="button" src="assets/images/buttons/play_now-button.png" /></a>
    <!--End videoplayer section-->
</body>
<footer>
    <!--No idea what to put here?-->
</footer>

</html>
