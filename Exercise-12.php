<!DOCTYPE html>
<html>
<head>
    <title>Text Submission Form</title>
</head>
<body>
    <h2>Enter Information</h2>
    <form method="post" action="">
        <label for="info">Enter Text:</label>
        <input type="text" name="info" id="info" required>
        <br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = trim($_POST['info']);

        if (!empty($input)) {
            echo "<h3>You entered: $input</h3>";

            // File path
            $file = "data.txt";

            // Append input to file with newline
            file_put_contents($file, $input . PHP_EOL, FILE_APPEND);

            echo "<p>Data has been saved to <strong>$file</strong>.</p>";
        } else {
            echo "<p>Please enter some text.</p>";
        }
    }
    ?>
</body>
</html>
