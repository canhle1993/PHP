<?php
function soNguyenTo($number) {
    if ($number <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true;
}

echo "<h1>Bai 4.</h1>";

$number = 13;
if (soNguyenTo($number)) {
    echo "Số $number là số nguyên tố";
} else {
    echo "Số $number không phải là số nguyên tố";
}
?>
