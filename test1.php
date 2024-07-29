<?php
function drawTriangle($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

// Gọi hàm với giá trị n = 5
$n=5;
drawTriangle(5);
?>
