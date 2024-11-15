<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ontvang de gegevens uit het formulier
    $onderwerp = $_POST['onderwerp'];
    $naam = $_POST['naam'];
    $bedrijfsnaam = $_POST['bedrijfsnaam'];
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $bericht = $_POST['bericht'];

    // Instellen van het e-mailadres waar de e-mail naartoe wordt gestuurd
    $to = "tom.menalda@gmail.com";  // Vervang dit met je eigen e-mailadres
    $subject = "Nieuw contactformulier bericht: " . $onderwerp;

    // Opstellen van de e-mailinhoud
    $message = "Naam: $naam\n";
    $message .= "Bedrijfsnaam: $bedrijfsnaam\n";
    $message .= "E-mail: $email\n";
    $message .= "Telefoonnummer: $telefoonnummer\n";
    $message .= "Bericht:\n$bericht\n";

    // Extra headers
    $headers = "From: $email";

    // Verzenden van de e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Bedankt! Uw bericht is verzonden.";
    } else {
        echo "Sorry, er is een fout opgetreden. Probeer het later opnieuw.";
    }
}
?>