<?php

$security = Yii::$app->getSecurity();

$data = [
    [
        'email' => 'admin@icodea.com',
        'password' => '$2y$13$rSsehDCeILrldiARyW1Ov.FkXzthPosNumdsSwKjrXdnK/Ia9Wd8q',
    ],
    [
        'email' => 'inara@icodea.com',
        'password' => '$2y$13$UfaGccCZPGed7z8A0/wxaOREei2u0brrAMkppNbw.ppK30zlRmtBS',
    ],
];

if (isset($data[$index])) {
    return $data[$index];
}

return [
    'email' => $faker->email(),
    'password' => '$2y$13$UfaGccCZPGed7z8A0/wxaOREei2u0brrAMkppNbw.ppK30zlRmtBS',
    'status_id' => 0,
];
