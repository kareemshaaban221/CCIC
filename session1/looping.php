<?php

// indexed
$names = [
    'mohamed',
    'ahmed',
    'ali',
    'esraa',
];

// for loop
for ($i = 0; $i < count($names); $i++) {
    echo $names[$i];
    echo "<br>";
}

// while loop
$i = -1;
while ($i < count($names) - 1) {
    echo $names[++$i];
    echo "<br>";
}

// do while loop
$i = 0;
do {
    echo $names[$i++];
    echo "<br>";
} while ($i < count($names));

// foreach
foreach ($names as $item) {
    echo $item;
    echo "<br>";
}
