<?php

$data = [
    [
        'user_id' => 1,
        'game_id' => 1,
        'title' => 'this good',
        'content' => 'realy good',
    ],
    [
        'user_id' => 2,
        'game_id' => 1,
        'title' => $faker->sentence($nbWords = 8),
        'content' => $faker->sentence($nbWords = 20),
    ],
];

if (isset($data[$index])) {
    return $data[$index];
}

return [
    'user_id' => $faker->numberBetween($min = 1, $max = $index),
    'game_id' => $faker->numberBetween($min = 1, $max = 5),
    'title' => $faker->sentence($nbWords = 8),
    'content' => $faker->sentence($nbWords = 20),
    'status_id' => $faker->numberBetween($min = 0, $max = 1),
];
