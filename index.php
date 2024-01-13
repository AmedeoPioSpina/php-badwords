<?php 
        $paragrafoDiTesto = "Di che colore era il cavallo bianco di Napoleone?";
        $lunghezzaTesto = strlen($paragrafoDiTesto);
        $testoOriginale = "<strong>Testo:</strong> $paragrafoDiTesto <br/> <strong>Lunghezza testo:</strong> $lunghezzaTesto";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php 
            echo $testoOriginale;
        ?>
    </p>
    <form action="./script.php" method="GET">
        <input type="hidden" name="testo" value="<?php echo $paragrafoDiTesto?>">
        <input type="hidden" name="lunghezzaTesto" value="<?php echo $lunghezzaTesto ?>">
        <input type="text" name="parola">
        <input type="submit" value="Invia">
    </form>
</body>
</html>