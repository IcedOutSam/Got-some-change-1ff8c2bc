<?php
$kech = $argv[1];
if ($kech == 0) {
    echo "Geen wisselgeld";
} else {
    echo intval($kech) . " x 1 Euro";
}

?>
