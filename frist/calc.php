<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
</head>

<body>
    <h1>Simple Calculator</h1>
    <form method="post" action="">
        <label for="number1">Enter First Number:</label>
        <input type="number" name="number1" id="number1" step="any" required>
        <br><br>
        <label for="number2">Enter Second Number:</label>
        <input type="number" name="number2" id="number2" step="any" required>
        <br><br>
        <label for="operation">Select Operation:</label>
        <select name="operation" id="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (×)</option>
            <option value="divide">Division (÷)</option>
        </select>
        <br><br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_POST) {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operation = $_POST["operation"];
        $result = "";

        switch ($operation) {
            case "add":
                $result = $number1 + $number2;
                $operationSymbol = "+";
                break;
            case "subtract":
                $result = $number1 - $number2;
                $operationSymbol = "-";
                break;
            case "multiply":
                $result = $number1 * $number2;
                $operationSymbol = "×";
                break;
            case "divide":
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                    $operationSymbol = "÷";
                } else {
                    $result = "Error: Division by zero!";
                }
                break;
            default:
                $result = "Invalid operation selected!";
        }

        if (is_numeric($result)) {
            echo "<h2>Result</h2>";
            echo "<p>$number1 $operationSymbol $number2 = $result</p>";
        } else {
            echo "<h2>Error</h2>";
            echo "<p>$result</p>";
        }
    }
    ?>
</body>

</html>