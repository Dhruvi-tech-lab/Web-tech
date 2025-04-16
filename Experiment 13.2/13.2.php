<!-- Question: Execute PHP script to read the contents of a text document -->

<?php
$filename = "sample.txt";

if (file_exists($filename)) {
    $content = file_get_contents($filename);
    echo "<h3>Contents of the file:</h3>";
    echo "<pre>$content</pre>";
} else {
    echo "File found hisis testng for php ";
}
?>
