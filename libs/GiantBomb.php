<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace libs;

use Sunra\PhpSimple\HtmlDomParser;

/**
 * Giant Bomb library.
 *
 * @author Muhammad Febriansyah <hifebriansyah@gmail.com>
 *
 * @since Class available since Release 1.0.0
 */
class GiantBomb
{
    /**
     * GiantBomb base url.
     *
     * @var string
     *
     * @since Property available since Release 1.0.0
     */
    public static $baseUrl = 'https://www.giantbomb.com';

    /**
     * Http option when scrap.
     *
     * Some website validate user-agent.
     *
     * @var array
     *
     * @since Property available since Release 1.0.0
     */
    private static $opts = array(
        'http' => array(
            'method' => 'GET',
            'header' => 'Accept-Language: en-US,en;q=0.8rn
            Accept-Encoding: gzip,deflate,sdchrn
            Accept-Charset:UTF-8,*;q=0.5rn
            User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:19.0) Gecko/20100101 Firefox/19.0 FirePHP/0.4rn',
        ),
    );

    /**
     * label for code = 1.
     *
     * @var int
     *
     * @since Property available since Release 1.0.0
     */
    const SUCCESS = 1;

    /**
     * label for code = 1.
     *
     * @var int
     *
     * @since Property available since Release 1.0.0
     */
    const FAIL = 0;

    /**
     * Scrap game by title.
     *
     * @return array
     *
     * @since Method available since Release 1.0.0
     */
    public static function scrapGamesByTitle($title)
    {
        $response['status'] = self::FAIL;

        $context = stream_context_create(self::$opts);

        $html = HtmlDomParser::file_get_html(
            self::$baseUrl.'/search/?q='.urlencode($title).'&indices[]=game',
            false,
            $context
        );

        $results = $html->find('ul.search-results > li');

        foreach ($results as $key => $value) {
            //title
            $response['data'][$key]['title'] = trim($value->find('h3.title', 0)->plaintext);

            //content
            $content = trim($value->find('p.deck', 0)->plaintext);
            $response['data'][$key]['content'] = ($content) ? $content : null;

            //meta[year, platform]
            $meta = explode('(', str_ireplace('game', '', $value->find('span.type', 0)->plaintext));
            $response['data'][$key]['release_year'] = (trim($meta[0]) != '') ? trim($meta[0]) : null;
            $response['data'][$key]['platform'] = (isset($meta[1])) ? trim(str_replace(')', '', $meta[1])) : null;

            //source_url
            $response['data'][$key]['source_url'] = $value->find('a', 0)->href;

            //images
            $image = $value->find('img', 0)->src;
            $response['data'][$key]['images']['original'] = $image;
            $response['data'][$key]['images']['square_small'] = str_replace('original', 'square_small', $image);
        }

        if (isset($response['data'])) {
            $response['status'] = self::SUCCESS;
        }

        return $response;
    }
}
