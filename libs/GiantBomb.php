<?php

namespace libs;

use Sunra\PhpSimple\HtmlDomParser;

class GiantBomb
{
    public static $baseUrl = 'https://www.giantbomb.com';

    public static function scrapGamesByTitle($title)
    {
        $response['status'] = 0;

        $html = HtmlDomParser::file_get_html(self::$baseUrl.'/search/?q='.urlencode($_GET['title']).'&indices[]=game');
        $results = $html->find('ul.search-results > li');

        foreach ($results as $key => $value) {
            $image = $value->find('img', 0)->src;

            $response['data'][$key]['images']['original'] = $image;
            $response['data'][$key]['images']['square_small'] = str_replace('original', 'square_small', $image);

            $response['data'][$key]['source_url'] = $value->find('a', 0)->href;
            $response['data'][$key]['title'] = trim($value->find('h3.title', 0)->plaintext);

            $description = trim($value->find('p.deck', 0)->plaintext);

            $response['data'][$key]['description'] = ($description) ? $description : null;

            $meta = explode('(', str_ireplace('game', '', $value->find('span.type', 0)->plaintext));

            $response['data'][$key]['release'] = (trim($meta[0]) != '') ? trim($meta[0]) : null;

            $response['data'][$key]['platform'] = (isset($meta[1])) ? trim(str_replace(')', '', $meta[1])) : null;
        }

        if (isset($response['data'])) {
            $response['status'] = 1;
        }

        return $response;
    }
}
