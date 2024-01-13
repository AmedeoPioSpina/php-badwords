<?php 
    $parola = $_GET["parola"];
    $testo = $_GET["testo"];
    $lunghezzaTesto = $_GET["lunghezzaTesto"];
    
    $newText = str_replace($parola, "***", $testo);

    echo "<strong>Testo modificato:</strong> $newText <br/> <strong>Lunghezza:</strong> $lunghezzaTesto"
?>