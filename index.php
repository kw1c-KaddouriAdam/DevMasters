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
                    <a href="www.google.nl">
                    <img src="images/download.svg">
                    <h1>
                        Huur een auto
                    </h1>
                    <p>
                        Boek uw auto voordelig bij Hertz en spaar miles
                    </p>
                    </a>
                </div>
                <div class="blokjes">
                    <a href="www.google.nl">
                    <img src="images/bed.svg">
                    <h1>
                        Vind uw verblijf
                    </h1>
                    <p>
                        Boek uw accomodatie bij booking.com en ontvang miles
                    </p>
                    </a>
                </div>
                <div class="blokjes">
                    <a href="www.google.nl">
                    <img src="images/parkeren.svg">
                    <h1>
                        Vervoer en parkeren
                    </h1>
                    <p>
                        Reis van en naar de luchthaven en verken uw bestemming met een auto
                    </p>
                    </a>
                </div>
                <div class="blokjes">
                    <a href="www.google.nl">
                    <img id="wereld" src="images/wereld">
                    <h1 id="werreldtekst">
                        Voorkom kosten voor dataroaming
                    </h1>
                    <p>
                        Kies een eSim van Kolet en krijg 2 dagen gratis mobiele data
                    </p>
                    </a>
                </div>
            </div>
            <div id="bestemmingen">
                <h2>
                    Populaire bestemmingen
                </h2>
                <div class="landen">
                    <img src="images/sandiego.jpg" class="plaatjelanden">
                    <h3 class="landentekst">
                        San diego
                    </h3>
                    <p class="landentekst">
                        (Verenigde Staten)
                    </p>
                </div>
                <div class="landen">
                    <img src="images/italie.jpg" class="plaatjelanden">
                    <h3 class="landentekst">
                        Florence
                    </h3>
                    <p class="landentekst">
                        (Italie)
                    </p>
                </div>
                <div class="landen">
                    <img src="images/VS.jpg" class="plaatjelanden">
                    <h3 class="landentekst">
                        Bonaire
                    </h3>
                    <p class="landentekst">
                        (Bonaire, St Eustatius, Saba)
                    </p>
                </div>
                <div class="landen">
                    <img src="images/London.jpg" class="plaatjelanden">
                    <h3 class="landentekst">
                        London
                    </h3>
                    <p class="landentekst">
                        (Verenigd Koninkrijk)
                    </p>
                </div>
            </div>
        </main>
        <footer id="foot">
            <?php
            include("Includes/Footer.php");
            ?>
        </footer>
    </body>
</html>
