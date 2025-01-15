<!DOCTYPE html>
<html>

<head>
    <title>Check Even or Odd</title>
</head>

<body>
    <h1>Even or Odd Checker</h1>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <br><br>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_POST) {
        $number = $_POST["number"];

        if ($number % 2 == 0) {
            echo "<p>The number $number is even.</p>";
        } else {
            echo "<p>The number $number is odd.</p>";
        }
    }
    ?>
</body>

</html>