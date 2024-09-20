<?php

// global
// local
// static

// $name = "kareem";

// function getname() {
//     $name = "mohmed"; // local
//     // global $name;
//     echo $name;
// }

// echo $name;

// getname();

//  ---------------------------------------

function counter() {
    static $counter = 0;
    $counter++;
    echo $counter;
}

for ($i = 0; $i < 5; $i++) {
    counter();
}
