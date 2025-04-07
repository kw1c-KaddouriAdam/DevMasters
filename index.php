<?php
/**
 * User: Jesper Sterrenburg
 * Date: 11-3-2025
 * File: index.php
 */
$link1 = "";
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title> Startpagina </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/Algemeen.css" rel="stylesheet">
    </head>
    <body>
<!--    nav word getoond-->
        <?php
        include("Includes/Navigator.php");
        ?>
        <main>
<!--            h2 met een id-->
            <h2 id="partners">
                Onze partners
            </h2>
<!--            div met een id-->
            <div id="blok">
<!--                div met een class-->
                <div class="blokjes">
<!--                    linkje toegevoegd-->
                    <a href="https://www.klm-mobility.com/nl/home?clientId=597145#/searchcars">
<!--                        img ingevooegd -->
                    <img src="images/download.svg" alt="auto">
<!--                        h1 toegevoegd -->
                    <h1>
                        Huur een auto
                    </h1>
<!--                        p toegevoegd-->
                    <p>
                        Boek uw auto voordelig bij Hertz en spaar miles
                    </p>
                    </a>
                </div>
<!--                div met class toegevoegd-->
                <div class="blokjes">
<!--                    link toegevoegd -->
                    <a href="https://www.klm-mobility.com/nl/home?clientId=597145#/searchcars">
<!--                        plaatje toegevoegd -->
                    <img src="images/bed.svg" alt="bed">
<!--                        h1 toegevoegd -->
                    <h1>
                        Vind uw verblijf
                    </h1>
<!--                        p toegevoegd -->
                    <p>
                        Boek uw accomodatie bij booking.com en ontvang miles
                    </p>
                    </a>
                </div>
<!--                div toegevoegd met een class-->
                <div class="blokjes">
<!--                    link toegevoegd -->
                    <a href="https://sp.booking.com/index.html?aid=356081&label=KLM-homepage">
<!--                        plaatje ingevoegd -->
                    <img src="images/parkeren.svg" alt="geparkeerde auto">
<!--                        h1 ingevoegd -->
                    <h1>
                        Vervoer en parkeren
                    </h1>
<!--                        p ingevoegd-->
                    <p>
                        Reis van en naar de luchthaven en verken uw bestemming met een auto
                    </p>
                    </a>
                </div>
<!--                div ingevoegd en een class gegeven-->
                <div class="blokjes">
<!--                    linkje toegevoegd -->
                    <a href="https://www.kolet.com/nl">
<!--                        plaatje ingevoegd-->
                    <img id="wereld" src="images/wereld" alt="wereld">
<!--                        h1 ongevoegd en een id aangegeven-->
                    <h1 id="werreldtekst">
                        Voorkom kosten voor dataroaming
                    </h1>
<!--                        p ingevoegd -->
                    <p>
                        Kies een eSim van Kolet en krijg 2 dagen gratis mobiele data
                    </p>
                    </a>
                </div>
            </div>
<!--            div ingevoegd en een id gegeven-->
            <div id="bestemmingen">
<!--                h2 ingevoegd -->
                <h2>
                    Populaire bestemmingen
                </h2>
<!--                div ingevoegd een een class gegeven-->
                <div class="landen">
<!--                    plaatje ingevoegd en een class gegeven-->
                    <img src="images/sandiego.jpg" alt="sandiego" class="plaatjelanden">
<!--                    h3 ingevoegd en een class aangegeven-->
                    <h3 class="landentekst">
                        San diego
                    </h3>
<!--                    p ingevoegd en een class gegeven-->
                    <p class="landentekst">
                        (Verenigde Staten)
                    </p>
                </div>
                <!--                div ingevoegd een een class gegeven-->
                <div class="landen">
                    <!--                    plaatje ingevoegd en een class gegeven-->
                    <img src="images/italie.jpg" alt="italie" class="plaatjelanden">
                    <!--                    h3 ingevoegd en een class aangegeven-->
                    <h3 class="landentekst">
                        Florence
                    </h3>
                    <!--                    p ingevoegd en een class gegeven-->
                    <p class="landentekst">
                        (Italie)
                    </p>
                </div>
                <!--                div ingevoegd een een class gegeven-->
                <div class="landen">
                    <!--                    plaatje ingevoegd en een class gegeven-->
                    <img src="images/Bonaire.jpg" alt="bonaire" class="plaatjelanden">
                    <!--                    h3 ingevoegd en een class aangegeven-->
                    <h3 class="landentekst">
                        Bonaire
                    </h3>
                    <!--                    p ingevoegd en een class gegeven-->
                    <p class="landentekst">
                        (Bonaire, St Eustatius, Saba)
                    </p>
                </div>
                <!--                div ingevoegd een een class gegeven-->
                <div class="landen">
                    <!--                    plaatje ingevoegd en een class gegeven-->
                    <img src="images/London.jpg" alt="london" class="plaatjelanden">
                    <!--                    h3 ingevoegd en een class aangegeven-->
                    <h3 class="landentekst">
                        London
                    </h3>
                    <!--                    p ingevoegd en een class gegeven-->
                    <p class="landentekst">
                        (Verenigd Koninkrijk)
                    </p>
                </div>
            </div>
<!--        div een id gegeven    -->
            <div id="werken">
<!--                h2 ingevoegd en een id gegeven-->
                <h2 id="werkenbij">
                    Werken Bij
                </h2>
<!--                p ingevoegd-->
                <p>
                    Kijk of u geschikt bent om bij ons te komen werken door de vragenlijst in te vullen.
                </p>
<!--                a ingevoegd en gelinkt naar een andere pagina-->
                <a id="knop" href="pages/enquete.php">
                    Vragenlijst
                </a>
            </div>
        </main>
<!--footer een id gegeven-->
        <footer id="foot">
<!--            footer tonen met php-->
            <?php
            include("Includes/Footer.php");
            ?>
        </footer>
    </body>
</html>
