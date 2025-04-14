<?php
if (isset($_POST["num"])) {
    $num = $_POST["num"];
    echo "You entered: $num<br>";

    // Even or Odd
    if ($num % 2 == 0) {
        echo "It is Even<br>";
    } else {
        echo "It is Odd<br>";
    }

    // Prime check
    $prime = true;
    if ($num <= 1) {
        $prime = false;
    } else {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $prime = false;
                break;
            }
        }
    }

    if ($prime) {
        echo "It is a Prime number.";
    } else {
        echo "It is not a Prime number.";
    }
} else {
    echo "Please enter a number from the form.";
}
?>
