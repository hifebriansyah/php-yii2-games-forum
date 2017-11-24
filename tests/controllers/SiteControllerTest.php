<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use Sunra\PhpSimple\HtmlDomParser;

/**
 * Site controller tests.
 *
 * @author Muhammad Febriansyah <hifebriansyah@gmail.com>
 *
 * @since Class available since Release 1.0.0
 */
class SiteControllerTest extends PHPUnit_Framework_TestCase
{
    /**
     * Controller name id.
     *
     * @var string
     *
     * @since Property available since Release 1.0.0
     */
    private $id;

    /**
     * Html of index action.
     *
     * @var string
     *
     * @since Property available since Release 1.0.0
     */
    private $index;

    /**
     * Site controller test constructor.
     *
     * Initialize id,
     * Initialize index action.
     *
     * @since Method available since Release 1.0.0
     */
    public function __construct()
    {
        $this->id = 'site';
        $this->index = HtmlDomParser::str_get_html(Yii::$app->runAction($this->id));
    }

    /**
     * Validity test of index action.
     *
     * Sliders data validation.
     *
     * @var string
     *
     * @since Property available since Release 1.0.0
     */
    public function testActionIndex()
    {
        $sliders = include \Yii::$app->params['dataPath'].'/sliders.php';

        foreach ($this->index->find('.carousel-item') as $index => $item) {
            $this->assertEquals($item->find('h3', 0)->plaintext, $sliders[$index]['title']);
            $this->assertEquals($item->find('p', 0)->plaintext, $sliders[$index]['content']);
            $this->assertTrue(strpos($item->find('.carousel-img', 0)->style, 'static/data/sliders/'.$sliders[$index]['image_url']) > 0);
        }
    }
}
