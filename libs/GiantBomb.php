<?php

namespace libs;

use Sunra\PhpSimple\HtmlDomParser;

class GiantBomb
{
    public static $baseUrl = 'https://www.giantbomb.com';

    public static function scrapGamesByTitles($title)
    {
        $response['status'] = 0;

        $html = HtmlDomParser::file_get_html(self::$baseUrl.'/search/?q='.urlencode($_GET['title']).'&indices[]=game');
        $results = $html->find('ul.search-results > li');

        foreach ($results as $key => $value) {
            $response['data'][$key]['src'] = $value->find('img', 0)->src;
            $response['data'][$key]['href'] = $value->find('a', 0)->href;
            $response['data'][$key]['title'] = trim($value->find('h3.title', 0)->plaintext);
            $response['data'][$key]['description'] = trim($value->find('p.deck', 0)->plaintext);

            $meta = explode('(', str_ireplace('game', '', $value->find('span.type', 0)->plaintext));

            if (trim($meta[0]) != '') {
                $response['data'][$key]['release'] = trim($meta[0]);
            }

            if (isset($meta[1])) {
                $response['data'][$key]['platform'] = trim(str_replace(')', '', $meta[1]));
            }
        }

        if (isset($response['data'])) {
            $response['status'] = 1;
        }

        return $response;
    }
}
