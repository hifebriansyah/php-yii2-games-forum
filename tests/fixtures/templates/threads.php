<?php

$data = [
    [
        'user_id' => 1,
        'game_id' => 1,
        'title' => 'Animi magnam magni voluptatum quam.',
        'content' => 'Voluptatum sed consequuntur in ut ad non cumque harum ut et aut iusto ea veniam doloribus nisi hic ab quisquam quidem reprehenderit sit deleniti natus et accusantium deserunt ratione omnis sunt similique reprehenderit quidem ad aut maxime iusto qui magni et fugit dolorem quia error eaque repellendus exercitationem eligendi occaecati et et consectetur doloremque blanditiis eaque velit quis officiis nesciunt quibusdam nesciunt deserunt et consectetur unde praesentium adipisci doloremque accusamus ut magnam possimus similique deleniti tempore eos recusandae illo quia voluptate qui non deserunt vel magnam cupiditate et pariatur sed aut.',
    ],
    [
        'user_id' => 2,
        'game_id' => 2,
        'title' => 'Facilis nostrum nobis vel et debitis eaque.',
        'content' => 'Voluptas quo beatae laboriosam quas quia ducimus ducimus doloremque qui libero inventore amet optio eos maiores aspernatur dolore dolorem similique voluptate nihil quo maiores aut non nostrum voluptatibus et non dolorum earum omnis laborum tempora totam laudantium vero sapiente libero ratione et in inventore et amet tempore nesciunt quaerat ut sequi placeat et laboriosam sequi quas iste deserunt possimus veritatis atque eos exercitationem reprehenderit ad fuga atque ut omnis quam animi qui ducimus sit architecto eligendi vitae velit suscipit voluptas et sit non ipsam eius sed vel nulla velit corrupti ut eius vitae id totam repudiandae nemo qui.',
    ],
    [
        'user_id' => 1,
        'game_id' => 1,
        'title' => 'Quidem rerum doloribus alias placeat fugiat qui.',
        'content' => 'Sunt animi aliquid nihil soluta hic eos pariatur modi qui eligendi amet quia vel vel voluptatem ut dolorum quaerat et suscipit accusamus eum sunt nulla eos facere sit omnis ab ut inventore neque ut autem amet ut ullam quia rem iure repudiandae mollitia id ducimus et at placeat magni quasi sunt ut aut soluta et sunt quis reprehenderit consequatur perferendis voluptatem sed omnis reprehenderit eos et deleniti impedit qui rerum et a aut nisi rem dolor id hic in fuga fuga similique vel nemo aut qui culpa dolorem error voluptatem nostrum excepturi doloribus sit doloribus aut aliquid exercitationem impedit vitae cumque voluptas rerum consequatur ullam sequi nobis ea provident modi quia maiores ipsa et incidunt placeat est sequi ut officiis ut tenetur qui quis ratione quas modi qui id sed aspernatur soluta omnis animi alias.',
    ],
    [
        'user_id' => 2,
        'game_id' => 1,
        'title' => 'Quisquam fugit ad cupiditate fugit et dolorem velit.',
        'content' => 'Est odio minus exercitationem neque rerum consectetur fugiat iusto ipsum sunt accusantium corrupti libero culpa consequatur est ut sed nisi sunt ducimus asperiores ut voluptas dolores et officia molestias itaque quis blanditiis ea qui sed non aperiam corporis excepturi praesentium dolorem nisi dolore repellendus fuga repellendus animi laboriosam et eligendi hic ullam id labore quia minima labore doloribus et deserunt ut aut porro cupiditate quis rem iure eaque eos consequatur quibusdam iste dolorum illum delectus qui magni voluptatem ipsum unde et ut omnis omnis natus itaque ipsum at molestiae dolorum repudiandae natus necessitatibus.',
    ],
    [
        'user_id' => 2,
        'game_id' => 1,
        'title' => 'Nostrum ex dolor perspiciatis sed aut repellendus ipsa enim inventore voluptates tempore.',
        'content' => 'Magni ea aut animi est ut sed placeat ut expedita porro commodi quisquam molestiae eum culpa illo deserunt sint libero deserunt quo soluta qui omnis quibusdam hic dolore et dolorem unde placeat praesentium eligendi accusantium tempora fugiat deserunt suscipit odio velit unde dolore facilis possimus labore aperiam dolores non quia velit officia aliquid molestiae et minima similique molestiae qui quos debitis minus vel magni est sunt rerum architecto non sed molestiae perspiciatis maxime ab doloribus rerum facilis aliquid laudantium expedita consequuntur et nihil a ut ipsam omnis totam et dicta tempore dignissimos consequuntur ipsum et laudantium similique nihil voluptatem maiores dolor cumque eum quo iusto eius autem vitae quo exercitationem quo ut aperiam modi ut voluptate aliquam voluptatem minus delectus numquam ut beatae sit occaecati quia velit aliquid qui deserunt iure temporibus.',
    ],
];

if (isset($data[$index])) {
    return $data[$index];
}

return [
    'user_id' => $faker->numberBetween($min = 1, $max = $index),
    'game_id' => $faker->numberBetween($min = 1, $max = 5),
    'title' => $faker->sentence($nbWords = 8),
    'content' => $faker->sentence($nbWords = 100),
    'views_count' => $faker->numberBetween($min = 1, $max = $index * 3),
    'status_id' => $faker->numberBetween($min = 0, $max = 1),
];
