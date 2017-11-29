<?php

$data = [
    [
        'user_id' => 1,
        'thread_id' => 1,
        'content' => 'Placeat et quia repellat repellendus ipsam est mollitia ipsum voluptatum aspernatur aliquam repudiandae autem eos culpa consequatur illum et.',
    ],
    [
        'user_id' => 1,
        'thread_id' => 1,
        'content' => 'Odit hic nam voluptatem quia dignissimos ratione cumque labore qui voluptatem modi minus voluptatem optio.',
    ],
    [
        'user_id' => 1,
        'thread_id' => 1,
        'content' => 'Veritatis deserunt saepe aperiam cumque harum inventore illum totam sit a sit ipsam nostrum id dolores inventore autem consequatur architecto doloremque iusto aperiam et sapiente.',
    ],
    [
        'user_id' => 2,
        'thread_id' => 2,
        'content' => 'Et cum quia molestiae blanditiis autem sunt ut ut ipsa et dolores eveniet dolores recusandae cumque quam ea qui et maxime.',
    ],
    [
        'user_id' => 2,
        'thread_id' => 2,
        'content' => 'Vel velit ratione sunt totam natus ut aliquid aut voluptates excepturi quia consectetur eum mollitia voluptates cum fuga porro ratione.',
    ],
    [
        'user_id' => 2,
        'thread_id' => 2,
        'content' => 'Quos illum sit facere cum id culpa repudiandae et optio doloremque cupiditate placeat harum temporibus iusto odio laboriosam et consequatur impedit quis similique quis accusantium amet magnam id.',
    ],
    [
        'user_id' => 3,
        'thread_id' => 3,
        'content' => 'Odio nam nemo neque modi voluptatem neque sed omnis minima magni ad deserunt enim eum consequuntur et quod vitae eligendi eos et unde fuga autem animi accusamus.',
    ],
];

if (isset($data[$index])) {
    return $data[$index];
}

return [
    'user_id' => $faker->numberBetween($min = 1, $max = $index),
    'thread_id' => $faker->numberBetween($min = 1, $max = 5),
    'content' => $faker->sentence($nbWords = 20),
    'status_id' => $faker->numberBetween($min = 0, $max = 1),
];
