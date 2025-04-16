<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    // Check from 2 to sqrt($number)
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Example usage
$number = 29; // You can change this number to test different inputs

if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
