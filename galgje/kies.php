<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galgje - Kies woord</title>
    <link rel="stylesheet" href="hangman.css">
</head>

<body>
    <h1>GALGJE</h1>
    <?php
    echo '<form action="hangman-keuze.php" method="POST">';
    echo '<input type="text" value="Kies hier je woord in" name="word">';
    echo "<input type='submit' value='word'>";
    echo '</form>';
    ?>
</body>

</html>