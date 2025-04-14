<!DOCTYPE html>
<html>
<head>
    <title>Display File Data in Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>

<h2>User Information from File</h2>

<?php
$filename = "data.txt";

// Check if file exists
if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    if (!empty($lines)) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Password</th><th>Email</th></tr>";

        foreach ($lines as $line) {
            $parts = explode(":", $line);
            if (count($parts) == 3) {
                echo "<tr>";
                foreach ($parts as $part) {
                    echo "<td>" . htmlspecialchars(trim($part)) . "</td>";
                }
                echo "</tr>";
            }
        }

        echo "</table>";
    } else {
        echo "<p>The file is empty.</p>";
    }
} else {
    echo "<p>File not found: $filename</p>";
}
?>

</body>
</html>
