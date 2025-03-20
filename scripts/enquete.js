// * User: Adam kaddouri
// * Date: 14-2-2025
// * File: enquete.js

function enquetePoints()
{
    var points = 0;
    // De vragen ophalen uit de html
    var experiencePoint = document.querySelector('input[name="Experience"]:checked').value;
    if (experiencePoint === "Ja") points += 10;
    else if (experiencePoint === "Nee") points += 5;

    // De gekozen reinigingsmiddelen ophalen
    var reinigingsmiddelenPunt = document.querySelector('input[name="reinigingsmiddelen"]:checked').value;
    // Als de gebruiker een rager gebruikt, krijgt hij of zij 10 punten
    if (reinigingsmiddelenPunt === "rager") points += 10;
    // Een tandenstoker levert 5 punten op
    else if (reinigingsmiddelenPunt === "tandenstoker") points += 5;
    // Als er geen extra reinigingsmiddel wordt gebruikt, -5 punten
    else if (reinigingsmiddelenPunt === "niks") points += -5;

    // De frequentie van tandplakcontrole ophalen
    var tandplakPunt = document.querySelector('input[name="tandplak"]:checked').value;
    // Als de gebruiker tandplak verwijdert, krijgt hij of zij 10 punten
    if (tandplakPunt === "Ja") points += 10;
    // Tandplak minder dan 1 keer per jaar verwijderen geeft 5 punten
    else if (tandplakPunt === "Minder dan 1x per jaar") points += 5;
    // Geen tandplakcontrole geeft 0 punten
    else if (tandplakPunt === "Nee") points += 0;

    // Gebruikt de gebruiker een tandenborstel?
    var tandenborstelPunt = document.querySelector('input[name="tandenborstel"]:checked').value;
    // Als de gebruiker een tandenborstel gebruikt, 10 punten
    if (tandenborstelPunt === "Ja") points += 10;
    // Geen tandenborstel gebruiken levert slechts 5 punten op
    else if (tandenborstelPunt === "Nee") points += 5;

    // Gebruikt de gebruiker tandenpasta?
    var tandenpastaPunt = document.querySelector('input[name="tandenpasta"]:checked').value;
    // Tandenpasta gebruiken levert 10 punten op
    if (tandenpastaPunt === "Ja") points += 10;
    // Geen tandenpasta gebruiken levert slechts 5 punten op
    else if (tandenpastaPunt === "Nee") points += 5;

    // Heeft de gebruiker last van een slechte adem?
    var ademPunt = document.querySelector('input[name="adem"]:checked').value;
    // Geen slechte adem levert 10 punten op
    if (ademPunt === "Nee") points += 10;
    // Slechte adem heeft geen invloed op de score (0 punten)
    else if (ademPunt === "Ja") points += 0;

    // Gebruikt de gebruiker een tongschraper?
    var tongschraperPunt = document.querySelector('input[name="tongschraper"]:checked').value;
    // Een tongschraper gebruiken levert 10 punten op
    if (tongschraperPunt === "Ja") points += 10;
    // Geen tongschraper gebruiken levert 5 punten op
    else if (tongschraperPunt === "Nee") points += 5;

    // Heeft de gebruiker last van tandvleesproblemen?
    var tandvleesPunt = document.querySelector('input[name="tandvlees"]:checked').value;
    // Geen tandvleesproblemen levert 10 punten op
    if (tandvleesPunt === "Nee") points += 10;
    // Tandvleesproblemen resulteren in -10 punten
    else if (tandvleesPunt === "Ja") points += -10;

    // Bezoekt de gebruiker minimaal 2 keer per jaar de tandarts?
    var minimaalPunt = document.querySelector('input[name="minimaal"]:checked').value;
    // Minimaal 2 keer per jaar de tandarts bezoeken levert 10 punten op
    if (minimaalPunt === "Ja") points += 10;
    // Minder dan 2 keer per jaar de tandarts bezoeken levert 5 punten op
    else if (minimaalPunt === "Nee") points += 5;

    // Variabele waarin het eindresultaat wordt opgeslagen
    var result = "";
    // Variabele voor extra tips en adviezen
    var tips = "";

    // Score hoger dan 80: uitstekende mondverzorging
    if (points > 80) {
        result = "U verzorgt uw gebit uitstekend!";
        tips = "✨ Blijf zo doorgaan! Gebruik dagelijks ragers of floss en bezoek regelmatig de tandarts.";
    }
    // Score tussen 60 en 80: goed, maar kan beter
    else if (points > 60) {
        result = "U verzorgt uw gebit goed, maar er zijn verbeterpunten.";
        tips = "🔍 Let extra op uw reinigingsgewoonten. Overweeg vaker grondig te reinigen en bezoek uw tandarts voor advies. U kunt bij ons terecht voor een afspraak! Belt u gerust naar 073-6897955.";
    }
    // Score tussen 20 en 60: matige gebitsverzorging
    else if (points > 20) {
        result = "Uw gebitsverzorging is matig. Vraag advies aan de tandarts.";
        tips = "⚠️ Waarschijnlijk heeft u al gebitsproblemen. Poets minimaal 2x per dag en gebruik dagelijks ragers. U kunt bij ons terecht voor een afspraak! Belt u gerust naar 073-6897955.";
    }
    // Score lager dan 20: slechte mondhygiëne, direct actie ondernemen
    else {
        result = "U verzorgt uw gebit niet goed! Maak direct een afspraak bij de tandarts.";
        tips = "🚨 U loopt een groot risico op tandproblemen! Plan snel een controle en begin met betere mondhygiëne. U kunt bij ons terecht voor een afspraak! Belt u gerust naar 073-6897955.";
    }

    // Resultaat en tips weergeven op de webpagina
    document.getElementById("result").innerText = `Total Points: ${points} - ${result}`; // Totaalscore en eindresultaat tonen
    document.getElementById("tips").innerText = `Tips: ${tips}`;// Tips voor betere mondverzorging tonen
}
