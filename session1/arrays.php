<?php

// arrays
// types:
//      - indexed array
//      - associative array

$users = [
    "key1" => [
        'frist_name' => 'Mohamed',
        'last_name' => "Emad",
        'email' => 'me1234@ccic.com',
    ],
    "key2" => [
        'frist_name' => 'ali',
        'last_name' => "moahmed",
        'email' => 'me1234@ccic.com',
    ],
];

// foreach ($user as $field_name => $field_value) {
//     echo "$field_name => $field_value";
//     echo "<br>";
// }

echo "<pre>";
// echo var_dump($users);
// echo "<hr>";
// $users = array_merge($users, ["key3" => [
//     'frist_name' => 'kareem',
//     'last_name' => "shaaban",
//     'email' => 'karem@ccic.com',
// ]]);
// echo var_dump($users);

(array_unshift($users, "test value"));
echo var_dump($users);

// foreach ($users as $index => $user) {
//     echo "id: $index <br>";
//     foreach ($user as $field_name => $field_value) {
//         echo $field_name. ': '. $field_value;
//         echo '<br>';
//     }
//     echo "<hr>";
// }


echo "</pre>";

