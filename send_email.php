<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "juulrunner01@gmail.com";
    $subject = "Nieuw bericht van $name";
    $body = "Naam: $name\nE-mail: $email\nBericht:\n$message";
    if (mail($to, $subject, $body)) {
        echo "Bedankt voor je bericht! We zullen het zo snel mogelijk proberen op te lossen.";
    } else {
        echo "Er is een fout opgetreden bij het verzenden van je bericht. Probeer het later opnieuw.";
    }
}
?>
