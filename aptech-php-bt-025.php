<?php
function namNhuan($nam) {
    if (($nam % 4 == 0 && $nam % 100 != 0) || ($nam % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

echo "<h1>Bai 5.</h1>";

$nam = 2000;
if (namNhuan($nam)) {
    echo "Năm $nam là năm nhuận";
} else {
    echo "Năm $nam không phải là năm nhuận";
}
?>
