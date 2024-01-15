<?php 
    $parola = $_GET["parola"];
    $testo = $_GET["testo"];
    $newText = str_replace($parola, "***", $testo);
    $lunghezzaTesto = strlen($newText);

    echo "<strong>Testo modificato:</strong> $newText <br/> <strong>Lunghezza:</strong> $lunghezzaTesto"
?>