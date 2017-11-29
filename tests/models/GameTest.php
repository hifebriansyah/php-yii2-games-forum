<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use app\models\Game;

/**
 * Game model tests.
 *
 * @author Muhammad Febriansyah <hifebriansyah@gmail.com>
 *
 * @since Class available since Release 1.0.0
 */
class GameTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test model.
     *
     * @var \app\models\Game
     *
     * @since Property available since Release 1.0.0
     */
    private $model;

    /**
     * Test table name.
     *
     * @var string
     *
     * @since Property available since Release 1.0.0
     */
    private $tableName = 'games';

    /**
     * Game test constructor.
     *
     * Initialize model.
     *
     * @since Method available since Release 1.0.0
     */
    public function __construct()
    {
        $this->model = new Game();
    }

    /**
     * Test validity of table name.
     *
     * @since Method available since Release 1.0.0
     */
    public function testValidTableName()
    {
        $this->assertEquals($this->model->tableName(), $this->tableName);
    }

    /**
     * Test an array rules is exist.
     *
     * @since Method available since Release 1.0.0
     */
    public function testRulesExist()
    {
        $this->assertTrue(is_array($this->model->rules()));
    }

    /**
     * Test validity of result keys.
     *
     * Scrap will took time.
     *
     * @todo set fixture to assert equals
     *
     * @since Method available since Release 1.0.0
     */
    public function testValidFetchByTitle()
    {
        $models = $this->model->fetchByTitle('final');

        $this->assertEquals(count($models), 2);

        $this->assertArrayHasKey('status', $models);
        $this->assertArrayHasKey('data', $models);

        $this->assertArrayHasKey('title', $models['data'][0]);
        $this->assertArrayHasKey('content', $models['data'][0]);
        $this->assertArrayHasKey('release_year', $models['data'][0]);
        $this->assertArrayHasKey('platform', $models['data'][0]);
        $this->assertArrayHasKey('source_url', $models['data'][0]);
        $this->assertArrayHasKey('images', $models['data'][0]);

        $this->assertArrayHasKey('original', $models['data'][0]['images']);
        $this->assertArrayHasKey('square_small', $models['data'][0]['images']);
    }

    /**
     * Test validity of result keys.
     *
     * @todo set fixture to assert equals
     *
     * @since Method available since Release 1.0.0
     */
    public function testValidFetchPopular()
    {
        $models = $this->model->fetchPopular();

        $this->assertEquals(count($models[0]), 4);

        $this->assertArrayHasKey('source_url', $models[0]);
        $this->assertArrayHasKey('title', $models[0]);
        $this->assertArrayHasKey('platform', $models[0]);
        $this->assertArrayHasKey('image_url', $models[0]);
    }
}
