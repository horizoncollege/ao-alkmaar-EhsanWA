<!DOCTYPE html>
<html>

<head>
    <script>
        function hidePlayer1() {
            document.getElementById("player1choice").style.display = "none";
        }

        function showPlayer1() {
            document.getElementById("player1choice").style.display = "block";
        }

        function hidePlayer2() {
            document.getElementById("player2choice").style.display = "none";
        }

        function showPlayer2() {
            document.getElementById("player2choice").style.display = "block";
        }
    </script>
    <link rel="stylesheet" href="css/gstyle.css">
</head>

<body>
    <h1>2-Player Rock-Paper-Scissors Game</h1>
    <form>
        <h2>Player 1</h2>
        <button type="button" onclick="hidePlayer1()">Hide Choice</button>
        <button type="button" onclick="showPlayer1()">Reveal Choice</button>
        <div id="player1choice">
            <br>
            <input type="radio" id="rock" name="choice" value="rock">
            <label for="rock">Rock</label>
            <br>
            <input type="radio" id="paper" name="choice" value="paper">
            <label for="paper">Paper</label>
            <br>
            <input type="radio" id="scissors" name="choice" value="scissors">
            <label for="scissors">Scissors</label>
            <br>

            <?php
            if (isset($_GET['choice'])) {
                echo "Player 1 chose: " . $_GET['choice'];
            }
            ?>
        </div>
        <br>
        <h2>Player 2</h2>
        <button type="button" onclick="hidePlayer2()">Hide Choice</button>
        <button type="button" onclick="showPlayer2()">Reveal Choice</button>
        <div id="player2choice">

            <br>
            <input type="radio" id="rock2" name="choice2" value="rock">
            <label for="rock2">Rock</label>
            <br>
            <input type="radio" id="paper2" name="choice2" value="paper">
            <label for="paper2">Paper</label>
            <br>
            <input type="radio" id="scissors2" name="choice2" value="scissors">
            <label for="scissors2">Scissors</label>
            <br>

            <?php
            if (isset($_GET['choice2'])) {
                echo "Player 2 chose: " . $_GET['choice2'];
            }
            ?>
        </div>
        <br>
        <input type="submit" value="Submit">
        <?php
        if (isset($_GET['choice']) && isset($_GET['choice2'])) {
            $player1 = $_GET['choice'];
            $player2 = $_GET['choice2'];
            if ($player1 == $player2) {
                echo "It's a tie!";
            } elseif (($player1 == "rock" && $player2 == "scissors") || ($player1 == "paper" && $player2 == "rock") || ($player1 == "scissors" && $player2 == "paper")) {
                echo "Player 1 wins!";
            } else {
                echo "Player 2 wins!";
            }
        }
        ?>

    </form>
</body>

</html>