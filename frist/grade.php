<!DOCTYPE html>
<html>

<head>
    <title>Calculate Percentage and Grade</title>
</head>

<body>
    <h1>Calculate Percentage and Grade</h1>
    <form method="post" action="">
        <label for="physics">Physics (out of 50):</label>
        <input type="number" name="physics" id="physics" max="50" min="0" required>
        <br><br>
        <label for="chemistry">Chemistry (out of 50):</label>
        <input type="number" name="chemistry" id="chemistry" max="50" min="0" required>
        <br><br>
        <label for="biology">Biology (out of 50):</label>
        <input type="number" name="biology" id="biology" max="50" min="0" required>
        <br><br>
        <label for="mathematics">Mathematics (out of 50):</label>
        <input type="number" name="mathematics" id="mathematics" max="50" min="0" required>
        <br><br>
        <label for="computer">Computer (out of 50):</label>
        <input type="number" name="computer" id="computer" max="50" min="0" required>
        <br><br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_POST) {
        // Get input values
        $physics = $_POST["physics"];
        $chemistry = $_POST["chemistry"];
        $biology = $_POST["biology"];
        $mathematics = $_POST["mathematics"];
        $computer = $_POST["computer"];

        // Validate marks
        if (
            $physics <= 50 && $physics >= 0 &&
            $chemistry <= 50 && $chemistry >= 0 &&
            $biology <= 50 && $biology >= 0 &&
            $mathematics <= 50 && $mathematics >= 0 &&
            $computer <= 50 && $computer >= 0
        ) {
            // Calculate total and percentage
            $totalMarks = $physics + $chemistry + $biology + $mathematics + $computer;
            $percentage = ($totalMarks / 250) * 100;

            // Determine grade
            if ($percentage >= 90) {
                $grade = "A";
            } elseif ($percentage >= 80) {
                $grade = "B";
            } elseif ($percentage >= 70) {
                $grade = "C";
            } elseif ($percentage >= 60) {
                $grade = "D";
            } elseif ($percentage >= 40) {
                $grade = "E";
            } else {
                $grade = "F";
            }

            // Display results
            echo "<h2>Results</h2>";
            echo "<p>Total Marks: $totalMarks / 250</p>";
            echo "<p>Percentage: $percentage%</p>";
            echo "<p>Grade: $grade</p>";
        } else {
            echo "<p>Please ensure all marks are between 0 and 50.</p>";
        }
    }
    ?>
</body>

</html>