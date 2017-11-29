<?php

$data = [
    [
        'image_url' => 'https://static.giantbomb.com/uploads/original/0/3699/2903750-final+fantasy+xv+v3.jpg',
        'source_url' => '/final-fantasy-xv/3030-21006/',
        'title' => 'Final Fantasy XV',
        'content' => 'The fifteenth entry in Square Enix&#039;s flagship RPG franchise, set in a world that mixes elements of modern technology with magic, a fantasy based on reality.',
        'release_year' => '2016',
        'platform' => 'XONE, PS4',
    ],
    [
        'image_url' => 'https://static.giantbomb.com/uploads/original/0/9536/2958649-1633383377-r1fer.jpg',
        'source_url' => '/final-fantasy-xv-pocket-edition/3030-60935/',
        'title' => 'Final Fantasy XV Pocket Edition',
        'content' => 'An episodic version of Final Fantasy XV with a different art style.',
        'release_year' => '2017',
        'platform' => 'IPAD, ANDR',
    ],
    [
        'image_url' => 'https://static.giantbomb.com/uploads/original/0/9536/2922805-3475270119-32906.jpg',
        'source_url' => '/a-kings-tale-final-fantasy-xv/3030-54248/',
        'title' => 'A King&#039;s Tale: Final Fantasy XV',
        'content' => 'A free prologue to Final Fantasy XV.',
        'release_year' => '2016',
        'platform' => 'PS4',
    ],
    [
        'image_url' => 'https://static.giantbomb.com/uploads/original/0/1992/2978030-image.jpeg',
        'source_url' => '/monster-of-the-deep-final-fantasy-xv/3030-59925/',
        'title' => 'Monster of the Deep: Final Fantasy XV',
        'content' => 'A Final Fantasy spin off fishing game for PlayStation VR.',
        'release_year' => '2017',
        'platform' => 'PS4',
    ],
    [
        'image_url' => 'https://static.giantbomb.com/uploads/original/16/165036/2949294-ffxv_anewempire-3.jpg',
        'source_url' => '/final-fantasy-xv-a-new-empire/3030-60160/',
        'title' => 'Final Fantasy XV: A New Empire',
        'content' => 'Game for android and ios.',
        'release_year' => '2017',
        'platform' => 'IPAD, ANDR',
    ],
    [
        'image_url' => 'https://static.giantbomb.com/uploads/original/9/93770/2361723-nes_finalfantasy.jpg',
        'source_url' => '/final-fantasy/3030-8403/',
        'title' => 'Final Fantasy',
        'content' => 'Final Fantasy was the first entry in the now widely recognized Final Fantasy franchise, originally developed on the NES by Square (now Square-Enix).',
        'release_year' => '1987',
        'platform' => 'NES, MSX, WSC, PS1 + 5 more',
    ],
];

if (isset($data[$index])) {
    return $data[$index];
}

return [
    'title' => $faker->sentence($nbWords = 3),
    'content' => $faker->sentence($nbWords = 8),
    'release_year' => '1987',
    'platform' => $faker->sentence($nbWords = 8),
    'source_url' => $faker->url,
    'image_url' => $faker->imageUrl($width = 200, $height = 300),
    'status_id' => 0,
];
