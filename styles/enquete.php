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
        <link href="./styles/enquete.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include("Includes/Navigator.php");
        ?>
        <main id="wrapper">
            <section>
                <h2> Uitschrijfformulier KW1C</h2>
                <hr>
                <!-- Na het submitten wordt de je doorgestuurd naar de resultaten pagina           -->
                <form action="Oefening5.1-resultaat.php" method="get">

                    <label> Voor & achternaam </label>
                    <!-- De gebruiker kan typen. de name wordt opgeroepen in de code van de resultaten pagina -->
                    <input type="text" name="firstName"> <br>

                    <label> Studentennummer </label>
                    <!-- De gebruiker kan typen. de studentNumber wordt opgeroepen in de code van de resultaten pagina -->
                    <input type="text" name="studentNumber"> <br>

                    <label> Datum van uitschrijving </label>
                    <!-- De gebruiker kan een datum klikken -->
                    <input type="date" name="dateDeregistration"> <br>

                    <label> Reden van uitschrijving </label>
                    <select name="reasonDeregistration">
                        <option value="Verkeerde keuzen"> Verkeerde keuzen </option>
                        <option value="Te moeilijk"> Te moeilijk </option>
                        <option value="Andere opleiding"> Andere opleiding </option>
                        <option value="Ziekte"> Ziekte </option>
                        <option value="Geschorts"> Weggestuurd </option>
                    </select> <br>

                    <label> Leerjaar </label>
                    <input type="radio" name="Grade" value="Leerjaar 1"> 1e Leerjaar
                    <input type="radio" name="Grade" value="Leerjaar 2"> 2de Leerjaar
                    <input type="radio" name="Grade" value="Leerjaar 3"> 3de Leerjaar

                    <br>
                    <br>

                    <!-- De gebruiker kan de box aanvinken -->
                    <input type="checkbox" name="succesClass"> Ik wil me aanmelden voor de succesklas
                    <br>
                    <input type="checkbox" name="deleteMe"> Verwijder mijn gegevens uit het systeem

                    <br>

                    <label> Geef hieronder de reden van je uitschrijving </label> <br>
                    <!-- De gebruiker kan typen. Ik heb de textarea een id gegeven zodat ik die kan aanpassen in css                -->
                    <textarea name="Reason" id="reason"> </textarea>

                    <br>

                    <!--Een button om het te verzenden                -->
                    <button> Verzenden </button>
                </form>
        </main>
        <footer>

        </footer>
    </body>
</html>
