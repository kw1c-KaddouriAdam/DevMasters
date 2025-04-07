<?php
/**
 * User: Adam kaddouri
 * Date: 15-3-2025
 * File: ResultatenEnquete.php
 */
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../styles/styles/enquete.css" rel="stylesheet">
        <link href="../styles/styles/Algemeen.css" rel="stylesheet">
        <link>
    </head>
    <header>
        <!-- Een include die de navigator toevoegt aan de resultatenpagina -->
        <?php
        include("../Includes/Navigator.php");
        ?>
    </header>
    <body>

        <main>
            <!-- Een section element met daarin alle code die nodig is om een uitslag te genereren  -->
            <section id="sectionResultaten">
                <!--   Eerste blok php             -->
                <?php

                // Datum tonen waarop de enquete is verstuurd om de antwoorden te tonen
                echo date("d-m-Y H:i");

                // Session starten
                session_start();

                // Slaat de ingevulde voor- en achternaam op uit het formulier in de sessie.
                $_SESSION["firstLastname"] = $_POST["firstLastname"];
                // Slaat de ingevulde emailadres op uit het formulier in de sessie.
                $_SESSION["emailAdres"] = $_POST["emailAdres"];
                // Slaat de ingevulde geboortedatum op uit het formulier in de sessie.
                $_SESSION["birthDate"] = $_POST["birthDate"];

                // Toon de naam van de gebruiker met de aanhef "Beste" ervopr.
                echo "<p>Beste " . $_SESSION['firstLastname'] . ",</p>" ;
                ?>

                <!-- 2de php blok bedoelt om de punten op te tellen en een advies te genereren-->
                <?php

                // Een function met de puntentelling
                function enquetePoints()
                {
                    // De puntentelling begint bij 0
                    $points = 0;

                    // Controleer of de gebruiker een antwoord heeft gegeven op de vraag met de naam "experience"
                    if (isset($_POST['experience']))
                    {
                        // Tel de waarde van het antwoord op bij het totaal aantal punten wat op dit moment 0 is
                        $points += $_POST['experience'];
                    }

                    // Controleer of de gebruiker een antwoord heeft gegeven op de vraag met de naam "englishLanguage"
                    if (isset($_POST['englishLanguage']))
                    {
                        // Tel de waarde van het antwoord op bij het totaal aantal punten wat op dit moment 10 of 5 is
                        $points += $_POST['englishLanguage'];
                    }

                    if (isset($_POST['Customers']))
                    {
                        $points += $_POST['Customers'];
                    }

                    if (isset($_POST['holidays']))
                    {
                        $points += $_POST['holidays'];
                    }

                    if (isset($_POST['Shifts']))
                    {
                        $points += $_POST['Shifts'];
                    }

                    if (isset($_POST['Stress']))
                    {
                        $points += $_POST['Stress'];
                    }

                    if (isset($_POST['teamWork']))
                    {
                        $points += $_POST['teamWork'];
                    }

                    if (isset($_POST['problemSolving']))
                    {
                        $points += $_POST['problemSolving'];
                    }

                    if (isset($_POST['physicalFit']))
                    {
                        $points += $_POST['physicalFit'];
                    }

                    if (isset($_POST['lastMinute']))
                    {
                        $points += $_POST['lastMinute'];
                    }

                    if (isset($_POST['educationFollowed']))
                    {
                        $points += $_POST['educationFollowed'];
                    }

                    if (isset($_POST['onTime']))
                    {
                        $points += $_POST['onTime'];
                    }

                    if (isset($_POST['newLearning']))
                    {
                        $points += $_POST['newLearning'];
                    }

                    if (isset($_POST['onTime']))
                    {
                        $points += $_POST['onTime'];
                    }

                    if (isset($_POST['lastMinute']))
                    {
                        $points += $_POST['lastMinute'];
                    }

                    // Geef het totaal aantal berekende punten terug aan de plek waar de functie is opgeroepen
                    return $points;

                }
                // Roep de functie enquetePoints() op en sla het totaal aantal behaalde punten op in de variabele genaamd "$behaalde_punten"
                $behaalde_punten = enquetePoints();
                // Toon op het scherm hoeveel punten de gebruiker in totaal heeft behaald
                echo "<p> Je hebt $behaalde_punten punten behaald. </p>";


                // Als de gebruiker meer dan 80 punten heeft behaald toont de loop deze echo
                if($behaalde_punten >= 80)
                {
                    // De gebruiker krijgt 1 tm 5 sterren te zien, Kort stukje advies, een visuele ondersteunende duim omhoog of omlaag en een link die hun doorstuurt naar de beschikbare vacatures.
                    echo '<p> ★★★★★ <br>
                    U heeft een uitstekende score behaald! Uw vaardigheden en eigenschappen sluiten goed aan bij wat wij zoeken in de luchtvaart. 
                    Wij raden u aan om te solliciteren bij KLM. <a target="_blank" href="https://careers.klm.com/nl/job-area/technology/techniekxxl/">Check de vacatures!</a> <div id="uitslag"> <div id="uitslag"> <img id="uitslagFoto" src="../images/omhoog.webp"> </div> </p>';
                }
                // Als de gebruiker meer dan 60 punten heeft behaald toont de loop deze echo
                elseif ($behaalde_punten >= 60)
                {
                    // De gebruiker krijgt 1 tm 5 sterren te zien, Kort stukje advies, een visuele ondersteunende duim omhoog of omlaag en een link die hun doorstuurt naar de beschikbare vacatures.
                    echo '<p> ★★★★☆ <br> <br>
                    U beschikt over veel kwaliteiten die belangrijk zijn in de luchtvaart, maar er zijn nog enkele punten waarop u zich kunt ontwikkelen. 
                    Ons advies is om gerust een sollicitatie in te vullen en voor verdere vragen een mail te sturen. 
                    <a target="_blank" href="https://careers.klm.com/nl/job-area/technology/techniekxxl/">Check de vacatures!</a> </p> <div id="uitslag"> <img id="uitslagFoto" src="../images/omhoog.webp"> </div>';
                }
                // Als de gebruiker meer dan 40 punten heeft behaald toont de loop deze echo
                elseif ($behaalde_punten >= 40)
                {
                    // De gebruiker krijgt 1 tm 5 sterren te zien, Kort stukje advies, een visuele ondersteunende duimpje omlaag en een link naar de vacature pagina van onze grootste concurrent transavia aangezien wij alleen maar werkers willen.
                    echo'<p> ★★★☆☆ 
                    U beschikt over veel kwaliteiten die belangrijk zijn in de luchtvaart, maar er zijn nog enkele punten waarop u zich kunt ontwikkelen. 
                    Dit betekent niet dat u geen kans maakt, maar wellicht is het goed om ergens anders ervaring op te doen. <a target="_blank" href="https://werkenbijtransavia.com/vacatures-transavia">Check de vacatures!</a> </p> <div id="uitslag"> <img id="uitslagFoto" src="../images/omlaag.webp"> </div>';
                }
                // Als de gebruiker minder dan 40 punten heeft behaald toont de loop deze echo
                elseif ($behaalde_punten <= 40)
                {
                    // De gebruiker krijgt 1 tm 5 sterren te zien, Kort stukje advies, een visuele ondersteunende duimpje omlaag en een link naar de opleiding travel en hospitality omdat we zelfs onze concurrent beter vinden dan jou.
                    echo '<p> ★☆☆☆☆ <br>
                          Uw score geeft aan dat er nog veel werk aan de winkel is om aan de eisen te voldoen.
                          Dit betekent niet dat u nooit in de luchtvaart kunt werken, maar voor nu komt u helaas tekort. 
                          <a target="_blank" href="https://www.kw1c.nl/opleidingen/leidinggevende-travel-hospitality-bbl/">Check de opleiding!</a></p> <div id="uitslag"> <img id="uitslagFoto" src="../images/omlaag.webp"> </div>';
                }

                ?>
            </section>

            <!-- Tweede section voor de maximale punten te behalen per vraag -->
            <section id="sectionBehaaldePunten">
                <?php
                // Maximaal aantal punten per vraag
                $maxPuntenPerVraag = [10, 10, 10, 5, 10, 10, 5, 10, 5, 10, 10, 10, 10, 10, 10];

                // Puntentelling begint bij 0 punten
                $totaalMax = 0;

                // Titel van de section
                echo "<h3>Maximaal te behalen punten per vraag:</h3>";

                for ($i = 0; $i < count($maxPuntenPerVraag); $i++)
                {
                    $vraagNummer = $i + 1;
                    $totaalMax += $maxPuntenPerVraag[$i];
                    echo "- Na vraag $vraagNummer kun je $totaalMax punten behalen.<br>";
                }

                $verschil = $totaalMax - $behaalde_punten;

                // de gebruiker krijgt te zien wat het maximale aantal punten is per vraag.
                echo "<br>Totaal maximaal te behalen punten: $totaalMax<br>";
                // de gebruiker krijgt te zien wat zijn of haar behaalde punten waren
                echo "Behaalde punten: $behaalde_punten<br>";
                // Verschil tussen behaalde punten van de gebruiker en het maximale aantal punten
                echo "Verschil: $verschil punten<br>";
                ?>
            </section>
        </main>
        <footer>
            <!-- php blok met een include-->
            <?php
                // voeg de footer toe aan de pagina
                include("../Includes/footer.php");
            ?>
        </footer>
    </body>
</html>


