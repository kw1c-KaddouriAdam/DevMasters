<?php
/**
 * User: Adam kaddouri, Jesper sterrenburg en Robert bogmans
 * Date: 15-3-2025
 * File: index.php
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
        <?php
        include("../Includes/Navigator.php");
        ?>
    </header>
    <body>

        <main id="wrapper">
            <section>
                <!-- Php blok de tijd linkt aan een greeting                -->
                <?php
                // uur = hour
                $hour = date('H');

                // als het tussen 6 en 12 uur is
                if ($hour >= 6 && $hour < 12)
                {
                    // wordt $groet Goedemorgen
                    $groet = "Goedemorgen";
                }
                // als het tussen 12 en 18 uur is
                elseif ($hour >= 12 && $hour < 18)
                {
                    // wordt $groet Goedemiddag
                    $groet = "Goedemiddag";
                }
                // Alles wat buiten 6/12 en 12/18 valt is goedenavond
                else
                {
                    // wordt $groet Goedeavond
                    $groet = "Goedenavond";
                }
                ?>
                <!-- H1 korte uitnodigende tekst.-->
                <h1>
                    <!--roep de variabele groet op uit het eerste php blok-->
                    <?php echo $groet; ?>, welkom op de vragenlijst! Bent u geschikt om in de luchtvaart te werken bij KLM? Kom erachter door deze korte enquete in te vullen. Succes!
                </h1>

                <!-- De vragenlijst -->
                <form action="resultatenEnquete.php" method="post">

                    <div>
                        <label> Voor & achternaam </label>
                        <!-- De gebruiker kan typen. de naam wordt opgeroepen in de code van de resultaten pagina -->
                        <input required type="text" name="firstLastname"> <br>

                        <label> Email </label>
                        <!-- De gebruiker kan typen. de emailAdres wordt opgeroepen in de code van de resultaten pagina -->
                        <input required type="text" name="emailAdres"> <br>
                        <label> Geboortedatum </label>
                        <!-- De gebruiker kan een datum klikken -->
                        <input required type="date" name="birthDate"> <br>
                    </div>

                    <div>
                        <!--  Vraag 1 met radiobuttons. De experience wordt opgeroepen in de code van de resultaten pagina.
                                               De vraag is maximaal 10 punten waard.-->
                        <label> Heeft u ooit eerder in de luchtvaart gewerkt? </label> <br>
                        <input required type="radio" name="experience" value="10"> Ja
                        <input required type="radio" name="experience" value="5"> Nee
                    </div>

                    <div>
                        <label> Hoe goed spreekt u Engels? </label> <br>
                        <input required type="radio" name="englishLanguage" value="-10"> Ik spreek geen Engels
                        <input required type="radio" name="englishLanguage" value="5"> Ik kan de basis van Engels
                        <input required type="radio" name="englishLanguage" value="10"> Ik spreek vloeiend Engels <br>
                    </div>

                    <div>
                        <label> Kunt u goed omgaan met klanten? </label> <br>
                        <input required type="radio" name="Customers" value="0"> Nee
                        <input required type="radio" name="Customers" value="5"> Redelijk
                        <input required type="radio" name="Customers" value="10"> Ja
                    </div>

                    <div>
                        <label> Bent u bereid om op feestfagen te werken? </label> <br>
                        <input required type="radio" name="holidays" value="5"> Ja
                        <input required type="radio" name="holidays" value="0"> Nee
                    </div>

                    <div>
                        <label> Bent u bereid om ploegdiensten te werken (Nacht/dag)? </label> <br>
                        <input required type="radio" name="Shifts" value="0"> Nee
                        <input required type="radio" name="Shifts" value="5"> Soms
                        <input required type="radio" name="Shifts" value="10"> Ja altijd
                    </div>

                    <div>
                        <label> Hoe stressbestendig ben je? </label> <br>
                        <input required type="radio" name="Stress" value="10"> Goed
                        <input required type="radio" name="Stress" value="5"> Voldoende
                        <input required type="radio" name="Stress" value="0"> Slecht
                    </div>

                    <div>
                        <label> Heeft u ervaring met in een team werken? </label> <br>
                        <input required type="radio" name="teamWork" value="0"> Nee
                        <input required type="radio" name="teamWork" value="5"> Ja
                    </div>

                    <div>
                        <label> Hoe goed bent u in probleem oplossend denken?</label> <br>
                        <input required type="radio" name="problemSolving" value="0"> Niet goed
                        <input required type="radio" name="problemSolving" value="5"> Prima
                        <input required type="radio" name="problemSolving" value="10"> Goed
                    </div>

                    <div>
                        <label>Bent u fysiek in staat om lang te staan en veel te bewegen?</label> <br>
                        <input required type="radio" name="physicalFit" value="0"> Nee
                        <input required type="radio" name="physicalFit" value="0"> Met maten
                        <input required type="radio" name="physicalFit" value="5"> Ja
                    </div>

                    <div>
                        <label> Hoe flexibel bent u met last minute wijzigingen in uw rooster?</label> <br>
                        <input required type="radio" name="lastMinute" value="0"> Niet flexibel
                        <input required type="radio" name="lastMinute" value="0"> Redelijk flexibel
                        <input required type="radio" name="lastMinute" value="10"> flexibel
                    </div>

                    <div>
                        <label> Hoeveel uur in de week wilt u werken?</label> <br>
                        <input required type="radio" name="hoursWork" value="5"> Parttime
                        <input required type="radio" name="hoursWork" value="10"> Fulltime
                    </div>

                    <div>
                        <label> Wat voor opleiding heeft u gevolgd?</label> <br>
                        <input required type="radio" name="educationFollowed" value="0"> Geen opleiding
                        <input required type="radio" name="educationFollowed" value="0"> niet interessante opleiding
                        <input required type="radio" name="educationFollowed" value="10"> Zeer interessante opleiding
                    </div>

                    <div>
                        <label> Hoe goed bent u in op tijd komen?</label> <br>
                        <input required type="radio" name="onTime" value="-10"> Ik kom vaak te laat
                        <input required type="radio" name="onTime" value="0"> Meestal op tijd, maar soms te laat
                        <input required type="radio" name="onTime" value="10"> Ik ben altijd op tijd
                    </div>

                    <div>
                        <label> Staat u open om nieuwe dingen te leren en door te groeien binnen ons bedrijf? </label> <br>
                        <input required type="radio" name="newLearning" value="10"> Ja
                        <input required type="radio" name="newLearning" value="0"> Nee
                    </div>

                    <div>
                        <label> Hoe gaat u om met culturele verschillen? </label> <br>
                        <input required type="radio" name="onTime" value="0"> Niet goed
                        <input required type="radio" name="onTime" value="5"> Redelijk goed
                        <input required type="radio" name="onTime" value="10"> Erg goed
                    </div>

                    <!--Een button om het te verzenden. Als de gebruiker klikt op de button wordt hij of zij doorverwezen naar de resultaten pagina. -->
                    <button> verzenden </button>
                </form>
        </main>
        <footer>
            <!-- Een include die de footer toevoegt aan de pagina  -->
            <?php
            include("../Includes/Footer.php");
            ?>
        </footer>
    </body>
</html>
