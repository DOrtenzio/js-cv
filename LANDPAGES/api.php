<?php
// Gestione CORS e header
if ($_SERVER["REQUEST_METHOD"] == "OPTIONS") {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");
    exit;
}

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Access-Control-Allow-Credentials: true");

// Debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Verifica se la richiesta è di tipo GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Recupera i dati personali
    $name_cognom = isset($_GET['name_cognom']) ? $_GET['name_cognom'] : 'Non specificato';
    $indirizzo = isset($_GET['indirizzo']) ? $_GET['indirizzo'] : 'Non specificato';
    $data = isset($_GET['data']) ? $_GET['data'] : 'Non specificato';

    // Recupera i titoli personali (array)
    $titoli = isset($_GET['titolo']) ? $_GET['titolo'] : [];
    $anni = isset($_GET['anno']) ? $_GET['anno'] : [];
    $luoghi = isset($_GET['luogo_titolo']) ? $_GET['luogo_titolo'] : [];

    // Recupera le esperienze lavorative (array)
    $posti = isset($_GET['posto']) ? $_GET['posto'] : [];
    $durate = isset($_GET['durata']) ? $_GET['durata'] : [];
    $luoghi_lavoro = isset($_GET['luogo_lavoro']) ? $_GET['luogo_lavoro'] : [];

    // Inizia l'output HTML
    echo "<!DOCTYPE html>
    <html lang='it'>
    <head>
        <title>Dati Ricevuti</title>
        <meta charset='UTF-8'>
        <style>
            body { font-family: Arial, sans-serif; margin: 20px; }
            h2 { color: #333; }
            p { margin: 5px 0; }
            .section { margin-bottom: 20px; }
        </style>
    </head>
    <body>";

    // Mostra i dati personali
    echo "<div class='section'>
        <h2>Dati Personali</h2>
        <p><strong>Nome e Cognome:</strong> $name_cognom</p>
        <p><strong>Indirizzo:</strong> $indirizzo</p>
        <p><strong>Data di Nascita:</strong> $data</p>
    </div>";

    // Mostra i titoli personali
    echo "<div class='section'>
        <h2>Titoli Personali</h2>";
    if (count($titoli) > 0) {
        foreach ($titoli as $index => $titolo) {
            $anno = isset($anni[$index]) ? $anni[$index] : 'Non specificato';
            $luogo_titolo = isset($luoghi[$index]) ? $luoghi[$index] : 'Non specificato';
            echo "<p><strong>Titolo:</strong> $titolo, <strong>Anno:</strong> $anno, <strong>Luogo:</strong> $luogo_titolo</p>";
        }
    } else {
        echo "<p>Non ci sono titoli personali.</p>";
    }
    echo "</div>";

    // Mostra le esperienze lavorative
    echo "<div class='section'>
        <h2>Esperienze Lavorative</h2>";
    if (count($posti) > 0) {
        foreach ($posti as $index => $posto) {
            $durata = isset($durate[$index]) ? $durate[$index] : 'Non specificata';
            $luogo_lavoro_esperienza = isset($luoghi_lavoro[$index]) ? $luoghi_lavoro[$index] : 'Non specificato';
            echo "<p><strong>Posto:</strong> $posto, <strong>Durata:</strong> $durata anni, <strong>Luogo:</strong> $luogo_lavoro_esperienza</p>";
        }
    } else {
        echo "<p>Non ci sono esperienze lavorative.</p>";
    }
    echo "</div>";

    // Chiudi l'output HTML
    echo "</body></html>";
} else {
    // Se la richiesta non è GET, mostra un messaggio
    echo "<p>Non è stato inviato alcun dato.</p>";
}
?>