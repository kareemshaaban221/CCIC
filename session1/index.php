<?php

$gds = "tt";
$string = "gds";

$arr = [
    'var1', 
    'var2'
];

foreach ($arr as $elem) {
    echo $$elem;
}

echo $$string;

// loosely coupled

