<?php

$security = Yii::$app->getSecurity();

$data = [
    [
        'title' => 'Death or Alive 5',
        'content' => 'Awesome batle with a lot characters',
        'image_url' => '1.jpg',
    ],
    [
        'title' => 'DOA Volleyball',
        'content' => 'Yes! this game have a lot fan services!!',
        'image_url' => '2.jpg',
    ],
];

if (isset($data[$index])) {
    return $data[$index];
}

return [
    'title' => $faker->sentence($nbWords = 3),
    'content' => $faker->sentence($nbWords = 8),
    'image_url' => $faker->url,
    'status_id' => 0,
];
