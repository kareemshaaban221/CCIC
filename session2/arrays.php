<?php

echo "<pre>";

$names = [
    'ahmed',
    'mohamed',
    'bahaa',
    'alaa',
    'donia'
];

// var_dump($names);

// asort
// sort
// ksort

// var_dump(array_search('mohamed', $names));

// if (array_search('mohamed', $names) !== false) {
//     echo "Hello, world";
// }

// var_dump($names);

// $filtered_names = array_filter($names, function ($item) {
//     return $item == 'ahmed';
// });

function our_array_filter($array, callable $closure): array {
    $filtered_array = [];
    foreach ($array as $item) {
        if ($closure($item)) {
            $filtered_array[] = $item;
        }
    }
    return $filtered_array;
}

// $filtered_names = [];
// foreach ($names as $name) {
//     if ($name == 'ahmed') {
//         $filtered_names[] = $name;
//     }
// }

// $filter_condition = function ($item) {
//     return $item == 'ahmed';
// };

// $filtered_names = our_array_filter($names, $filter_condition);

// var_dump($filtered_names);

$map_logic = function ($item) {
    return $item == 'ahmed' ? 'unkown' : $item;
};

// $mapped_names = array_map($map_logic, $names);

// $mapped_names = [];
foreach ($names as $key => $name) {
    if ($name == 'ahmed') {
        $names[$key] = 'unkown';
    } else {
        $names[$key] = $name;
    }
}

var_dump($names);


echo "</pre>";

