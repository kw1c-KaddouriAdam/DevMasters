<?php
/**
 * User: Adam kaddouri
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
            <section id="sectionResultaten">
                <?php

                echo date("d-m-Y H:i");

                session_start();

                $_SESSION["firstLastname"] = $_POST["firstLastname"];
                $_SESSION["emailAdres"] = $_POST["emailAdres"];
                $_SESSION["birthDate"] = $_POST["birthDate"];

//                echo $_SESSION['firstLastname'];

                echo "<p>Beste " . $_SESSION['firstLastname'] . ",</p>" ;
                ?>


                <?php

                function enquetePoints()
                {
                    $points = 0;

                    if (isset($_POST['experience']))
                    {
                        $points += $_POST['experience'];
                    }

                    if (isset($_POST['englishLanguage']))
                    {
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

                    return $points;

                }
                $behaalde_punten = enquetePoints();
                echo "<p> Je hebt $behaalde_punten punten behaald. </p>";


                if($behaalde_punten >= 80)
                {
                    echo '<p> ★★★★★ <br>
                    U heeft een uitstekende score behaald! Uw vaardigheden en eigenschappen sluiten goed aan bij wat wij zoeken in de luchtvaart. 
                    Wij raden u aan om te solliciteren bij KLM. <a target="_blank" href="https://careers.klm.com/nl/job-area/technology/techniekxxl/">Check de vacatures!</a> <div id="uitslag"> <img id="uitslagFoto" src="../images/thumbsUp.jpg"> </div> </p>';
                }
                elseif ($behaalde_punten >= 60)
                {
                    echo '<p> ★★★★☆ <br> <br>
                    U beschikt over veel kwaliteiten die belangrijk zijn in de luchtvaart, maar er zijn nog enkele punten waarop u zich kunt ontwikkelen. 
                    Ons advies is om gerust een sollicitatie in te vullen en voor verdere vragen een mail te sturen. 
                    <a target="_blank" href="https://careers.klm.com/nl/job-area/technology/techniekxxl/">Check de vacatures!</a> </p> <div id="uitslag"> <img id="uitslagFoto" src="../images/thumbsUp.jpg"> </div>';
                }
                elseif ($behaalde_punten >= 40)
                {
                    echo'<p> ★★★☆☆ 
                    U beschikt over veel kwaliteiten die belangrijk zijn in de luchtvaart, maar er zijn nog enkele punten waarop u zich kunt ontwikkelen. 
                    Dit betekent niet dat u geen kans maakt, maar wellicht is het goed om ergens anders ervaring op te doen. <a target="_blank" href="https://careers.klm.com/nl/job-area/technology/techniekxxl/">Check de vacatures!</a> </p>';
                }
                elseif ($behaalde_punten >= 20)
                {
                    echo '<p> ★☆☆☆☆ <br>
                          Uw score geeft aan dat er nog veel werk aan de winkel is om aan de eisen te voldoen.
                          Dit betekent niet dat u nooit in de luchtvaart kunt werken, maar voor nu komt u helaas tekort. 
                          <a target="_blank" href="https://www.kw1c.nl/opleidingen/leidinggevende-travel-hospitality-bbl/">Check de opleiding!</a></p>';
                }

                ?>

            </section>
        </main>
        <footer>
            <?php
                        include("../Includes/footer.php");
            ?>
        </footer>
    </body>
</html>


