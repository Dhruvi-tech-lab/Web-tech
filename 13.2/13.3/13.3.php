<?php
// Loop through the years from 1801 to 1900
for ($year = 1801; $year <= 1900; $year++) {
    // Check if the year is a leap year
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo $year . " is a leap year.<br>";
    }
}
?>
