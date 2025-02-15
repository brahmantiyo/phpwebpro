<?php
function is_prime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 1) return false;
    }
    return true;
}

echo "Bilangan prima dari 1 hingga 70:<br>";
for ($i = 1; $i <= 70; $i++) {
    if (is_prime($i)) {
        echo $i . " ";
    }
}
?>