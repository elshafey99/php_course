<!DOCTYPE html>
<html>

<head>
    <title>Calculate Specific Root</title>
</head>

<body>
    <h1>Calculate Specific Root</h1>
    <form method="post" action="">
        <label for="number">Enter the number:</label>
        <input type="number" name="number" id="number" step="any" required>
        <br><br>
        <label for="root">Enter the root (e.g., 2 for square root, 3 for cube root):</label>
        <input type="number" name="root" id="root" step="any" min="1" required>
        <br><br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_POST) {
        $number = $_POST["number"];
        $root = $_POST["root"];

        if ($root <= 0) {
            echo "<p>Please enter a valid root greater than 0.</p>";
        } else {
            $result = pow($number, 1 / $root);
            echo "<p>The {$root}<sup>th</sup> root of $number is: $result</p>";
        }
    }
    ?>
</body>

</html>