<?php
/**
 * Praktikum DBWT. Autoren:
 * Yannik, Sinthern, 3570151
 * Haider, Abbas, 3567272
 */

$file = fopen('./accesslog.txt', 'a');

// Aktuelle Zeit in timestamp speichern
$timestamp = time();
$datum = date("d.m.Y- H:i", $timestamp);
fwrite($file, "Date: " . $datum . " ");
fwrite($file, "User-Agent: " . $_SERVER["HTTP_USER_AGENT"] . " ");
fwrite($file, "IP: " . $_SERVER['REMOTE_ADDR'] . "\n");
fclose($file);
?>

<html lang="de">
<body>
<p>Hallo, deine Daten werden jetzt gespeichert ;) </p>
</body>
</html>