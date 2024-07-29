<?php
function veHinh($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

echo "<h1>Bai 2.</h1>";

$n=5;
veHinh(5);
?>
