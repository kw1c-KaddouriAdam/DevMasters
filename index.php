<?php
/**
 * User: Adam kaddouri, Jesper sterrenburg en Robert bogmans
 * Date: 11-3-2025
 * File: index.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./styles/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include("Includes/Navigator.php");
        ?>
        <main>
            <div id="blok">
                <div class="blokjes">
                    <img src="images/download.svg">
                    <h1>
                        Huur een auto
                    </h1>
                    <p>
                        Boek uw auto voordelig bij Hertz en spaar miles
                    </p>
                </div>
                <div class="blokjes">
                    <img src="images/bed.svg">
                    <h1>
                        Vind uw verblijf
                    </h1>
                    <p>
                        Boek uw accomodatie bij booking.com en ontvang miles
                    </p>
                </div>
                <div class="blokjes">
                    <img src="images/parkeren.svg">
                    <h1>
                        Vervoer en parkeren
                    </h1>
                    <p>
                        Reis van en naar de luchthaven en verken uw bestemming met een auto
                    </p>
                </div>
                <div class="blokjes">
                    <img id="wereld" src="images/wereld">
                    <h1 id="werreldtekst">
                        Voorkom kosten voor dataroaming
                    </h1>
                    <p>
                        Kies een eSim van Kolet en krijg 2 dagen gratis mobiele data
                    </p>
                </div>
            </div>
            <div id="bestemmingendiv">
            <h2>
                Populaire bestemmingen
            </h2>
            <h3>
               San diego
            </h3>
            <p>
                (Verenigde Staten)
            </p>
            <hr>
            <h3>
                Florence
            </h3>
            <p>
                (Italie)
            </p>
            <hr>
            <h3>
                Bonaire
            </h3>
            <p>
                (Bonaire, St Eustatius, Saba))
            </p>
                <hr>
            </div>
        </main>
<!--        <footer>-->
<!--            --><?php
//            include("Includes/Footer.php");
//            ?>
<!--        </footer>-->
    </body>
</html>
