<?php
/**
 * User: Jesper Sterrenburg
 * Date: 11-3-2025
 * File: index.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title> Startpagina </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/styles/Algemeen.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include("Includes/Navigator.php");
        ?>
        <main>
            <h2 id="partners">
                Onze partners
            </h2>
            <div id="blok">
                <div class="blokjes">
                    <a href="https://www.klm-mobility.com/nl/home?clientId=597145#/searchcars">
                    <img src="images/download.svg" alt="auto">
                    <h1>
                        Huur een auto
                    </h1>
                    <p>
                        Boek uw auto voordelig bij Hertz en spaar miles
                    </p>
                    </a>
                </div>
                <div class="blokjes">
                    <a href="https://www.klm-mobility.com/nl/home?clientId=597145#/searchcars">
                    <img src="images/bed.svg" alt="bed">
                    <h1>
                        Vind uw verblijf
                    </h1>
                    <p>
                        Boek uw accomodatie bij booking.com en ontvang miles
                    </p>
                    </a>
                </div>
                <div class="blokjes">
                    <a href="https://sp.booking.com/index.html?aid=356081&label=KLM-homepage">
                    <img src="images/parkeren.svg" alt="geparkeerde auto">
                    <h1>
                        Vervoer en parkeren
                    </h1>
                    <p>
                        Reis van en naar de luchthaven en verken uw bestemming met een auto
                    </p>
                    </a>
                </div>
                <div class="blokjes">
                    <a href="https://www.kolet.com/nl">
                    <img id="wereld" src="images/wereld" alt="wereld">
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
                    <img src="images/sandiego.jpg" alt="sandiego" class="plaatjelanden">
                    <h3 class="landentekst">
                        San diego
                    </h3>
                    <p class="landentekst">
                        (Verenigde Staten)
                    </p>
                </div>
                <div class="landen">
                    <img src="images/italie.jpg" alt="italie" class="plaatjelanden">
                    <h3 class="landentekst">
                        Florence
                    </h3>
                    <p class="landentekst">
                        (Italie)
                    </p>
                </div>
                <div class="landen">
                    <img src="images/Bonaire.jpg" alt="bonaire" class="plaatjelanden">
                    <h3 class="landentekst">
                        Bonaire
                    </h3>
                    <p class="landentekst">
                        (Bonaire, St Eustatius, Saba)
                    </p>
                </div>
                <div class="landen">
                    <img src="images/London.jpg" alt="london" class="plaatjelanden">
                    <h3 class="landentekst">
                        London
                    </h3>
                    <p class="landentekst">
                        (Verenigd Koninkrijk)
                    </p>
                </div>
            </div>
            <div id="werken">
            <h2 id="werkenbij">
                Werken Bij
            </h2>
            <p>
                Kijk of u geschikt bent om bij ons te komen werken door de vragenlijst in te vullen.
            </p>
                <a id="knop" href="pages/enquete.php">
                        Vragenlijst
                </a>
            </div>
        </main>
        <footer id="foot">
            <?php
            include("Includes/Footer.php");
            ?>
        </footer>
    </body>
</html>
