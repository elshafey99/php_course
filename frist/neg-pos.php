<!DOCTYPE html>
<html>

<head>
    <title>Check Negative or Positive</title>
</head>

<body>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_POST) {
        $number = $_POST["number"];

        if ($number > 0) {
            echo "<p>The number $number is positive.</p>";
        } elseif ($number < 0) {
            echo "<p>The number $number is negative.</p>";
        } else {
            echo "<p>The number is zero.</p>";
        }
    }
    ?>
</body>

</html>