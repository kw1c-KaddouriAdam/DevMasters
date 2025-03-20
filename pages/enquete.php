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
    </head>
    <header>
        <?php
        $basePath = "";
        include("../Includes/Navigator.php");
        ?>
    </header>
    <body>
    <?php
    // Haal het huidige uur op (24-uurs formaat)
    $hour = date('H');

    if ($hour >= 5 && $hour < 12) {
        $greeting = "Goedemorgen";
    } elseif ($hour >= 12 && $hour < 18) {
        $greeting = "Goedemiddag";
    } else {
        $greeting = "Goedenavond";
    }
    ?>

    <h1><?php echo $greeting; ?>, welkom op de vragenlijst!</h1>
    <p>We zijn blij dat je de tijd neemt om onze vragenlijst in te vullen. Het duurt slechts een paar minuten en je hulp is van groot belang voor ons. Klik op de volgende knop om te beginnen!</p>

        <main id="wrapper">
            <section>
                <h2> Bent u geschikt om in de luchtvaart te werken bij KLM?</h2>
                <hr>
                <!-- Een vragenlijst -->
                <form action="resultatenEnquete.php" method="get">

                    <div>
                        <label> Voor & achternaam </label>
                        <!-- De gebruiker kan typen. de naam wordt opgeroepen in de code van de resultaten pagina -->
                        <input type="text" name="firstLastname"> <br>

                        <label> Email </label>
                        <!-- De gebruiker kan typen. de emailAdres wordt opgeroepen in de code van de resultaten pagina -->
                        <input type="text" name="emailAdres"> <br>
                        <label> Geboortedatum </label>
                        <!-- De gebruiker kan een datum klikken -->
                        <input type="date" name="birthDate"> <br>
                    </div>

                    <div>
                        <label> Heeft u ooit eerder in de luchtvaart gewerkt? </label> <br>
                        <input type="radio" name="Experience" value="10"> Ja
                        <input type="radio" name="Experience" value="5"> Nee
                    </div>

                    <div>
                        <label> Hoe goed spreekt u Engels? </label> <br>
                        <input type="radio" name="englishLanguage" value="-10"> Ik spreek geen Engels
                        <input type="radio" name="englishLanguage" value="5"> Ik kan de basis van Engels
                        <input type="radio" name="englishLanguage" value="10"> Ik spreek vloeiend Engels <br>
                    </div>

                    <div>
                        <label> Kunt u goed omgaan met klanten? </label> <br>
                        <input type="radio" name="Customers" value="-10"> Nee, ik kan niet goed omgaan met klanten
                        <input type="radio" name="Customers" value="5"> Ik kan redelijk omgaan met klanten
                        <input type="radio" name="Customers" value="10"> Ja ik kan heel goed omgaan met klanten
                    </div>

                    <div>
                        <label> Bent u bereid om op feestfagen te werken? </label> <br>
                        <input type="radio" name="holidays" value="5"> Ja
                        <input type="radio" name="holidays" value="0"> Nee
                    </div>

                    <div>
                        <label> Bent u bereid om ploegdiensten te werken (Nacht/dag)? </label> <br>
                        <input type="radio" name="Shifts" value="-5"> Nee
                        <input type="radio" name="Shifts" value="5"> Soms
                        <input type="radio" name="Shifts" value="5"> Ja altijd
                    </div>

                    <div>
                        <label> Hoe stressbestendig ben je? </label> <br>
                        <input type="radio" name="Stress" value="-5"> Ik kan niet tegen stress
                        <input type="radio" name="Stress" value="0"> Ik kan een beetje tegen stress
                        <input type="radio" name="Stress" value="10"> Ik kan heel goed tegen stress
                    </div>

                    <div>
                        <label> Heeft u ervaring met in een team werken? </label> <br>
                        <input type="radio" name="teamWork" value="-5"> Nee
                        <input type="radio" name="teamWork" value="5"> Ja
                    </div>

                    <div>
                        <label> Hoe goed bent u in probleem oplossend denken?</label> <br>
                        <input type="radio" name="problemSolving" value="-5"> Niet goed
                        <input type="radio" name="problemSolving" value="0"> Prima
                        <input type="radio" name="problemSolving" value="5"> Goed
                    </div>

                    <div>
                        <label>Bent u fysiek in staat om lang te staan en veel te bewegen?</label> <br>
                        <input type="radio" name="physicalFit" value="-10"> Nee
                        <input type="radio" name="physicalFit" value="0"> Met maten
                        <input type="radio" name="physicalFit" value="5"> Ja
                    </div>

                    <div>
                        <label> Hoe flexibel bent u met last minute wijzigingen in uw rooster?</label> <br>
                        <input type="radio" name="lastMinute" value="-10"> Niet flexibel
                        <input type="radio" name="lastMinute" value="0"> Redelijk flexibel
                        <input type="radio" name="lastMinute" value="10"> flexibel
                    </div>

                    <div>
                        <label> Hoeveel uur in de week wilt u werken?</label> <br>
                        <input type="radio" name="hoursWork" value="5"> Parttime
                        <input type="radio" name="hoursWork" value="10"> Fulltime
                    </div>

                    <div>
                        <label> Wat voor opleiding heeft u gevolgd?</label> <br>
                        <input type="radio" name="educationFollowed" value="-10"> Ik heb geen opleiding gevolgd
                        <input type="radio" name="educationFollowed" value="0"> Ik heb een opleiding gevolgd die niks met luchmaatschappij te maken heeft
                        <input type="radio" name="educationFollowed" value="10"> Ik heb een opleiding gevolgd over de luchtvaart
                    </div>

                    <div>
                        <label> Hoe goed bent u in op tijd komen?</label> <br>
                        <input type="radio" name="onTime" value="-10"> Ik kom vaak te laat
                        <input type="radio" name="onTime" value="0"> Meestal op tijd, maar soms te laat
                        <input type="radio" name="onTime" value="10"> Ik ben altijd op tijd
                    </div>

                    <div>
                        <label> Staat u open om nieuwe dingen te leren en door te groeien binnen ons bedrijf? </label> <br>
                        <input type="radio" name="newLearning" value="10"> Ja
                        <input type="radio" name="newLearning" value="-10"> NEe
                    </div>

                    <div>
                        <label> Hoe gaat u om met culturele verschillen? </label> <br>
                        <input type="radio" name="onTime" value="-5"> Niet goed
                        <input type="radio" name="onTime" value="5"> Redelijk goed
                        <input type="radio" name="onTime" value="10"> Erg goed
                    </div>

                    <!--Een button om het te verzenden                -->
                    <button> Verzenden </button>

                    <p id="result"> </p>
                </form>
        </main>
        <footer>

        </footer>
    </body>
</html>
